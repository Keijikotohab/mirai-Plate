<!DOCTYPE html>
<html lang="ja">
<html lang="ja">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>NU MAPS</title>
    <!-- BootstrapのCSS読み込み -->
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <!-- フォント -->
    <link href="https://fonts.googleapis.com/css?family=Londrina+Shadow" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=M+PLUS+Rounded+1c:wght@500&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Londrina+Shadow" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=M+PLUS+Rounded+1c:wght@500&display=swap" rel="stylesheet" />
    <script src="js/jquery-1.5.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
    <!-- BootstrapのJS読み込み -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/script.js"></script>
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <!-- default（Safariと同じ） / black（黒） / black-translucent（ステータスバーをコンテンツに含める） -->
    <meta name="apple-mobile-web-app-status-bar-style" content="black" />
    <!-- ホーム画面に表示されるアプリ名 -->
    <meta name="apple-mobile-web-app-title" content="NU-Maps" />
    <!-- ホーム画面に表示されるアプリアイコン -->
    <link rel="apple-touch-icon" href="images/img.png" />
    <link rel="stylesheet" type="text/css" href="style.css" />
    <link rel="manifest" href="manifest.json" />
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-VP9W3MY5PK"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'G-VP9W3MY5PK');
    </script>
    <script>
      //位置情報取得
      navigator.geolocation.getCurrentPosition(successCallback, errorCallback);
      function successCallback(position) {
        $('#lat').val(String(position.coords.latitude));
        $('#log').val(String(position.coords.longitude));
      }
      function errorCallback(error) {
        alert('Nagoya Univ. Sta. Exit 1 is set as the Starting Point.');
        document.getElementById('starting_point').innerText = 'Nagoya Univ. Sta. Exit 1';
        $('#lat').val(String(35.154639));
        $('#log').val(String(136.966778));
      }
    </script>
  </head>
<!--
  <header>
    <div id="back11">
      <div onclick="clickBtn2()">
        <div id="back">
          <img src="images/icon/back-white.png" width="80%" />
        </div>
      </div>
      <div class="navi">
        <div class="navi_inner">
          <div class="navi_item"><a href="https://note.com/preview/n881c652750db?prev_access_key=2ab72860573152d63224650e95683a41">About NU Maps</a></div>
          <div class="navi_item"><a href="index1.html">Contact</a></div>
          <div class="navi_item"><a href="index.html">Log in with NU ID</a></div>
          <div class="navi_item"><a href="http://www.nagoya-u.ac.jp/">Nagoya University Official Website</a></div>
        </div>
      </div>
      <a href="index.html" id="title">
        <img class="logo" src="images/logo-text.png" width="125px;" height="30px;" />
      </a>
    　<div class="el_humburger">
        <div class="el_humburger_wrapper">
          <span class="el_humburger_bar top"></span>
          <span class="el_humburger_bar middle"></span>
          <span class="el_humburger_bar bottom"></span>
        </div>
      </div>
    </div>
  </header>
-->
<header>
    <div id="back11">
      <div onclick="clickBtn3()">
        <div id="back">
          <img src="images/back_button.png" width="40%" />
        </div>
      </div>
      <div class="navi">
        <div class="navi_inner">
          <div class="navi_item"><a href="howto_en.html">Instruction of NU MAPS</a></div>
          <div class="navi_item"><a href="contact_en.html">Inquiry/Requests</a></div>
          <div class="navi_item"><a href="http://www.nagoya-u.ac.jp/">Nagoya Univ. Official Website</a></div>
        </div>
      </div>
      <a href="index.html" id="title">
        <img class="logo" src="images/logo_mark_with_smalltype.png"width="35px;" height="45px;" />
      </a>
      <div  class="el_humburger">
      <div class="el_humburger_wrapper">
        <span class="el_humburger_bar top"></span>
        <span class="el_humburger_bar middle"></span>
        <span class="el_humburger_bar bottom"></span>
      </div>
      </div>
    </div>
</header>

  <body>
  <div id="floating-panel">
      <div style="height: 65px;"></div>
      <div class="present"></div>
      <div class="present_script" style="text-align: center">
        <div id="label5" style="font-size: 23px; margin-top:2px; margin-bottom:1px;" class="search-title" >Starting Point</div>
      </div>
      <div class="present_selec">
        <select
          style="border-color: #bbb; margin-right: 15px; border-radius: 8px;"
          class="custom-select"
          id="start"
          name="building"
        >
          <option id="starting_point"value="名古屋大学駅">Present Location</option>
        </select>
      </div>
      <div class="destination"></div>
      <div class="destination_script" style="text-align: center">
        <div id="label6" style="font-size: 23px; margin-top: -140px; margin-bottom: 5px; color: #4bacbb" class="search-title">Destination</div>
      </div>
      <div class="destination_selec">
        <select style="border-color: #bbb; border-radius: 8px;" id="building" class="custom-select">
          <option value="-">Select Building</option>
          <option value="全学教育棟本館英語版"id="build1">Liberal Arts and Sciences Main Building</option>
          <option value="愛知県名古屋市千種区宮東町 全学教育棟A館英語版"id="build2">Liberal Arts and Sciences Building A</option>
          <option value="名古屋大学 文系総合館英語版"id="build3">Administrative Office</option>
          <option value="名古屋大学附属図書館英語版"id="build4">NU Library</option>
          <option value="スターバックスコーヒー 名古屋大学附属図書館店英語版"id="build5">Starbucks Coffee</option>
          <option value="名古屋大学 生協北部食堂英語版"id="build6">NU CO-OP North - Cafeterias and Shops</option>
          <option value="名古屋大学 生協南部書籍店英語版"id="build7">NU CO-OP South - Cafeterias and Shops</option>
          <option value="豊田講堂英語版"id="build8">Toyoda Auditorium</option>
          <option value="名古屋大学 博物館英語版"id="build9">NU Museum</option>
          <option value="ナショナルイノベーションコンプレックス英語版"id="build10">NIC</option>
          <option value="ファミリーマート 名古屋大学店英語版"id="build11">Family Mart</option>
          <option value="名古屋大学内郵便局英語版"id="build12">Post office</option>
          <option value="学生会館英語版"id="build13">Student Hall</option>
          <option value="ＩＢ電子情報館英語版"id="build14">IB Building</option>
          <option value="工学部1号館英語版"id="build15">Building 1</option>
        </select>
      </div>
      <div class="room_selec">
        <select style="border-color: #bbb; border-radius: 8px;" class="custom-select" id="room" name="room">
          <option value="">ー</option>
        </select>
      </div>
      <div class="search">
        <button
          id="btn"
          style="background-color: #288FA3; width: 250px; margin-top: 60px; border-radius: 11px; border-width: 2px;"
          type="button"
          class="btn btn-outline-light"
          onclick="clickBtn1_en()"
        >
          <div id="label10" style="font-size: 25px; color: #fff" class="search-title">Search</div>
        </button>
      </div>
    </div>
      <div id="lat" value=""></div>
      <div id="log" value=""></div>
      <div id="error" value=""></div>
</body>

<script language="javascript" type="text/javascript">
  var element1 = document.getElementById( "build1" ) ;
  var element2 = document.getElementById( "build2" ) ;
  var element3 = document.getElementById( "build3" ) ;
  var element4 = document.getElementById( "build4" ) ;
  var element5 = document.getElementById( "build5" ) ;
  var element6 = document.getElementById( "build6" ) ;
  var element7 = document.getElementById( "build7" ) ;
  var element8 = document.getElementById( "build8" ) ;
  var element9 = document.getElementById( "build9" ) ;
  var element10 = document.getElementById( "build10" ) ;
  var element11 = document.getElementById( "build11" ) ;
  var element12 = document.getElementById( "build12" ) ;
  var element13 = document.getElementById( "build13" ) ;
  var element14 = document.getElementById( "build14" ) ;
  var element15 = document.getElementById( "build15" ) ;

  var request = new XMLHttpRequest();
  request.open('GET', 'https://numaps.adm.nagoya-u.ac.jp/db_fetch_re_s.php?b_id=0', true);
  request.responseType = 'json';
  request.addEventListener('load', function (response) {
    var data1 = <?="this.response"?>;
    if(data1==1){
      element1.remove() ;
    }
  });
  request.send();

  var request = new XMLHttpRequest();
  request.open('GET', 'https://numaps.adm.nagoya-u.ac.jp/db_fetch_re_s.php?b_id=1', true);
  request.responseType = 'json';
  request.addEventListener('load', function (response) {
    var data2 = <?="this.response"?>;
    if(data2==1){
      element2.remove() ;
    }
  });
  request.send();

  var request = new XMLHttpRequest();
  request.open('GET', 'https://numaps.adm.nagoya-u.ac.jp/db_fetch_re_s.php?b_id=2', true);
  request.responseType = 'json';
  request.addEventListener('load', function (response) {
    var data3 = <?="this.response"?>;
    if(data3==1){
      element3.remove() ;
    }
  });
  request.send();

  var request = new XMLHttpRequest();
  request.open('GET', 'https://numaps.adm.nagoya-u.ac.jp/db_fetch_re_s.php?b_id=3', true);
  request.responseType = 'json';
  request.addEventListener('load', function (response) {
    var data4 = <?="this.response"?>;
    if(data4==1){
      element4.remove() ;
    }
  });
  request.send();

  var request = new XMLHttpRequest();
  request.open('GET', 'https://numaps.adm.nagoya-u.ac.jp/db_fetch_re_s.php?b_id=4', true);
  request.responseType = 'json';
  request.addEventListener('load', function (response) {
    var data5 = <?="this.response"?>;
    if(data5==1){
      element5.remove() ;
    }
  });
  request.send();

  var request = new XMLHttpRequest();
  request.open('GET', 'https://numaps.adm.nagoya-u.ac.jp/db_fetch_re_s.php?b_id=5', true);
  request.responseType = 'json';
  request.addEventListener('load', function (response) {
    var data6 = <?="this.response"?>;
    if(data6==1){
      element6.remove() ;
    }
  });
  request.send();

  var request = new XMLHttpRequest();
  request.open('GET', 'https://numaps.adm.nagoya-u.ac.jp/db_fetch_re_s.php?b_id=6', true);
  request.responseType = 'json';
  request.addEventListener('load', function (response) {
    var data7 = <?="this.response"?>;
    if(data7==1){
      element7.remove() ;
    }
  });
  request.send();

  var request = new XMLHttpRequest();
  request.open('GET', 'https://numaps.adm.nagoya-u.ac.jp/db_fetch_re_s.php?b_id=7', true);
  request.responseType = 'json';
  request.addEventListener('load', function (response) {
    var data8 = <?="this.response"?>;
    if(data8==1){
      element8.remove() ;
    }
  });
  request.send();

  var request = new XMLHttpRequest();
  request.open('GET', 'https://numaps.adm.nagoya-u.ac.jp/db_fetch_re_s.php?b_id=9', true);
  request.responseType = 'json';
  request.addEventListener('load', function (response) {
    var data10 = <?="this.response"?>;
    if(data10==1){
      element10.remove() ;
    }
  });
  request.send();

  var request = new XMLHttpRequest();
  request.open('GET', 'https://numaps.adm.nagoya-u.ac.jp/db_fetch_re_s.php?b_id=10', true);
  request.responseType = 'json';
  request.addEventListener('load', function (response) {
    var data11 = <?="this.response"?>;
    if(data11==1){
      element11.remove() ;
    }
  });
  request.send();

  var request = new XMLHttpRequest();
  request.open('GET', 'https://numaps.adm.nagoya-u.ac.jp/db_fetch_re_s.php?b_id=11', true);
  request.responseType = 'json';
  request.addEventListener('load', function (response) {
    var data12 = <?="this.response"?>;
    if(data12==1){
      element12.remove() ;
    }
  });
  request.send();

  var request = new XMLHttpRequest();
  request.open('GET', 'https://numaps.adm.nagoya-u.ac.jp/db_fetch_re_s.php?b_id=12', true);
  request.responseType = 'json';
  request.addEventListener('load', function (response) {
    var data13 = <?="this.response"?>;
    if(data13==1){
      element13.remove() ;
    }
  });
  request.send();

  var request = new XMLHttpRequest();
  request.open('GET', 'https://numaps.adm.nagoya-u.ac.jp/db_fetch_re_s.php?b_id=13', true);
  request.responseType = 'json';
  request.addEventListener('load', function (response) {
    var data14 = <?="this.response"?>;
    if(data14==1){
      element14.remove() ;
    }
  });
  request.send();

  var request = new XMLHttpRequest();
  request.open('GET', 'https://numaps.adm.nagoya-u.ac.jp/db_fetch_re_s.php?b_id=14', true);
  request.responseType = 'json';
  request.addEventListener('load', function (response) {
    var data15 = <?="this.response"?>;
    if(data15==1){
      element15.remove() ;
    }
  });
  request.send();
  </script>

    <script>
      function testSelect() {
        if (document.getElementById('labelCode_2').value == '999') {
          document.getElementById('labelCode_2').value = '000';
          document.getElementById('label1').innerText = 'お知らせ';
          document.getElementById('label2').innerText = 'NU-Mapsの使い方';
          document.getElementById('label3').innerText = '言語/Language';
          document.getElementById('label4').innerText = 'ログイン';
          document.getElementById('label5').innerText = '現在地';
          document.getElementById('label6').innerText = '目的地';
          document.getElementById('building').value = '';
          document.getElementById('room').value = '';
          document.getElementById('start').value = '名古屋大学駅';
          document.getElementById('label10').innerText = '検索';
        } else {
          document.getElementById('labelCode_2').value = '999';
          document.getElementById('label1').innerText = 'News';
          document.getElementById('label2').innerText = 'How to use NU-Maps';
          document.getElementById('label3').innerText = '言語/Language';
          document.getElementById('label4').innerText = 'Login';
          document.getElementById('label5').innerText = 'Present location';
          document.getElementById('label6').innerText = 'Destination';
          document.getElementById('building').value = '-';
          document.getElementById('room').value = '-';
          document.getElementById('start').value = '名古屋大学駅/';
          document.getElementById('label10').innerText = 'Search';
        }

        return true;
      }

      function alert1() {
        alert('お問い合わせ機能実装予定');
      }
    </script>

    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCCf-1L_AYDveGBZ_a5cU3BjQx8r68Qjpo&callback=initMap"></script>
    <script>
      <!-- service workerの登録関係
      -->
      if
      ('serviceWorker'
      in
      navigator)
      {
      navigator.serviceWorker.register('service_worker.js').then(function (registration)
      {
      console.log('ServiceWorker
      registration
      successful
      with
      scope:
      ',
      registration.scope);
      }).catch(function (err)
      {
      console.log('ServiceWorker
      registration
      failed:
      ',
      err);
      });
      }
    </script>
</html>
