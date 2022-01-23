<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link href="{{ asset('xxx/css/inquiry.css') }}" rel="stylesheet"> -->
    <script src="{{ asset('/js/jquery-1.11.2.js') }}"></script>
    <title>Simple Form - @yield('title')</title>
    @section('script')
    @show
  </head>

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
  $ppp100='100';$ps15='15';$ps25='25';
  $ps10='10';$ps20='20';$ps30='30';$ps40='40';$ps50='50';$ps60='60';
  $ps70='70';$ps80='80';$ps90='90';$ps100='100';$ps110='110';$ps120='120';
  $ps300='300';$ps350='350';$ps400='400';$ps450='450';$ps1500='1500';

  $pf10='15';$pf11='16';  $pf12='18';$pf13='20';  $pf16='24';$pf20='30';
  $pf24='36';$pf30='45';  $pf36='54';$pf40='60';  $pf50='75';

  //======================================================================
  } else {	$isiPad = (bool) strpos($_SERVER['HTTP_USER_AGENT'],'iPad');
  if($isiPad){
    //-----------------ipad---------------------------------------
    $ppp100='100';$ps15='15';$ps25='25';
    $ps10='10';$ps20='20';$ps30='30';$ps40='40';$ps50='50';$ps60='60';
    $ps70='70';$ps80='80';$ps90='90';$ps100='100';$ps110='110';$ps120='120';
    $ps300='300';$ps350='350';$ps400='400';$ps450='450';$ps1500='1500';

    $pf10='20';$pf11='22';  $pf12='24';$pf13='26';  $pf16='32';$pf20='40';
    $pf24='48';$pf30='60';  $pf36='72';$pf40='80';  $pf50='100';
    //------------------------------------------------------------
  }else{
  //--PC-----------------------------------------------
  $ppp100='40';
  $ps15='15';$ps25='25';
  $ps10='10';$ps20='20';$ps30='30';$ps40='40';$ps50='50';$ps60='60';
  $ps70='70';$ps80='80';$ps90='90';$ps100='100';$ps110='110';$ps120='120';
  $ps300='300';$ps350='350';$ps400='400';$ps450='450';$ps1500='1500';

  $pf10='10';$pf11='11';  $pf12='12';$pf13='13';  $pf16='16';$pf20='20';
  $pf24='24';$pf30='30';  $pf36='36';$pf40='40';  $pf50='50';
  //-------------------------------------------------------------
  }  }
  ?>

  <style>
.td_add04{ <?php echo 'font-size:'.$pf24.'px;color:#00f; font-family:Arial Black;'; ?>    }
.a_add03{  text-decoration:none;   }
.tb_creat01{  <?php echo 'width:100%;height:'.$ps350.'px; '; ?> }
.tb_creat02{<?php echo 'width:'.$ppp100.'%;height:'.$ps350.'px;border-radius:5px;border:1px solid #87cefa;background-color:#483d86;'; ?>}
.tb_creat03{<?php echo 'width:100%;height:'.$ps300.'px;'; ?>}
.tb_creat04{ <?php echo 'width:100%;height:'.$ps70.'px;'; ?> }
.td_creat05{<?php echo 'font-size:'.$pf20.'px;color:#fff;'; ?>}
.td_creat05a{<?php echo 'width:'.$ps40.'px;'; ?>} .td_creat05b{<?php echo 'width:'.$ps30.'px;'; ?>}
.div_creat06{ <?php echo 'font-size:'.$pf10.'px;color:#ffd700;'; ?> }
.bt_creat07{ <?php echo 'font-size:'.$pf16.'px; border-radius:5px; color:#fff;border:none;width:'.$ps120.'px;height:'.$ps40.'px;background-color:#261964;'; ?>    }
.a_creat08{ <?php echo 'font-size:'.$pf13.'px; text-decoration:none;color:#fff; '; ?> }
.in_creat09{<?php echo 'border-radius:5px;color:#333;border:none;background-color:#fff; height:'.$ps40.'px;width:99%;'; ?>}
.in_creat209{ <?php echo 'border-radius:5px;color:#fff;border:none;background-color:#483d86; height:'.$ps40.'px;width:99%;'; ?>  }
.hei{ <?php echo 'height:40px;'; ?>}

.login5{ <?php echo 'border-radius:5px;color:#333;height:'.$ps30.'px;width:99%;border-color:#483d86;font-size:'.$pf13.'px;border:none;background-color:#fff; '; ?>	}
.login5:focus {  		outline: solid 1px #fff;	}
.span1{ <?php echo 'position: relative; top:-7px;'; ?>	}
input::placeholder {  color: #CCC;}
input[type=checkbox].che1 {  <?php echo 'width: '.$ps20.'px;    height: '.$ps20.'px; '; ?>	}
input[type=checkbox].che2{-webkit-appearance: none; position: relative;display: inline-block;
background-image:url({{ asset('images/eye1.png')}});
background-size: contain; position: relative;
<?php echo 'width: '.$ps25.'px;height:'.$ps15.'px;top:3px; left:-'.$ps40.'px;'; ?>
}
input[type=checkbox].che3{-webkit-appearance: none;position: relative;display: inline-block;
background-image:url({{ asset('images/eye1.png')}});
background-size: contain; position: relative;
<?php echo 'width: '.$ps25.'px; height:'.$ps15.'px; top:3px;left:-'.$ps40.'px;'; ?>
}
 .td_creat05c{<?php echo 'color:#ccc;font-size:'.$pf11.'px; '; ?>}
.hr2 { <?php echo 'width:'.$ppp100.'%;height: 10px; border: 0;  box-shadow: 0 10px 10px -10px #bbb inset;'; ?>}

  </style>
  <body>

    @section('title', 'meisis')
    <table width="<?php echo $ppp100.'%'; ?>"height="40"align="center"border="0"><tr>
    <td align="left"class="td_add04"><a href="{{ url('manager/home') }}"style="text-decoration:none;">  @yield('title') </a>  </td >
    <td ></td ><td style="font-size:12px;"align="right" >
    <!-- <a href="{{ url('members/logink') }}" class="a_add03">ログイン</a> -->
    <!-- ｜ <a href="{{ url('') }}" class="a_add03">ログアウト</a> -->
  </td></tr></table>


    <div class="container">
      @yield('content')
    </div>
  </body>
</html>
