<?php
function create_post_type() {
    $supports = [  // supports のパラメータを設定する配列（初期値だと title と editor のみ投稿画面で使える）
      'title',  // 記事タイトル
      'editor',  // 記事本文
    ];
    register_post_type(
        'article',  // カスタム投稿ID
        array(
          'label' => '求人',  // カスタム投稿名(管理画面の左メニューに表示されるテキスト)
          'public' => true,  // 投稿タイプをパブリックにするか否か
          'has_archive' => true,  // アーカイブ(一覧表示)を有効にするか否か
          'menu_position' => 5,  // 管理画面上でどこに配置するか今回の場合は「投稿」の下に配置
          'rewrite' => array('with_front' => false),
          'supports' => $supports,  // 投稿画面でどのmoduleを使うか的な設定
        )
    );
    register_taxonomy (
        'article-category', /* タクソノミーの名前 */
        'article', /* 使用するカスタム投稿タイプ名 */
        array(
            'hierarchical' => true, /* trueだと親子関係が使用可能。falseで使用不可 */
            'update_count_callback' => '_update_post_term_count',
            'label' => '業務内容カテゴリー',
            'singular_label' => '業務内容カテゴリー',
            'public' => true,
            'show_ui' => true,// 管理画面表示ON/OFF
        )
    );
}
add_action( 'init', 'create_post_type' ); // アクションに上記関数をフックします

function add_custom_fields() {
    add_meta_box(
        'article_id', //id(必須)
        '求人詳細',//title(必須)
        'article_custom_fields',//コールバック(必須)
        'article',//投稿の種類(必須、post、pageなど)
        'advanced',// 編集画面セクションが表示される部分(オプション)
        'default',//優先順位
    );
}
add_action( 'admin_menu', 'add_custom_fields' );

//画像をアップする場合は、multipart/form-dataの設定が必要なので、post_edit_form_tagをフックしてformタグに追加
function custom_metabox_edit_form_tag() {
    echo ' enctype="multipart/form-data"';
}
add_action('post_edit_form_tag', 'custom_metabox_edit_form_tag');

// カスタムフィールドの入力エリア
function article_custom_fields() {
    global $post;
    //get_post_meta関数を使ってpostmeta情報を取得
    $article_salary = get_post_meta(
        $post->ID, //投稿ID
        'article_salary', //キー名
        true //戻り値を文字列にする場合true(falseの場合は配列)
    );
    $article_address = get_post_meta($post->ID, 'article_address', true);
    $article_station = get_post_meta($post->ID, 'article_station', true);
    $article_thumbnail = get_post_meta($post->ID, 'article_thumbnail', true);

    echo '給  与： <input type="text" name="article_salary" value="' . $article_salary . '" /><br>';
    echo '所在地： <input type="text" name="article_address" value="' . $article_address . '" /><br>';
    echo '最寄駅： <input type="text" name="article_station" value="' . $article_station . '" /><br>';
    echo '画像： <input type="file" name="article_thumbnail" accept="img/*" /><br>';
    if (isset($article_thumbnail) && strlen($article_thumbnail) > 0){
        //article_thumbnailキーのpostmeta情報がある場合は、画像を表示
        //$article_thumbnailには、後述するattach_idが格納されているので、wp_get_attachment_url関数にそのattach_idを渡して画像のURLを取得する
        echo '<img style="width: 200px;display: block;margin: 1em;" src="' . wp_get_attachment_url($article_thumbnail) . '">';
    }
}

function save_custom_fields( $post_id ) {
    if (isset($_POST['article_salary'])){
        //article_salaryキーで、$_POST['article_name']を保存
        update_post_meta($post_id, 'article_salary', $_POST['article_salary']);
    } else {
        //article_salaryキーの情報を削除
        delete_post_meta($post_id, 'article_salary');
    }
    if (isset($_POST['article_address'])){
        update_post_meta($post_id, 'article_address', $_POST['article_address']);
    } else {
        delete_post_meta($post_id, 'article_address');
    }
    if (isset($_POST['article_station'])){
        update_post_meta($post_id, 'article_station', $_POST['article_station']);
    } else {
        delete_post_meta($post_id, 'article_station');
    }

    if (isset($_FILES['article_thumbnail']) &&
      $_FILES["article_thumbnail"]["size"] !== 0) {
          $file_name = basename($_FILES['article_thumbnail']['name']);
          $file_name = trim($file_name);
          $file_name = str_replace(" ", "-", $file_name);

          $wp_upload_dir = wp_upload_dir(); //現在のuploadディクレトリのパスとURLを入れた配列
          $upload_file = $_FILES['article_thumbnail']['tmp_name'];
          $upload_path = $wp_upload_dir['path'] . '/' . $file_name; //uploadsディレクトリ以下などに配置する場合は$wp_upload_dir['basedir']を利用する
        //画像ファイルをuploadディクレトリに移動させる
        move_uploaded_file($upload_file, $upload_path);

        $file_type = $_FILES['article_thumbnail']['type'];
        //正規表現で拡張子なしのスラッグ名を生成
        $slug_name = preg_replace('/\.[^.]+$/', '', basename($upload_path));

        if (file_exists($upload_path)){
            //保存に成功してファイルが存在する場合は、wp_postsテーブルなどに情報を追加
            $attachment = array(
                'guid'           => $wp_upload_dir['url'].'/'.basename($file_name),
                'post_mime_type' => $file_type,
                'post_title'     => $slug_name,
                'post_content'   => '',
                'post_status'    => 'inherit'
            );
            //添付ファイルを追加
            $attach_id = wp_insert_attachment($attachment, $upload_path, $post_id);
            if (!function_exists('wp_generate_attachment_metadata')){
                require_once(ABSPATH . "wp-admin" . '/includes/image.php');
            }
            //添付ファイルのメタデータを生成し、wp_postsテーブルに情報を保存
            $attach_data = wp_generate_attachment_metadata($attach_id, $upload_path);
            wp_update_attachment_metadata($attach_id, $attach_data);
            //wp_postmetaテーブルに画像のattachment_id(wp_postsテーブルのレコードのID)を保存
            update_post_meta($post_id, 'article_thumbnail',$attach_id);
        } else {
            //保存失敗
            echo '画像保存に失敗しました';
            exit;
        }
    }
}
add_action('save_post', 'save_custom_fields');

// 自動保存の無効化
function disable_autosave() {
    wp_deregister_script('autosave');
}
add_action('wp_print_scripts','disable_autosave');


function article_post_type_link( $link, $post ){
    if ( $post->post_type === 'article' ) {
      $terms = wp_get_post_terms( $post->ID, 'article-category' );
        if ( !empty( $terms ) ) {
          $term_slug = $terms[0]->slug;
          return home_url( '/' . $term_slug . '/' . $post->ID );
        }
        return home_url( '/article/' . $post->ID );
    } else {
      return $link;
    }
  }
  add_filter( 'post_type_link', 'article_post_type_link', 10, 2 );
  
  function article_rewrite_rules_array( $rules ) {
    $new_rewrite_rules = array(
      'article/([0-9]+)/?$' => 'index.php?post_type=article&p=$matches[1]',
      '(.+?)/([^/]+)/?$' => 'index.php?article-category=$matches[1]&post_type=article&p=$matches[2]',
    );
    return $new_rewrite_rules + $rules;
  }
  add_filter( 'rewrite_rules_array', 'article_rewrite_rules_array' );

