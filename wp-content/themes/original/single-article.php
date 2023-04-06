<?php
  $uri = get_template_directory_uri();
  $upload_dir = wp_upload_dir()['baseurl'];

  $salary = get_post_meta( get_the_ID(), 'article_salary', true );
  $address = get_post_meta( get_the_ID(), 'article_address', true );
  $station = get_post_meta( get_the_ID(), 'article_station', true );
  $thumbnail_id = get_post_meta( get_the_ID(), 'article_thumbnail', true );
  $thumbnail = get_post_meta( $thumbnail_id,  '_wp_attached_file', true);
?>


<?php get_header(); ?>
 
  <?php while ( have_posts() ) : the_post(); ?>
 
  <article>
    <main class="l-recruit">
      <h1 class="l-recruit__title">求人詳細</h1>
      <div class="l-recruit__list">
        <div class="c-list__new__item__link">
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
        </d>
      </div>

    </main>
    </article>
  <?php endwhile; ?>
 
  <?php get_footer(); ?>
