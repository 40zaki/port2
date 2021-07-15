<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- index不可 -->
    <meta name="robots" content="noindex" />

    <title>LaLaChair</title>
    <meta
      name="description"
      content="ブルー・イエロー・モノトーンのイスのショッピングサイト"
    />

    <!-- フォント -->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Hammersmith+One&display=swap"
      rel="stylesheet"
    />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Sawarabi+Gothic&display=swap"
      rel="stylesheet"
    />

    <!-- CSS -->
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/contact.css" />
    <link rel="stylesheet" href="css/html5reset-1.6.1.css" />

    <!-- アイコン -->
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet" />
    <link rel="icon" type="../image/png" href="../images/favicon.png" />

    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

  </head>

<!--  body ---------------------------------------------------------------------->
  <body>
    <div class="wrapper">
      <header class="page-header">
        <h1>
          <a href="index.html">
            <img
              class="logo"
              src="images/logo-flex.png"
              alt="LaLaChairトップページ"
          /></a>
        </h1>

<!-- メニュー ------------------------------------------------------------------->
        <div class="hamburger-menu">
          <input type="checkbox" id="menu-btn-check" />
          <label for="menu-btn-check" class="menu-btn"><span></span></label>

          <div class="menu-content">
            <ul class="main-nav">
              <li class="button">
                <a href="products.html">CHAIRS<span><img class="triangle" src="images/triangle.svg" alt="三角"></span></a>
              </li>
              <li class="button">
                <a>NEW ARRIVALS<span><img class="triangle" src="images/triangle.svg" alt="三角"></span></a>
              </li>
              <li class="button">
                <a>ABOUT<span><img class="triangle" src="images/triangle.svg" alt="三角"></span></a>
              </li>
              <li class="button">
                <a>STORE<span><img class="triangle" src="images/triangle.svg" alt="三角"></span></a>
                <li class="button">
              <a href="contact.html">FAQ<span><img class="triangle" src="images/triangle.svg" alt="三角"></span></a></li>
              <li>
                <a><i class="fas fa-shopping-cart"></i></a>
              </li>
            </ul>
          </div>
        </div>
      </header>

      <!-- メインエリア------------------------------------------------- -->
      <main>
          <div id="contact">

          <div id="form">
            <h2>お問い合わせ完了</h2>
            <p>
              送信しました。<br>
              お問い合わせありがとうございました。
            </p>
            <p id="back">
                <a href="index.html">LaLaChair TOP</a>
            </p>
          </div>
        </div>
      </main>

      <!--  フッター　------------------------------------------------------------->
      <footer>
        <div class="footer">
  
          <nav class="foot-nav">
            <ul class="foot-list">
              <li><a href="products.html">商品ページ</a></li>
              <li><a>新商品</a></li>
              <li><a>LaLaCHAIRについて</a></li>
              <li><a>店舗情報</a></li>
              <li ><a href="contact.html">よくあるご質問・お問い合わせ</a></li>
            </ul>
          </nav>
       
  
          <div class="icon">
            <div class="icon-left">
              <a href="index.html"><img class="footlogo" src="images/logo-foot.png" alt="TOPページ"></a>
              <a><img class="sns" src="images/instagram.png" alt="インスタグラム"></a>
              <a><img class="sns" src="images/facebook.png" alt="フェイスブック"></a>
              <a><img class="sns" src="images/twitter.png" alt="ツイッター"></a>
            </div>
  
            <div class="icon-right">
              <p class="copy">ブルー、イエロー、モノトーンのイス&ensp;との暮らしを提案する&ensp;&ensp;ララチェアー&ensp;<a href="index.html"><small>&copy; 2021 LaLaChair</small></a></p>
            </div>
          </div>
  
        </div>
      </footer>
  
      <div id="gotop">
        <img src="images/backTop.png" alt="TOPへ戻る">
      </div>
    </div>

    <script>
      'use strict';
    // TOPへ戻るボタン
    $(function(){
    var pagetop = $('#gotop'); //pagetopボタンのclass
    // ボタン非表示
    pagetop.hide();
    // 100px スクロールしたらボタン表示
    $(window).scroll(function () {
       if ($(this).scrollTop() > 100) {
            pagetop.fadeIn();
       } else {
            pagetop.fadeOut();
       }
    });
    pagetop.click(function () {
       $('body, html').animate({ scrollTop: 0 }, 500);
       return false;
    });
    });
      </script>
  
  </body>
</html>
