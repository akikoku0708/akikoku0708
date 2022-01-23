<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link href="{{ asset('xxx/css/inquiry.css') }}" rel="stylesheet"> -->
    <title>Simple </title>

  </head>
  <?php
  $arrmenu=array(
  array(  '管理','manastore/manapromain'),       array(  '店舗情報','manastore/manaprofile'),
  array(  '商品登録','client/clientproduct'),     array(  '受注関連','manastore/manasales'),
  array(  '出荷関連','manastore/manadelivery'),  array(  '入金支払','manastore/manapayment'),
  array(  '顧客情報','manastore/manacustom'),    array(  'お問合せ','manastore/manainquiry'),
  array(  '出店ホーム','manastore/storeprofile')    );


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
.selectcss1{height:24px;font-size:11px;}
.wt20{width:20px;} .wt50{width:50px;}.wt80{width:80px;} .wt160{width:160px;} .wt180{width:180px;}
.wt240{width:240px;}.wt300{width:300px;} .wt600{width:600px;}
.he18{height:18px;}
.he20{height:20px;} .he22{height:22px;} .he24{height:24px;} .he30{height:30px;}
.he40{height:40px;} .he60{height:60px;} .he80{height:80px;} .he100{height:100px;}
.he150{height:150px;} .he200{height:200px;} .he400{height:400px;}  .he420{height:420px;} .he600{height:600px;}
.he1500{height:1500px;}.he3000{height:3000px;}
.ft11{font-size:11px;} .ft12{font-size:12px;} .ft13{font-size:13px;}   .ft16{font-size:16px;}  .ft20{font-size:20px;} .ft24{font-size:24px;}
.btncss26{ font-size:20px;width:160px;height:50px;color:#ffffff;border-radius:3px;background-color:#483d86;margin-right:4px;border:none;      }
.btncss26:hover {  color:#ffffff;  background-color: #ff4500;    }
.btncss25{width:80px;height:24px;font-size:11px; color:#ffffff;border-radius:3px;background-color:#483d86;margin-right:4px;border:none;      }
.btncss25:hover {    background-color: #f5deb3;  color:#483d86;  }
.btncss24{width:80px;height:30px;font-size:11px;color:#fff;  border-radius:3px;background-color:#008000;margin-right:4px;border:none;      }
.btncss24:hover {    background-color: #66ff99; color:#333;  }
.btncss22{padding:2px 10px 2px 10px;font-size:11px;text-decoration:none; color:#ffffff;border-radius:3px;background-color:#483d86;margin-right:4px;border:none;      }
.btncss22:hover {    background-color: #006400;  color:#ffffff;  }
.imgcss19{width:50px;  height:50px;border-radius: 3px;  margin-left:5px;  }
.imgcss20{width:40px;  height:40px;border-radius: 3px;    }
.imgcss21{width:60%;  border-radius:5px; vertical-align:top;        }
.imgcss22{width:90%;  border-radius:5px; vertical-align:top;        }
.imgcss23{width:360px; height:360px; border-radius:5px; vertical-align:top;        }
.imgcss24{width:150px;  height:150px;border-radius:5px; vertical-align:top;        }
.imgcss25{width:100px;  height:100px;border-radius:5px; vertical-align:top; margin:5px;       }
.inputcss22{width:70%;border-radius:5px;color:#333;border:none;background-color:#fff; height:30px;     }
.inputcss21{width:99%;height:24px;border:none;font-size:11px;text-align:left;}
.inputcss11::placeholder {  color:#ffffff;      }
.inputcss11 {border-radius:8px;text-align:center;background-color:#006400; font-size:12px;
   width:70% ;height:40px;border:none; }
.acss51{ text-decoration:none;color:#483d86;font-size:20px;font-weight:900;font-family:arial black;}
.acss5{ text-decoration:none;color:#ffffff;font-size:20px;font-weight:900;font-family:arial black;}
.alink{text-decoration:none;}
.spancss21{ background-color:#cd853f;padding:2px 5px 2px 5px;vertical-align:top;border-radius:10px;       }
.spn1{ color:#fff;font-size:10px;border-radius:4px;background-color:#483d86;padding:0px 5px 0px 5px;    }
.lab2{   font-size:11px;width:240px;height:40px     }
.che1{ width:20px;height:20px;top:0px         }
.che2{top:40px;left:-5px;}

.amenu1{float:left;width:100%;height:20px;text-decoration:none;margin:1px;font-size:11px;border-radius: 3px;
        vertical-align:middle;color:#000000;padding-top:4px;     	}
.amenu2{float:left;width:100%;height:24px;text-decoration:none;margin:1px;font-size:11px;border-radius: 3px;
                vertical-align:middle;color:#000000;padding-top:1px;     	}
.spancss22{ border:none;padding:5px 10px 5px 10px;background-color:#483d86;color:#fff;font-size:11px;border-radius:3px;     }
.spancss23{ float:left;padding:5px 10px 5px 10px;margin:2px;font-size:11px;text-decoration:none; color:#ffffff;border-radius:3px;background-color:#757575;margin-right:4px;border:none;     }

.spancss20{position: relative;float:left;top:2px;padding:5px 0px 0px 0px; margin:5px;border-radius:2px;background-color:#999999;line-height:20px;}
.spancss25{ position: relative;float:left;width:20%;background-color:#cccccc;margin:3px;font-size:11px;
            padding:4px;border-radius:3px;             }
.divcss20{  height:20px;color:#000;  }
.padd1{  padding:0px 2px 0px 2px;"  }
.cak{ float: left; height:20px;}
  </style>
  <body>
    @section('script')
     @show
<!-- TTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTT -->

    <div class="container">
      @yield('content')
    </div>


<!-- TTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTT -->
    <div class="footer">
      @yield('footer')<hr width="98%"style="position:relative;top:8px;border-color:#99ffff; line-height:10px">
      <table width="98%"height="20"align="center"border="0"><tr>
      <td style="font-size:12px;"align="center">Copy Right  </td></tr></table>
    </div>


  </body>
</html>
