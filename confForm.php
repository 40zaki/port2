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

<!-- 
      <?php

        require_once("lib/util.php");

        // HTMLエスケープ
        $_POST = es($_POST);

        // POSTされたデータを変数に格納
        $title = $_POST["title"];
        $name = $_POST["name"];
        $phone = $_POST["phone"];
        $email = $_POST["email"];
        $text = $_POST["text"];

        // データの整形
        $name = trim($name);
        $phone = trim($phone);
        $email = trim($email);
        $text = trim($text);


        if(isset($_POST['submitted'])){
          //POSTされたデータをチェック  
          $_POST = checkInput( $_POST ); 

          //エラーメッセージを保存する配列の初期化
          $error =  array();

          if($name == ''){
            $error['name'] = "お名前は必須項目です";
          } else if(preg_match('/\A[[:^cntrl:]]{1,30}\z/u',$name) == 0){
            $error['name'] = "お名前は３０文字以内でお願いします";
          }

          if ( preg_match( '/\A[[:^cntrl:]]{0,30}\z/u', $phone ) == 0 ) {
            $error['phone'] = '*電話番号は30文字以内でお願いします。';
          }
          if ( $phone != '' && preg_match( '/\A\(?\d{2,5}\)?[-(\.\s]{0,2}\d{1,4}[-)\.\s]{0,2}\d{3,4}\z/u', $phone ) == 0 ) {
            $error['phone_format'] = '*電話番号の形式が正しくありません。';
          }

          if($email == ''){
            $error['email'] = "メールアドレスは必須項目です";
          } else{
            $pattern = '/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/uiD';
            if ( !preg_match($pattern, $email) ) {
            $error['email'] = "メールアドレスの形式が正しくありません";
            }
          }
          
          if ( $text == '' ) {
            $error['text'] = '*お問い合わせ内容は必須項目です';
            //制御文字（タブ、復帰、改行を除く）でないことと文字数をチェック
          } else if ( preg_match( '/\A[\r\n\t[:^cntrl:]]{1,1050}\z/u', $text ) == 0 ) {
            $error['text'] = '*内容は1000文字以内でお願いします';
          }

          if(empty($error) && $_SERVER['REQUEST_METHOD']==='POST'){
            // メールアドレス等を記述したファイルの読み込み
            require_once('lib/mailvars.php');

            // メール本文の組立

            $mail_body = 'HPのお問い合わせフォームからの連絡'."/n/n";
            $mail_body .=  "お名前： ".es($name)."\n";
            $mail_body .=  "Email： ".es($email)."\n";
            $mail_body .=  "お電話番号： ".es($phone)."\n\n";
            $mail_body .=  "＜お問い合わせ内容＞"."\n".es($text);
          }

            //--------sendmail------------
 
            // メールの宛先（名前<メールアドレス> の形式）。値は mailvars.php に記載
            $mailTo = mb_encode_mimeheader(MAIL_TO_NAME) ."<" . MAIL_TO. ">";
        
            //Return-Pathに指定するメールアドレス
            $returnMail = MAIL_RETURN_PATH; //
            //mbstringの日本語設定
            mb_language( 'ja' );
            mb_internal_encoding( 'UTF-8' );
        
            // 送信者情報（From ヘッダー）の設定
            $header = "From: " . mb_encode_mimeheader($name) ."<" . $email. ">\n";
            $header .= "Cc: " . mb_encode_mimeheader(MAIL_CC_NAME) ."<" . MAIL_CC.">\n";
            // $header .= "Bcc: <" . MAIL_BCC.">";
        
            //メールの送信
            //セーフモードがOnの場合は第5引数が使えない
            if ( ini_get( 'safe_mode' ) ) {
              $result = mb_send_mail( $mailTo, $subject, $mail_body, $header );
            } else {
              $result = mb_send_mail( $mailTo, $subject, $mail_body, $header, '-f' . $returnMail );
            }
            
            //メール送信の結果判定
            if ( $result ) {
              $_POST = array(); //空の配列を代入し、すべてのPOST変数を消去
              //変数の値も初期化
              $name = '';
              $email = '';
              $email_check = '';
              $phone = '';
              $title = '';
              $text = '';
              
              //再読み込みによる二重送信の防止
              $params = '?result='. $result;
              //サーバー変数 $_SERVER['HTTPS'] が取得出来ない環境用
              if(isset($_SERVER['HTTP_X_FORWARDED_PROTO']) and $_SERVER['HTTP_X_FORWARDED_PROTO'] === "https") {
                $_SERVER['HTTPS'] = 'on';
              }
              $url = (empty($_SERVER['HTTPS']) ? 'http://' : 'https://').$_SERVER['HTTP_HOST'].$_SERVER['SCRIPT_NAME']; 
              header('Location:' . $url . $params);
              exit; 
      }
    }
    ?>
-->

      <!-- メインエリア------------------------------------------------- -->
      <main>
          <div id="contact">

          <div id="form">
            <h2>お問い合わせ内容の確認</h2>
            <p>
              以下のお問合せ内容を確認し、「送信する」ボタンを押してください。
            </p>

            <!--  お問い合わせフォーム　------------------------------------------>
            <form method="post" action="resultForm.php">
              <table>
                <tr>
                  <th>
                    <h3>件名（タイトル）</h3>
                  </th>
                  <td>
                    <?php echo $title; ?>
                  </td>
                </tr>

                <tr>
                  <th>
                    お名前
                  </th>
                  <td>
                    <?php echo $name; ?>
                  </td>
                </tr>

                <tr>
                  <th>
                    電話番号
                  </th>
                  <td>
                    <?php echo $phone; ?>
                  </td>
                </tr>

                <tr>
                  <th>
                    メールアドレス
                  </th>
                  <td>
                    <?php echo $email; ?>
                  </td>
                </tr>

                <tr>
                  <th>
                    お問合わせ内容
                  </th>
                  <td>
                    <?php echo $text; ?>
                  </td>
                </tr>

                <tr>
                  <td colspan="2" id="colospan">
                    <input type="submit" value="送信する" />
                  </td>
                </tr>
              </table>
            </form>
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
