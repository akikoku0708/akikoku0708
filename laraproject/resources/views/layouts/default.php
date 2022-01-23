
<html >
  <head>
    <title>@yield('title')</title>

    <style>
    body{
  font-size:30pt;color:#000;margin:10px;
    }
    h1{
      font-size:40px;
      text-align:left;
      color:#0000FF;
      margin:0px 10px 0px 0px;
      letter-spacing:-2pt;
      font-family:arial black;
    }
    ul{
      font-size:12pt;
    }
    hr{
      margin:25px 100px;
      border-top:1px dashed #ddd;
    }
      .menutitle{
        font-size:14px;
        font-weight:bold;
        margin:0px;
      }
      .content{
        margin:10px;
      }
      .footer{
        text-align:center;
        font-size:10pt;
        margin:10px;
        border-bottom:solid 1px #ccc;
        color:#000000
      }

    </style>
  </head>
  <body>
    <table align="center"width="100%"height="1000"border="0"><tr><td style="vertical-align:top;">

    <table align="center"width="98%"height="40" border="0"><tr><td >
      <h1>@yield('title')</h1>    </td >
      <td ></td ><td style="font-size:12px;"align="right"> ログイン ｜ ログアウト
    </td></tr></table>

    @section('menubar')
    <div class="content">
      @yield('content')


    </div>


  </td></tr></table>
    <div class="footer">
      @yield('footer')
    </div>

  </body>
</html>

<?php
/*<html >
  <head>
    <title>@yield('title')</title>
    <?php

    function getUserAgent(){
    $userAgent = isset($_SERVER['HTTP_USER_AGENT'])? $_SERVER['HTTP_USER_AGENT'] : '';
    return $userAgent;
    }

    function isSmartPhone(){
    $ua = getuserAgent();

    if (stripos($ua, 'iphone') !== false || // iphone
    stripos($ua, 'ipod') !== false || // ipod
    (stripos($ua, 'android') !== false && stripos($ua, 'mobile') !== false) || // android
    (stripos($ua, 'windows') !== false && stripos($ua, 'mobile') !== false) || //
    (stripos($ua, 'firefox') !== false && stripos($ua, 'mobile') !== false) || //
    (stripos($ua, 'bb10') !== false && stripos($ua, 'mobile') !== false) || // blackberry 10
    (stripos($ua, 'blackberry') !== false) ) {
    $isSmartPhone = true;
    } else {
    $isSmartPhone = false;
    }
    return $isSmartPhone;
    }
    //-----------------------------
    if (isSmartPhone()) {
    //--iPhone---------------
    $pf30='30';$pp2='4'; $pp5='5'; $pp8='8'; $pp10='10'; $pp12='12'; $pp15='15';$pp18='18';$pp20='20';
        //======================================================================
    } else {	$isiPad = (bool) strpos($_SERVER['HTTP_USER_AGENT'],'iPad');
    if($isiPad){
  $pf30='30';  $pp2='3'; $pp5='5'; $pp8='8'; $pp10='10'; $pp12='12'; $pp15='15';$pp18='18';$pp20='20';
     //------------------------------------------------------------
    }else{
    //--PC-----------------------------------------------
    $pp2='1'; $pp5='5'; $pp8='8'; $pp10='10'; $pp12='12'; $pp15='15';$pp18='18';$pp20='20';
$pf30='20';
    //-------------------------------------------------------------
    }
    echo $pp2;
    }
    ?>

    <style>

    body{
<?php
      echo 'font-size:'.$pf30.'pt;color:#999;margin:5px;';
?>
    }

   h1{
    <?php
  echo '     font-size:50px;
      text-align:right;
      color:#f6f6f6f6;
      margin:-20px 0px -30px 0px;
      letter-spacing:-4pt;
      ';
          ?>
    }

    ul{
      font-size:12pt;
    }
    hr{
      margin:25px 100px;
      border-top:1px dashed #ddd;
    }
      .menutitle{
        font-size:14px;
        font-weight:bold;
        margin:0px;
      }
      .content{
        margin:10px;
      }
      .footer{
        text-align:right;
        font-size:10pt;
        margin:10px;
        border-bottom:solid 1px #ccc;
        color:#ccc
      }

    </style>

  </head>
  <body>
    <h1>@yield('title')</h1>
  @section('menubar')
  <h2 class="menutitle">メニュー</h2>
  <ul>
    <li>@show</li>
  </ul>
  <hr size="1">
  <div class="content">
    @yield('content')
  </div>
  <div class="footer">
    @yield('footer')
  </div>



  </body>
</html>


*/
?>
