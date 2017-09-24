<?php
//1.  DB接続します

try {
  $pdo = new PDO('mysql:dbname=kadai_db;charset=utf8;host=localhost','root','');
} catch (PDOException $e) {
  exit('データベースに接続できませんでした。'.$e->getMessage());
}


//２．データ登録SQL作成
$stmt = $pdo->prepare("SELECT * FROM kadai_table");
// $stmt->bindValue(':id', $id, PDO::PARAM_INT);
$status = $stmt->execute();


//３．データ表示
$view="";
if($status==false) {
  //execute（SQL実行時にエラーがある場合）
  $error = $stmt->errorInfo();
  exit("ErrorQuery:".$error[2]);

} else {
  //Selectデータの数だけ自動でループしてくれる
  while( $result = $stmt->fetch(PDO::FETCH_ASSOC)){

      $view .= '<tr class="products-item">';
      $view .= '<td class="pruducts-thumb">'.$result["naiyou"].'</td>';
      $view .= '<td class="products-title">'.$result["indate"].'</td>';
      $view .= '</tr>';

  }
}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="utf-8">
	<meta name="keywords" content=",,,">
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>プログラミングができる学習宿泊ホテル</title>
	<link href="css/reset.css" rel="stylesheet" type="text/css">
	<link href="css/style.css" rel="stylesheet" type="text/css">
</head>
<body>
	<div id="wrapper">
<!--ここからヘッダー-->
<header id="header">

  <div class="header1">
   <div class="img">
   <img src="img/header/logo.jpg" width="195px">
   <p class="headertext">プログラミングができる学習宿泊ホテル</p>
   </div>

   <div class="reservationlink">
       <a class="reservationbutton" href="#">宿泊予約</a>
       <p>TEL : 03-5413-5045</p>
   </div>
  </div>

   <ul class="menu">
       <li><a href="">HOME</a></li>
       <li><a href="#reservationdate">ご宿泊</a></li>
       <li><a href="#recommendplan">おすすめプラン</a></li>
       <li><a href="">施設紹介</a></li>
       <li><a href="">周辺施設＆観光</a></li>
       <li><a href="">コンセプト</a></li>
       <li><a href="">採用情報</a></li>
       <li><a href="">お問い合わせ</a></li>
   </ul>

    
</header>

<!--ここからメインビジュアル-->
<div class="mainvisual">
    <img src="img/mainvisual/main_01.png" alt="" width="100%">
</div>
<!--ここから滞在日程予約-->
<header id="reservationdate">
<div class="rdtext">
    <p class="reservedate">ご滞在希望日程</p>
</div>
<div class="reservationdetail">
<form class="kanji-name">
        <label for="kanji-name">お名前</label>
        <input type="text" id="kanji-name" style="width:100px; height: 15px" />
</form>
 <form class="mail">
        <label for="mail">メールアドレス</label>
        <input type="email" id="mail" style="width:100px; height: 15px"/>
</form>
<form style="display:inline">男性人数
    <select name="man">
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    </select>
</form>
<form style="display:inline">女性人数
    <select name="woman">
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
</select>
</form>
<a class="contact" href="#">問い合わせ</a>
</div>
</header>
<!--ここからメインビジュアル2-->
<div class="mainvisual2">
    <div class="text">
         <h1 class=slogan1>ようこそプログラミング学習ができる<br>
         ホテルomotesandoへ。</h1>
         <p class=description>せまい、だけど清潔、快適、ネットも使える。<br>ホテル運営上のあらゆるムダを省き、業界初、なんとプログラミング未経験者でも大歓迎！<br>海外からのバックパッカーや宿泊コストなどを極力切り詰めたいという皆様を応援します</p>
        </div>
</div>

<!--ここからメインビジュアル3-->
<div class="mainvisual3">
    <div class="text">
         <h1 class=slogan>Lounge</h1>
         <p class=description>静かに学びたい方は特別なスペースを。<br>訪れてくださったお客様に思いっきり楽しんでいただきたい。そんな思いから当ホテル内に<br>Loungeを開設いたしました。</p>
        </div>
        <div class="detail1">
        <a class="detailbutton" href="#">＞詳しく見る</a>
        </div>
</div>

<!--ここからメインビジュアル4-->
<div class="mainvisual4">
    <div class="text">
         <h1 class=slogan>周辺施設</h1>
         <p class=description>行きたいところへ、思い立てばすぐ。<br>当ホテルから表参道周辺、青山、外苑一丁目など様々な場所に簡単にアクセスができます。<br>当ホテル周辺の観光箇所や穴場スポットなどご紹介。</p>
        </div>
        <div class="detail2">
        <a class="detailbutton" href="#">＞詳しく見る</a>
        </div>
</div>

<!--ここからおすすめプラン-->
<header id="recommendplan">
<div class="recommendplan">
    <h4 class="recplan">おすすめプラン</h4>
    <center>
    <img src="img/top/plan_title_bg.png" height="14px" alt="">
    </center>
    <ul class="reclist">
                  <li class="rec-item">
                    <div class="rec-thumb">
                     <h2>カプセルルーム</h2>
                     <p class="woman">女性専用</p>
                     <img src="img/top/plan_img_01.png" width="300" height="234" alt>
                    </div>
                  </li>
                  
                  <li class="rec-item">
                    <div class="rec-thumb">
                     <h2>カプセルルーム</h2>
                     <p class="man">男性専用</p>
                     <img src="img/top/plan_img_02.png" width="300" height="234" alt>
                    </div>
                  </li>
                  
                  <li class="rec-item">
                    <div class="rec-thumb">
                     <h2>スーペリア　カプセルルーム</h2>
                     <p class="man">男性専用</p>
                     <img src="img/top/plan_img_03.png" width="300" height="234" alt>
                    </div>
                  </li>
              </ul>
</div>
</header>
<!--ここからWhat's new-->
<div class="new">
    <p class="n-title">What's new・プログラミングができる学習宿泊ホテル<p>
      <table style="width:960px; margin-left:auto; margin-right:auto; line-height: 200%;">
       <?php
        $pdo = new PDO('mysql:dbname=kadai_db;charset=utf8;host=localhost','root','');
        $st = $pdo ->query("SELECT * FROM kadai_table");
        while ($row = $st->fetch()) {
          $name = htmlspecialchars($row['naiyou']);
          $sch = htmlspecialchars($row['indate']);
          echo "<tr><td align='center'>$name</td><td>$sch</td></tr>";
        }
      ?>
      </table>
</div>

<!--ここからSNSパート-->
<div class="sns">
   <ul class="youtube">
   <li class="video">
    <iframe src="https://www.youtube.com/embed/H1ppp-7X3Ns?ecver=2" width="465" height="285" frameborder="0"></iframe>
   </li>
   <li class="video">
    <iframe src="https://www.youtube.com/embed/H1ppp-7X3Ns?ecver=2" width="465" height="285" frameborder="0"></iframe>
   </li>
   </ul>
   <ul class="sns2">
       <li class="amenity">
           <p>アメニティ</p>
       </li>
       
       <li class="bargain">
           <p>お得情報</p>
       </li>
       
       <li class="concept">
           <p>コンセプト</p>
       </li>
       
       <li class="recruitment">
           <p>採用情報</p>
       </li>
   </ul>
   <ul class="sns3">
       <li class="fb">
           <a href="https://www.facebook.com/gsacademy.tokyo/" target="_blank"><img src="img/footer/fb.png" width="60" height="60" alt></a>
       </li>
       <li class="tw">
           <a href="https://twitter.com/gsacademy_tokyo" target="_blank"><img src="img/footer/tw.png" width="60" height="60" alt></a>
       </li>
       <li class="insta">
           <a href="https://www.instagram.com/explore/locations/1018710796/gs-academy-tokyo/" target="_blank"><img src="img/footer/insta.png" width="60" height="60" alt></a>
       </li>
   </ul>
<!--ここからページトップボタン-->
   <p id="pageTop"><a href="#"><img src="img/footer/back_top.png" width="50" height="50" alt=""></a></p>
</div>
<!--ここからフッター-->
<footer id=footer>
       <div class="foot">
        <div class="footerimg">
           <img src="img/header/logo.jpg" width="175px">
        </div>
        <div class="footertext">
         <p class>株式会社デジタルっぽい株式会社：東京都港区北青山3-5-6 青朋ビル2F<br>Copyright (C) 2017プログラミングができる学習宿泊ホテル. All Rights Reserved.</p>
        </div>
       </div>
</footer>
	</div>
	<!-- end# wrapper -->

	<!-- jquery script -->
	<script src="js/jquery-2.1.4.min.js"></script>
	<script src="js/common.js"></script>
</body>
</html>
