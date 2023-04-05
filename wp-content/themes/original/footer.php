<?php
$uri = get_template_directory_uri();
?>
<footer class="l-footer">
    <div class="l-footer__inner">
      <div class="l-footer__link">
        <a class="l-footer__link__top" href="">ギズジョブ医療事務トップ</a>
        <ul class="l-footer__link__list">
          <li><a class="l-footer__link__list__item" href="">利用ガイド</a></li>
          <li><a class="l-footer__link__list__item" href="">お問い合わせ</a></li>
          <li><a class="l-footer__link__list__item" href="">よくある質問</a></li>
          <li><a class="l-footer__link__list__item" href="">プライバシーポリシー</a></li>
          <li><a class="l-footer__link__list__item" href="">サイトマップ</a></li>
        </ul>
      </div>
      <div class="l-footer__img">
        <a class="l-footer__img__link" href="">
          <img src="<?= $uri;?>/img/picture/footer1.jpg" alt="">
        </a>
        <a class="l-footer__img__link" href="">
          <img src="<?= $uri;?>/img/picture/footer2.jpg" alt="">
        </a>
      </div>
    </div>
    <div class="l-footer__copy">
      <p class="l-footer__copy__text">©︎ 2022 Gizumo Inc.</p>
    </div>
  </footer>
  <?php wp_footer(); ?>