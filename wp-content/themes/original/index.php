<?php
$uri = get_template_directory_uri();
?>



  <?php get_header(); ?>
  
  <main class="l-main">
    <div class="l-main__sp-menu" id="menu">
      <a class="l-main__sp-menu__link" href="#top">トップ</a>
      <a class="l-main__sp-menu__link" href="#new">新着求人</a>
      <a class="l-main__sp-menu__link" href="#feature">４つの特徴</a>
      <a class="l-main__sp-menu__link" href="#flow">転職までの流れ</a>
      <a class="l-main__sp-menu__link" href="#column">転職お役立ちコンテンツ</a>
    </div>
    <div class="p-keyvisual" id="top">
      <img class="p-keyvisual__img" src="<?= $uri;?>/img/picture/keyvisual.jpg" alt="医療事務求人を探すならギズジョブ">
      <img class="p-keyvisual__sp" src="<?= $uri;?>/img/picture/keyvisual-sp.jpg" alt="医療事務求人を探すならギズジョブ">
    </div>
    
    <div class="p-search">
      <h2 class="p-search__title">お仕事検索</h2>
      <p class="p-search__text">働きたい職種・地域・希望給与を入れて検索！</p>
      <form class="p-search__form" action="">
        <div class="p-search__form__select">
          <div class="p-search__form__box">
            <select name="position" id="position" class="p-search__form__item">
              <option value="" selected>医療事務</option>
              <option value="">調剤事務</option>
              <option value="">診療情報管理士</option>
              <option value="">歯科助手</option>
              <option value="">歯科事務</option>
              <option value="">看護補助・看護助手</option>
              <option value="">病院内SE</option>
            </select>
          </div>
          <div class="p-search__form__box">
            <select name="place" id="place" class="p-search__form__item">
              <option value="" selected>東京都</option>
              <option value="">神奈川県</option>
              <option value="">千葉県</option>
              <option value="">埼玉県</option>
              <option value="">群馬県</option>
              <option value="">茨城県</option>
              <option value="">栃木県</option>
            </select>
          </div>
          <div class="p-search__form__box">
            <select name="salary" id="salary" class="p-search__form__item">
              <option value="">月給17万〜</option>
              <option value="">月給18万〜</option>
              <option value="">月給19万〜</option>
              <option value="" selected>月給20万〜</option>
              <option value="">月給21万〜</option>
              <option value="">月給22万〜</option>
              <option value="">月給23万〜</option>
            </select>
          </div>
        </div>
        <input type="text" name="keyword" id="keyword" class="p-search__form__item" placeholder="キーワード・企業名・スキルなど">
        <button type="submit" class="p-search__form__button c-button__reg u-w140"><i class="fa-solid fa-magnifying-glass"></i> 検索する</button>
      </form>
    </div>


    <div class="p-new" id="new">
      <div class="p-new__wrapper">
        <h2 class="p-new__title">新着求人</h2>
        <div class="p-new__content">
          <div class="c-list__new">
            <div class="c-list__new__item">
              <a class="c-list__new__item__link" href="">
                <img class="c-list__new__item__img" src="<?= $uri;?>/img/picture/new_1.jpg" alt="">
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
            </div>
            <div class="c-list__new__item">
              <a class="c-list__new__item__link" href="">
                <img class="c-list__new__item__img" src="<?= $uri;?>/img/picture/new_2.jpg" alt="">
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
            </div>
            <div class="c-list__new__item">
              <a class="c-list__new__item__link" href="">
                <img class="c-list__new__item__img" src="<?= $uri;?>/img/picture/new_3.jpg" alt="">
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
            </div>
            <div class="c-list__new__item">
              <a class="c-list__new__item__link" href="">
                <img class="c-list__new__item__img" src="<?= $uri;?>/img/picture/new_4.jpg" alt="">
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
            </div>
            <div class="c-list__new__item">
              <a class="c-list__new__item__link" href="">
                <img class="c-list__new__item__img" src="<?= $uri;?>/img/picture/new_1.jpg" alt="">
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
            </div>
            <div class="c-list__new__item">
              <a class="c-list__new__item__link" href="">
                <img class="c-list__new__item__img" src="<?= $uri;?>/img/picture/new_2.jpg" alt="">
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
            </div>
            <div class="c-list__new__item">
              <a class="c-list__new__item__link" href="">
                <img class="c-list__new__item__img" src="<?= $uri;?>/img/picture/new_3.jpg" alt="">
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
            </div>
            <div class="c-list__new__item">
              <a class="c-list__new__item__link" href="">
                <img class="c-list__new__item__img" src="<?= $uri;?>/img/picture/new_4.jpg" alt="">
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
            </div>

          </div>
        </div>
        <a class="p-new__link c-button__reg" href="">新着求人一覧をもっと見る</a>
      </div>
    </div>

    <div class="p-middle">
      <img class="p-middle__img" src="<?= $uri;?>/img/picture/middle.jpg" alt="">
      <div class="p-middle__content">
        <p class="p-middle__text">ギズジョブなら理想の職場がきっと見つかる<br>ギズジョブは完全無料の求職者向け求人サービスです。</p>
      </div>
    </div>

    <div class="p-feature" id="feature">
      <h2 class="p-feature__title">ギズジョブの４つの特徴</h2>
      <ul class="p-feature__list">
        <li class="p-feature__list__item">
          <p class="p-feature__list__item__title">WEB上で応募完結</p>
          <p class="p-feature__list__item__text">エントリーシートの記入を済ませれば、あとは気になる企業に応募して<br>待つだけで面接アポまで完結！</p>
        </li>
        <li class="p-feature__list__item">
          <p class="p-feature__list__item__title">安心・安全</p>
          <p class="p-feature__list__item__text">掲載案件は基本的に当社グループ企業となるため、<br>皆さまにより詳細にクリーンな職場情報をお届けいたします。</p>
        </li>
        <li class="p-feature__list__item">
          <p class="p-feature__list__item__title">わかりやすい</p>
          <p class="p-feature__list__item__text">当求人サイトは医療事務に特化しておりさらにこだわり検索や地域から検索<br>といったご自身にピッタリマッチした求人を見つけることができる！</p>
        </li>
        <li class="p-feature__list__item">
          <p class="p-feature__list__item__title">完全無料</p>
          <p class="p-feature__list__item__text">当サイトは求人元の企業やグループ会社からのスポンサー費用によって<br>運営されています。ですので求職者の方からは応募前はもちろん、<br>内定後も費用は一切いただきません。</p>
        </li>
      </ul>
    </div>

    <div class="p-flow" id="flow">
      <h2 class="p-flow__title">転職までの流れ</h2>
        <ul class="c-list__flow">
          <li class="c-list__flow__item">
            <img class="c-list__flow__item__index" src="<?= $uri;?>/img/icon/step1.png" alt="">
            <div class="c-list__flow__item__img"><img src="<?= $uri;?>/img/icon/flow1.png" alt=""></div>
            <p class="c-list__flow__item__title">エントリーシートの作成</p>
            <p class="c-list__flow__item__text">ここにはテキストが入ります。ここにはテキストが入ります。ここにはテキストが入ります。ここにはテキストが</p>
          </li>
          <li class="c-list__flow__item">
            <img class="c-list__flow__item__index" src="<?= $uri;?>/img/icon/step2.png" alt="">
            <div class="c-list__flow__item__img"><img src="<?= $uri;?>/img/icon/flow2.png" alt=""></div>
            <p class="c-list__flow__item__title">気になる企業の<br class="u-br">ピックアップ</p>
            <p class="c-list__flow__item__text">ここにはテキストが入ります。ここにはテキストが入ります。ここにはテキストが入ります。ここにはテキストが</p>
          </li>
          <li class="c-list__flow__item">
            <img class="c-list__flow__item__index" src="<?= $uri;?>/img/icon/step3.png" alt="">
            <div class="c-list__flow__item__img"><img src="<?= $uri;?>/img/icon/flow3.png" alt=""></div>
            <p class="c-list__flow__item__title">複数企業に応募</p>
            <p class="c-list__flow__item__text">ここにはテキストが入ります。ここにはテキストが入ります。ここにはテキストが入ります。ここにはテキストが</p>
          </li>
          <li class="c-list__flow__item">
            <img class="c-list__flow__item__index" src="<?= $uri;?>/img/icon/step4.png" alt="">
            <div class="c-list__flow__item__img"><img src="<?= $uri;?>/img/icon/flow4.png" alt=""></div>
            <p class="c-list__flow__item__title">内定・転職！</p>
            <p class="c-list__flow__item__text">ここにはテキストが入ります。ここにはテキストが入ります。ここにはテキストが入ります。ここにはテキストが</p>
          </li>
        </ul>
    </div>

    <div class="p-column" id="column">
      <h2 class="p-column__title">転職お役立ちコンテンツ</h2>
      <ul class="p-column__list">
        <li class="p-column__list__item">
          <a class="p-column__list__item__link" href="">
            <img class="p-column__list__item__img" src="<?= $uri;?>/img/picture/document.jpg" alt="">
            <div class="p-column__list__item__textarea">
              <p class="p-column__list__item__title">転職マニュアル</p>
              <p class="p-column__list__item__text">転職活動の基礎知識、面接対策など<br>転職のコツをお教えします</p>
            </div>
          </a>
        </li>
        <li class="p-column__list__item">
          <a class="p-column__list__item__link" href="">
            <img class="p-column__list__item__img" src="<?= $uri;?>/img/picture/laptop.jpg" alt="">
            <div class="p-column__list__item__textarea">
              <p class="p-column__list__item__title">医療事務業界の豆知識</p>
              <p class="p-column__list__item__text">スキルアップ・労働環境、給与事情など<br>知って得する業界の豆知識を公開</p>
            </div>
          </a>
        </li>
        <li class="p-column__list__item">
          <a class="p-column__list__item__link" href="">
            <img class="p-column__list__item__img" src="<?= $uri;?>/img/picture/document.jpg" alt="">
            <div class="p-column__list__item__textarea">
              <p class="p-column__list__item__title">転職マニュアル</p>
              <p class="p-column__list__item__text">転職活動の基礎知識、面接対策など<br>転職のコツをお教えします</p>
            </div>
          </a>
        </li>
      </ul>
      <a class="p-column__link c-button__reg" href="">医療事務コラムをもっと見る</a>
    </div>

    <div class="p-search">
      <h2 class="p-search__title">お仕事検索</h2>
      <p class="p-search__text">働きたい職種・地域・希望給与を入れて検索！</p>
      <form class="p-search__form" action="">
        <div class="p-search__form__select">
          <div class="p-search__form__box">
            <select name="position" id="position" class="p-search__form__item">
              <option value="" selected>医療事務</option>
              <option value="">調剤事務</option>
              <option value="">診療情報管理士</option>
              <option value="">歯科助手</option>
              <option value="">歯科事務</option>
              <option value="">看護補助・看護助手</option>
              <option value="">病院内SE</option>
            </select>
          </div>
          <div class="p-search__form__box">
            <select name="place" id="place" class="p-search__form__item">
              <option value="" selected>東京都</option>
              <option value="">神奈川県</option>
              <option value="">千葉県</option>
              <option value="">埼玉県</option>
              <option value="">群馬県</option>
              <option value="">茨城県</option>
              <option value="">栃木県</option>
            </select>
          </div>
          <div class="p-search__form__box">
            <select name="salary" id="salary" class="p-search__form__item">
              <option value="">月給17万〜</option>
              <option value="">月給18万〜</option>
              <option value="">月給19万〜</option>
              <option value="" selected>月給20万〜</option>
              <option value="">月給21万〜</option>
              <option value="">月給22万〜</option>
              <option value="">月給23万〜</option>
            </select>
          </div>
        </div>
        <input type="text" name="keyword" id="keyword" class="p-search__form__item" placeholder="キーワード・企業名・スキルなど">
        <button type="submit" class="p-search__form__button c-button__reg u-w140"><i class="fa-solid fa-magnifying-glass"></i> 検索する</button>
      </form>
    </div>
  </main>

  <?php get_footer(); ?>

  <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
  
  <script type="text/javascript">
  $(function(){
    $('.c-list__new').slick({
      slidesToShow: 4,
      slidesToScroll:4,
      responsive: [
        {
        breakpoint: 768,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
        },
        }
      ],
    });
  });
  </script>
  <style>
    .slick-slide {
      margin: 0 10px;
    }
    .slick-prev, .slick-next {
      width: 60px;
      height: 60px;
      z-index: 500;
      background-color: #fff;
      border-radius: 50px;
    }
    .slick-prev:hover, .slick-next:hover {
      background-color: #fff;
      opacity: 0.7;
    }

    .slick-prev::before, .slick-next::before {
      content: "";
      display: block;
      position: absolute;
      width: 20px;
      height: 20px;
      border-top: 1px solid #000;
      border-left: 1px solid #000;
      left: 30px;
    }
    .slick-prev::before {
      transform: translate(-25%, -50%) rotate(-45deg);
    }
    .slick-next::before {
      transform: translate(-75%, -50%) rotate(135deg);
    }
    @media screen and (max-width:1200px){
      .slick-prev, .slick-next {
      width:0.6rem;
      height: 0.6rem;
      }
      .slick-prev::before, .slick-next::before {
        width: 0.2rem;
        height: 0.2rem;
        left: 0.3rem;
      }
    }
    .slick-prev {
      left: 10px;
    }
    .slick-next {
      right: 10px;
    }
  </style>
</body>
</html>
