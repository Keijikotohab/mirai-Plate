
<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>NU Maps</title>
    <!-- BootstrapのCSS読み込み -->
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <!-- フォント -->
    <link href="https://fonts.googleapis.com/css?family=Londrina+Shadow" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=M+PLUS+Rounded+1c:wght@500&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Londrina+Shadow" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=M+PLUS+Rounded+1c:wght@500&display=swap" rel="stylesheet" />
    <script src="js/jquery-1.5.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous">
    </script>
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
        alert('名古屋大学駅１番出口を出発地に設定します');
        document.getElementById('starting_point').innerText = '名古屋大学駅１番出口';
        $('#lat').val(String(35.154639));
        $('#log').val(String(136.966778));
      }
    </script>
  </head>

  <header>
      <div id="back11">
        <div onclick="clickBtn2()">
          <div id="back">
            <img src="images/back_button.png" width="40%" />
          </div>
        </div>
        <div class="navi">
          <div class="navi_inner">
            <div class="navi_item"><a href="howto.html">NU MAPSの使い方</a></div>
            <div class="navi_item"><a href="contact_ja.html">ご意見/ご要望</a></div>
            <div class="navi_item"><a href="http://www.nagoya-u.ac.jp/">名大公式ホームページ</a></div>
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
        <div id="label5" style="font-size: 23px; margin-top:2px; margin-bottom:1px;" class="search-title" >出発地</div>
      </div>
      <div class="present_selec">
        <select
          style="border-color: #bbb; margin-right: 15px; border-radius: 8px;"
          class="custom-select"
          id="start"
          name="building"
        >
          <option id='starting_point' value="名古屋大学駅">現在地</option>
        </select>
      </div>
      <div class="destination"></div>
      <div class="destination_script" style="text-align: center">
        <div id="label6" style="font-size: 23px; margin-top: -140px; margin-bottom: 5px; color: #4bacbb" class="search-title">目的地</div>
      </div>
      <div class="destination_selec">
        <select style="border-color: #bbb; border-radius: 8px;" id="building" class="custom-select">
          <option value="">建物名を選択してください</option>
          <option value="全学教育棟本館" id="build1">全学教育棟本館</option>
          <option value="愛知県名古屋市千種区宮東町 全学教育棟A館" id="build2">全学教育棟A館</option>
          <option value="名古屋大学 文系総合館"id="build3">文系総合館</option>
          <option value="名古屋大学附属図書館"id="build4">名古屋大学附属図書館</option>
          <option value="スターバックスコーヒー 名古屋大学附属図書館店"id="build5">スターバックスコーヒー</option>
          <option value="名古屋大学 生協北部食堂"id="build6">生協北部食堂</option>
          <option value="名古屋大学 生協南部書籍店"id="build7">生協南部書籍店</option>
          <option value="豊田講堂"id="build8">豊田講堂</option>
          <option value="名古屋大学 博物館"id="build9">名古屋大学 博物館</option>
          <option value="ナショナルイノベーションコンプレックス"id="build10">NIC</option>
          <option value="ファミリーマート 名古屋大学店"id="build11">ファミリーマート 名古屋大学店</option>
          <option value="名古屋大学内郵便局"id="build12">名古屋大学内郵便局</option>
          <option value="学生会館"id="build13">学生会館</option>
          <option value="ＩＢ電子情報館"id="build14">ＩＢ電子情報館</option>
          <option value="工学部1号館"id="build15">工学部1号館</option>
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
          onclick="clickBtn1()"
        >
          <div id="label10" style="font-size: 25px;" class="search-title">検索</div>
        </button>
      </div>
    </div>
    </div>

    <div id="lat" value=""></div>
    <div id="log" value=""></div>
    <div id="error" value=""></div>
  </div>
  </body>
  <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCCf-1L_AYDveGBZ_a5cU3BjQx8r68Qjpo&callback=initMap"></script>
</html>
