<?php
/*
Template Name: 求人一覧
*/
$uri = get_template_directory_uri();
$upload_dir = wp_upload_dir()['baseurl'];
$args = [
    'post_type' => 'article',
    'post_status' => 'publish',
    'posts_per_page' => -1,
    'order' => 'DESC'
];
$wpq = new WP_Query($args);
get_header();
?>
<main class="l-recruit">
  <h1 class="l-recruit__title">求人一覧</h1>
  <ul class="l-recruit__list">
  <?php if ( $wpq->have_posts() ) : ?>
    <?php while ( $wpq->have_posts() ) : $wpq->the_post(); ?>
      <?php
          $salary = get_post_meta( get_the_ID(), 'article_salary', true );
          $address = get_post_meta( get_the_ID(), 'article_address', true );
          $station = get_post_meta( get_the_ID(), 'article_station', true );
          $thumbnail_id = get_post_meta( get_the_ID(), 'article_thumbnail', true );
          $thumbnail = get_post_meta( $thumbnail_id,  '_wp_attached_file', true);
          $terms = wp_get_post_terms( get_the_ID(), 'article-category' );
      ?>
      <li class="l-recruit__list__item">
        <?php if ( !empty($terms) ) : ?>
          <a class="c-list__new__item__link" href="<?= home_url('/' . $terms[0]->slug . '/' . get_the_ID() )?>">
        <?php else : ?>
          <a class="c-list__new__item__link" href="<?= home_url('/article/' . get_the_ID() )?>">
        <?php endif; ?>
          <?php if ( !empty($thumbnail) ) : ?>
            <img class="c-list__new__item__img" src="<?= $upload_dir . '/' . $thumbnail ?>" alt="">
          <?php else : ?>
            <img class="c-list__new__item__img" src="<?= $uri ?>/img/picture/new_1.jpg" alt="">
          <?php endif; ?>
          <p class="c-list__new__item__text"><?php the_title(); ?></p>
          <p><?php the_content(); ?></p>
          <table class="c-list__new__item__table">
            <tr>
              <th>給与</th>
              <?php if ( !empty($salary) ) : ?>
                <td><?= $salary ?></td>
              <?php else : ?>
                <td>月給 148,000円～</td>
              <?php endif; ?>
            </tr>
            <tr>
              <th>所在地</th>
              <?php if ( !empty($address) ) : ?>
                <td><?= $address ?></td>
              <?php else : ?>
                <td>三重県伊勢市</td>
              <?php endif; ?>
            </tr>
            <tr>
              <th>最寄駅</th>
              <?php if ( !empty($station) ) : ?>
                <td><?= $station ?></td>
              <?php else : ?>
                <td>伊勢市駅 徒歩15分</td>
              <?php endif; ?>
            </tr>
          </table>
        </a>
      </li>
    <?php endwhile; ?>
    <?php wp_reset_postdata(); ?>
  <?php endif; ?>
    <li class="l-recruit__list__item">
      <a class="c-list__new__item__link" href="">
        <img class="c-list__new__item__img" src="<?= $uri ?>/img/picture/new_1.jpg" alt="">
        <p class="c-list__new__item__text">平日・夕方までの勤務!伊勢市の伊勢赤 十字病院で医療事務求人</p>
        <table class="c-list__new__item__table">
          <tr>
            <th>給与</th>
            <td>月給 148,000円～</td>
          </tr>
          <tr>
            <th>所在地</th>
            <td>三重県伊勢市</td>
          </tr>
          <tr>
            <th>最寄駅</th>
            <td>伊勢市駅 徒歩15分</td>
          </tr>
        </table>
      </a>
    </li>
    <li class="l-recruit__list__item">
      <a class="c-list__new__item__link" href="">
        <img class="c-list__new__item__img" src="<?= $uri ?>/img/picture/new_1.jpg" alt="">
        <p class="c-list__new__item__text">平日・夕方までの勤務!伊勢市の伊勢赤 十字病院で医療事務求人</p>
        <table class="c-list__new__item__table">
          <tr>
            <th>給与</th>
            <td>月給 148,000円～</td>
          </tr>
          <tr>
            <th>所在地</th>
            <td>三重県伊勢市</td>
          </tr>
          <tr>
            <th>最寄駅</th>
            <td>伊勢市駅 徒歩15分</td>
          </tr>
        </table>
      </a>
    </li>
    <li class="l-recruit__list__item">
      <a class="c-list__new__item__link" href="">
        <img class="c-list__new__item__img" src="<?= $uri ?>/img/picture/new_1.jpg" alt="">
        <p class="c-list__new__item__text">平日・夕方までの勤務!伊勢市の伊勢赤 十字病院で医療事務求人</p>
        <table class="c-list__new__item__table">
          <tr>
            <th>給与</th>
            <td>月給 148,000円～</td>
          </tr>
          <tr>
            <th>所在地</th>
            <td>三重県伊勢市</td>
          </tr>
          <tr>
            <th>最寄駅</th>
            <td>伊勢市駅 徒歩15分</td>
          </tr>
        </table>
      </a>
    </li>
    <li class="l-recruit__list__item">
      <a class="c-list__new__item__link" href="">
        <img class="c-list__new__item__img" src="<?= $uri ?>/img/picture/new_1.jpg" alt="">
        <p class="c-list__new__item__text">平日・夕方までの勤務!伊勢市の伊勢赤 十字病院で医療事務求人</p>
        <table class="c-list__new__item__table">
          <tr>
            <th>給与</th>
            <td>月給 148,000円～</td>
          </tr>
          <tr>
            <th>所在地</th>
            <td>三重県伊勢市</td>
          </tr>
          <tr>
            <th>最寄駅</th>
            <td>伊勢市駅 徒歩15分</td>
          </tr>
        </table>
      </a>
    </li>
    <li class="l-recruit__list__item">
      <a class="c-list__new__item__link" href="">
        <img class="c-list__new__item__img" src="<?= $uri ?>/img/picture/new_1.jpg" alt="">
        <p class="c-list__new__item__text">平日・夕方までの勤務!伊勢市の伊勢赤 十字病院で医療事務求人</p>
        <table class="c-list__new__item__table">
          <tr>
            <th>給与</th>
            <td>月給 148,000円～</td>
          </tr>
          <tr>
            <th>所在地</th>
            <td>三重県伊勢市</td>
          </tr>
          <tr>
            <th>最寄駅</th>
            <td>伊勢市駅 徒歩15分</td>
          </tr>
        </table>
      </a>
    </li>
    <li class="l-recruit__list__item">
      <a class="c-list__new__item__link" href="">
        <img class="c-list__new__item__img" src="<?= $uri ?>/img/picture/new_1.jpg" alt="">
        <p class="c-list__new__item__text">平日・夕方までの勤務!伊勢市の伊勢赤 十字病院で医療事務求人</p>
        <table class="c-list__new__item__table">
          <tr>
            <th>給与</th>
            <td>月給 148,000円～</td>
          </tr>
          <tr>
            <th>所在地</th>
            <td>三重県伊勢市</td>
          </tr>
          <tr>
            <th>最寄駅</th>
            <td>伊勢市駅 徒歩15分</td>
          </tr>
        </table>
      </a>
    </li>
    <li class="l-recruit__list__item">
      <a class="c-list__new__item__link" href="">
        <img class="c-list__new__item__img" src="<?= $uri ?>/img/picture/new_1.jpg" alt="">
        <p class="c-list__new__item__text">平日・夕方までの勤務!伊勢市の伊勢赤 十字病院で医療事務求人</p>
        <table class="c-list__new__item__table">
          <tr>
            <th>給与</th>
            <td>月給 148,000円～</td>
          </tr>
          <tr>
            <th>所在地</th>
            <td>三重県伊勢市</td>
          </tr>
          <tr>
            <th>最寄駅</th>
            <td>伊勢市駅 徒歩15分</td>
          </tr>
        </table>
      </a>
    </li>
    <li class="l-recruit__list__item">
      <a class="c-list__new__item__link" href="">
        <img class="c-list__new__item__img" src="<?= $uri ?>/img/picture/new_1.jpg" alt="">
        <p class="c-list__new__item__text">平日・夕方までの勤務!伊勢市の伊勢赤 十字病院で医療事務求人</p>
        <table class="c-list__new__item__table">
          <tr>
            <th>給与</th>
            <td>月給 148,000円～</td>
          </tr>
          <tr>
            <th>所在地</th>
            <td>三重県伊勢市</td>
          </tr>
          <tr>
            <th>最寄駅</th>
            <td>伊勢市駅 徒歩15分</td>
          </tr>
        </table>
      </a>
    </li>
    <li class="l-recruit__list__item">
      <a class="c-list__new__item__link" href="">
        <img class="c-list__new__item__img" src="<?= $uri ?>/img/picture/new_1.jpg" alt="">
        <p class="c-list__new__item__text">平日・夕方までの勤務!伊勢市の伊勢赤 十字病院で医療事務求人</p>
        <table class="c-list__new__item__table">
          <tr>
            <th>給与</th>
            <td>月給 148,000円～</td>
          </tr>
          <tr>
            <th>所在地</th>
            <td>三重県伊勢市</td>
          </tr>
          <tr>
            <th>最寄駅</th>
            <td>伊勢市駅 徒歩15分</td>
          </tr>
        </table>
      </a>
    </li>
  </ul>
</main>
<?php get_footer(); ?>