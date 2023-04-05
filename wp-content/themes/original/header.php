<?php
$uri = get_template_directory_uri();
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta description="ギズジョブは完全無料の求職者向け求人サービスです">
  <meta keyword="ギズジョブ, ギズジョブ医療事務, 医療事務求人, 医療事務">
  <title>医療事務求人を探すならギズジョブ</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.css"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.css">
  <link rel="stylesheet" href="<?=$uri;?>/style.css">
  <link rel="stylesheet" href="<?=$uri;?>/recruit.css">
  <?php wp_head();?>
</head>


<body>
  <header class="l-header">
    <nav class="l-header__nav-menu">
      <ul class="l-header__nav-menu-link__list">
        <li class="l-header__nav-menu-link__list__item"><a href="">ギズジョブ医療事務とは</a></li>
        <li class="l-header__nav-menu-link__list__item"><a href=""><i class="fa-solid fa-magnifying-glass"></i>こだわり検索</a></li>
        <li class="l-header__nav-menu-link__list__item"><a href=""><img class="u-nav-icon" src="<?=$uri;?>/img/icon/book-open.png" alt=""> ギズジョブ医療事務コラム</a></li>
      </ul>
      <ul class="l-header__nav-menu-button__list">
        <li class="l-header__nav-menu-button__list__item"><a class="c-button__nav" href=""><i class="fa-solid fa-heart is-pink"></i> 気になるリスト</a></li>
        <li class="l-header__nav-menu-button__list__item"><a class="c-button__nav" href=""><i class="fa-regular fa-clock"></i> 閲覧履歴</a></li>
        <li class="l-header__nav-menu-button__list__item"><a class="c-button__nav" href=""><img class="u-nav-icon" src="<?=$uri;?>/img/icon/search-history.png" alt=""> 検索履歴</a></li>
      </ul>
      <div class="l-header__nav-menu__burger" id="ham">
        <span class="l-header__nav-menu__burger__bar"></span>
        <span class="l-header__nav-menu__burger__bar"></span>
        <span class="l-header__nav-menu__burger__bar"></span>
      </div>
    </nav>
  </header>