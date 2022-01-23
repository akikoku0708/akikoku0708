
<html >
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
echo 'font-size:'.$pf30.'pt;color:#000;margin:10px;';
       ?>

    }
    h1{
      <?php
  echo 'font-size:'.$pf30.'px;
      text-align:left;
      color:#0000FF;
      margin:0px 10px 0px 0px;
      letter-spacing:-2pt;
      font-family:arial black;';
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
        <?php
      echo 'font-size:'.$pf30.'px;
        font-weight:bold;
        margin:0px;';
         ?>
      }
      .content{
        margin:10px;

         ?>
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
    <h2 class="menutitle">メニュー</h2>
    <ul class="menutitle">
      <li>@show</li>
    </ul>
    <hr size="1">
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
/*



<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ asset('/css/inquiry.css') }}" rel="stylesheet">
    <title>Simple Form - @yield('title')</title>
    @section('script')
    @show
  </head>
  <body>
    <div class="container">
      @yield('content')
    </div>
  </body>
</html>

*/
 ?>
