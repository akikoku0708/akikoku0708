
<?php
  $loginname='';
  $loginname=Session('custsessname');
  $custcode=Session('custsesscode');
  // +++++++++++++++++++++++++++++++++++++++++++++++++++++++++
?>


<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" type="text/css" href="{{ asset('/css/nmenu3.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('/css/nmenu5.css') }}">
<script src="{{ asset('/js/jquery-1.11.2.js') }}"></script>
<script src="{{ asset('/js/nmenu.js') }}"></script>
<script src="{{ asset('/js/main2k2.js') }}"></script>
<script src="{{ asset('/js/jsbtnmenu2.js') }}"></script>

    <title>Home</title>
    <meta name="csrf-token" content="{{ csrf_token() }}" />
</head>
<script>
 $(function () {
  $('div').click(function() {
    $(this).next('ul').slideToggle('fast');
  });
  $('li').click(function(e) {
    $(this).children('ul').slideToggle('fast');
    e.stopPropagation();
  });
});

</script>
<style>
ul { display: none; list-style: none; padding: 0px; line-height:1px; margin-top:0px; margin-bottom:0px;}
ul ul{   padding: 1px; line-height:1px;   }
li {   list-style: none;   padding-left: 10px; line-height:25px;}
li li{     padding-top: 5px;line-height:18px;	}
</style>
<style>

.za1{ position: relative; overflow:hidden;  width:100%;	align:center;		}
.za2{ position: relative;width:100%;	margin : 0 auto;				}
.btn1{ position: absolute; top:40%; right:5px; z-index:10;font-size:40px;border:none;color:#fdd700;   }
.btn2{ position: absolute; top:40%; left:5px; z-index:10; font-size:40px;border:none;color:#fdd700; }



.za51{ position: relative; overflow:hidden;  width:100%;	align:center;		}
.za52{ position: relative;width:100%;	margin : 0 auto;				}
.btn51{ position: absolute; top:30%; right:5px; z-index:10;font-size:40px;border:none;color:#fdd700;   }
.btn52{ position: absolute; top:30%; left:5px; z-index:10; font-size:40px;border:none;color:#fdd700; }

.za41{ position: relative; overflow:hidden;  width:100%;	align:center;		}
.za42{ position: relative;width:100%;	margin : 0 auto;				}
.btn41{ position: absolute; top:30%; right:5px; z-index:10;font-size:40px;border:none;color:#fdd700;   }
.btn42{ position: absolute; top:30%; left:5px; z-index:10; font-size:40px;border:none;color:#fdd700; }

.za31{ position: relative; overflow:hidden;  width:100%;	text-align:center;		}
.za32{ position: relative;width:100%;	margin : 0 auto;				}
.btn31{ position: absolute; top:40%; right:5px; z-index:10;font-size:40px;border:none;color:#fdd700;   }
.btn32{ position: absolute; top:40%; left:5px; z-index:10; font-size:40px;border:none;color:#fdd700; }

.za21{ position: relative; overflow:hidden;  width:100%;}
.za22{ position: relative;width:100%;	margin : 0 auto;  				}

.btn21{ position: absolute; top:40%; right:5px; z-index:10;font-size:40px;border:none;color:#fdd700;   }
.btn22{ position: absolute; top:40%; left:5px; z-index:10; font-size:40px;border:none;color:#fdd700; }

.za11{ position: relative; overflow:hidden;  width:100%;	align:center;	}
.za12{ position: relative;width:100%;	margin : 0 auto;		height:200px;			}
.btn11{ position: absolute; top:25%; right:5px; z-index:10;font-size:40px;border:none;color:#fdd700;   }
.btn12{ position: absolute; top:25%; left:5px; z-index:10; font-size:40px;border:none;color:#fdd700; }

.xza1{ position: relative; overflow: hidden;   width:100%;			}
.xza2{ position: relative;width:100%;	margin : 0 auto;				}
.btnx1{ position: absolute; top:94%; left:100px; z-index:10;font-size:40px;border:none;   }
.btnx2{ position: absolute; top:0%; left:100px; z-index:10; font-size:40px;border:none; }


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
@extends('layouts.add')
<?php

$category8='';$class8='';$item8='';$codeitem='';$amenu4='';$search8='';
$category8k=''; $class8k='';$item8k='';
$category8k="ファッション";
if(isset($_GET['amenu4'])){	$amenu4=$_GET['amenu4'];		}
if(isset($_GET['codeitem'])){	$codeitem=$_GET['codeitem'];		}

if(isset($_GET['submenu2'])){	$class8=$_GET['submenu2'];		}
if(isset($_GET['submenu3'])){	$item8=$_GET['submenu3'];		}
if(isset($_GET['sear'])){	$search8=$_GET['sear'];		}
if(isset($_GET['category'])){	$category8k=$_GET['category'];			}

$arrcatecory=array('電子機器・家電','ファッション','住まい・暮らし','グルメ','美容・健康','車・スポッツ');
?>
<table class="he1500" width="100%"bgcolor="#99fff;"border="0"><tr><td style="vertical-align:top;">

  <table width="100%"class="he40"align="center"bgcolor="#483d86"border="0"><tr>
  <td align="center" ><a href="{{ url('manager/home') }}" class="acss5">
    meisis </a> </td > <td width="20%"class="ft11"align="center"style="color:#ffffff;">
<?php
$cou='';
if(isset($cartc6)){ $cou=count($cartc6); }
//----------------------------------------------------
 $manakeyword='xhome_home2_xproduct_xcart_'.$item8.'';
 if($loginname!=''){  echo ''.$loginname.'様ログイン中';     }
 ?>
 </td > <td width="60%"align="right">
   @if($loginname!='')

   @else
<a href="{{ url('customs/signin') }}?manakeyword=<?PHP echo $manakeyword; ?>" >
  <button class="btncss24">ログイン</button></a>
  @endif

<a href="{{ url('manager/cart') }}?submenu3=<?php echo $item8; ?>" >
  <button class="btncss25">カート<span class="spancss21"id="cartck"><?php echo $cou; ?></span></button></br>
</td></tr></table>

  <table width="100%" align="center" bgcolor="#483d86"border="0"><tr><td width="10%">
</td><td width="65%"align="right">
<input type="text" name="search"id="search"class="inputcss22"  placeholder="<?php echo ''; ?>" required="">
</td><td width="5%"><button onclick="funsearch();"class="btncss25">検索</button>
</td><td width="20%"></td></tr></table>


<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->

  @error('token') <div class="alert alert-danger">{{ $message }}</div> @enderror

  <?php
  $arrzz1=array(); $data5=array(); $cntz2=0;
  $arrse=array(); $arrse2=array();
  //-------------------------------------------------------
  if(isset($menuk)){
   foreach($menuk as $mkk){   foreach($mkk as $mkk2){
     $arrzz1[]=$mkk2;$cntz2+=1; //echo $mkk2;
   if($cntz2==5){$data5[]=$arrzz1;  $arrzz1=array(); $cntz2=0;    }  } }
  }
  //----------------------------------------------------------------
  $arrzz5=array(); $arrzz6=array(); $cntz5=0;
  //-------------------------------------------------------
  if(isset($items51)){
   foreach($items51 as $mkk5){   foreach($mkk5 as $mkk6){
     $arrzz5[]=$mkk6;$cntz5+=1; //echo $mkk6;
   if($cntz5==14){$arrzz6[]=$arrzz5;  $arrzz5=array(); $cntz5=0;    }  } }
  }
  //---------------登録数-------------------------------------------------
  $arrz1=array(); $arrz2=array(); $arrz3=array(); $arrz4=array(); $arrz5=array();
  $arrg1=array(); $arrg2=array(); $arrg3=array(); $arrg4=array(); $arrg5=array();
   for($k3=0;$k3<count($arrzz6);$k3++){
  if($codeitem==$arrzz6[$k3][13]){ $category8k=$arrzz6[$k3][0];  }
  $arrz1[]=$arrzz6[$k3][0];  $arrg1=array_count_values($arrz1);
  $arrz2[]=$arrzz6[$k3][1];  $arrg2=array_count_values($arrz2);
  $arrz3[]=$arrzz6[$k3][2];  $arrg3=array_count_values($arrz3);
  $arrz4[]=$arrzz6[$k3][3];  $arrg4=array_count_values($arrz4);
  $arrz5[]=$arrzz6[$k3][4];  $arrg5=array_count_values($arrz5);
  }
  $arrg4k=json_encode($arrg4);  //echo $category8k;
  //--------------------Search-----------------------------------------------

    $arrse=array(); $arrse2=array();


 if($search8!=''){
  $search8=explode('|',$search8);
  for($m=0;$m<count($arrzz6);$m++){
    $meme=$arrzz6[$m][0].$arrzz6[$m][1].$arrzz6[$m][2].$arrzz6[$m][3].$arrzz6[$m][4].
          $arrzz6[$m][5].$arrzz6[$m][6].$arrzz6[$m][7].$arrzz6[$m][8].$arrzz6[$m][9];
    foreach($search8 as $sear){
      if( preg_match( '/'.$sear.'/', $meme ) ) {
     $arrse[]=$arrzz6[$m][13];
     $category8k=$arrzz6[$m][0];
      }} } }

$arrse2=json_encode($arrse);
//------------------------------------------------------------------------------
  $data=array();$data2=array();$data3=array();$data5b=array();
 $datak=array();$datak1=array();	$arrmm1=array();$arrmm2=array();
//------------------------------------------------------------------
for($iz = 0 ; $iz < count($data5) ; $iz++){
  if($class8==$data5[$iz][1]){ $category8k=$data5[$iz][0];  $class8k=$data5[$iz][1]; }
  if($item8==$data5[$iz][2]){
    $category8k=$data5[$iz][0]; $class8k=$data5[$iz][1]; $item8k=$data5[$iz][2];
   } }
//---------------------------------------------------------------------------
for($iz2 = 0 ; $iz2 < count($data5) ; $iz2++){
  if($category8k==$data5[$iz2][0]){
$data5b[]=array($data5[$iz2][1],$data5[$iz2][2],$data5[$iz2][3],$data5[$iz2][4]);
}}
 //--------------------------------------------------------------------------------------------------
 for($i = 0 ; $i < count($data5b) ; $i++){
     for($j = 0; $j < count($data5b[$i]); $j++){
    $datak[]=$data5b[$i][0];
     } }
 $arrt=array();
 $unique = array_unique($datak);
 foreach($unique as $datakk){	if($datakk!=''){$arrt[]=$datakk;	}	}
 //^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^
  ?>
  <?php
  echo '<table width="100%"  align="center" border="0"  class="he40" >';
  echo '<tr><td class="ft11">';
  	//----------------------------------------------------------------
  for($j=0;$j<count($arrcatecory);$j++){

  echo '<a href="home3?category='.$arrcatecory[$j].'" class="spancss23" >&nbsp;'.$arrcatecory[$j].'&nbsp;&nbsp;';
if(isset($arrg1[$arrcatecory[$j]])){echo '('.$arrg1[$arrcatecory[$j]].')';}
  }
  //
  //-----------------------------------------------------------------
  echo '</a></td></tr></table>';
  ?>
<table width=100% class="he1500"border="1"cellspacing="0"bordercolor="#ccc">
  <tr><td style="vertical-align:top"class="wt240">
<?php
   echo '<table class="wt240"border="1"class="ft11" cellspacing="0"style=" border-color:#99ffff;">
   <tr><td bgcolor="#FFFFFF" >';

   $arrbb1=array(); $arrxx=array();
   for($j2 = 0 ; $j2 < count($arrt) ; $j2++){  //35

   echo '<div  style="padding:0px; margin:0px"">';
   echo '<div class="amenu1" id="'.$arrt[$j2].'" onclick="func1(this);"style="background-color:#d3d3d3;" >&nbsp;'.$arrt[$j2].'';
   if(isset($arrg2[$arrt[$j2]])){echo '('.$arrg2[$arrt[$j2]].')';}
   echo '</div></div>';

   //========================================================
   for($j3 = 0 ; $j3 < count($data5b) ; $j3++){
     if($arrt[$j2]==$data5b[$j3][0]){  	$arrbb1[]=$data5b[$j3][1];   	}	}
   //--------------------------------------------
   $unique3 = array_unique($arrbb1);
   echo '<ul>';		//21
   foreach($unique3 as $datakk3){  //34
   echo '<li>';
   if($datakk3!=''){ //33
   echo '<a class="amenu2"id="'.$datakk3.'" onclick="func2(this);"style="background-color:#d2b48c;">&nbsp;・'.$datakk3.'';
   if(isset($arrg3[$datakk3])){echo '('.$arrg3[$datakk3].')';}
   echo '</a></br>';
   for($j6 = 0 ; $j6 < count($data5b) ; $j6++){  //32
   if(	$datakk3==$data5b[$j6][1]	){		//31
   if(($key=array_search($data5b[$j6][2],$arrxx))!==false){}else{ $arrxx[]=$data5b[$j6][2];
  //    echo '<ul><li>';//21
  // echo '<div id="'.$data5b[$j6][2].'" onclick="func3(this);" class="amenu1"style="background-color:#eee8aa;">&nbsp;33・'.$data5b[$j6][2].'</div>';
  // echo '</li></ul>';	//21
    }	}		}	} //33
   echo '</li>';
   					} //34
   echo '</ul>';	//21
   //===================================================
   $arrbb1=array();
   }//35
   echo '</br>';
   echo '</td></tr></table>';
   ?>
   <?php
     //-------------------------------------------------------------------------------------

     $arrtt1=array(); $arrtt2=array(); $arrtt3=array(); $arrtt4=array(); $arrtt5=array();
     $arrtt1b=array(); $arrtt2b=array(); $arrtt3b=array(); $arrtt4b=array(); $arrtt5b=array();
     $arrtt1c=array(); $arrtt2c=array(); $arrtt3c=array(); $arrtt4c=array(); $arrtt5c=array();
     $arrtate9=array(); $arrtate9b=array(); $arrtate9c=array();

   	//---------------------------------------------------------------------------------
    $dir1="../storage/app/public/img_cm3"; //TOP
    $dir2="../storage/app/public/img_cm4"; //広告
    $dir3="../storage/app/public/img_cm5"; // 広告
    $dir4="../storage/app/public/img_cm4"; //　関連・同類
    $dir5="../storage/app/public/img_cm5"; //最近閲覧
    $dpath1="../storage/img_cm3";
    $dpath2="../storage/img_cm4";
    $dpath3="../storage/img_cm5";
    $dpath4="../storage/img_cm4";
    $dpath5="../storage/img_cm5";
      //---------------------------------------------------------------------------------------------
      if( is_dir($dir1) && $handle1 = opendir( $dir1 )){  while( ($file1=readdir($handle1))!== false){
      if( filetype( $path1 = $dir1 .'/'. $file1 ) == "file" ) {   $arrtt1b[]=$file1;  } }}
      //---------------------------------------------------------------------------------------------
        if( is_dir($dir2) && $handle2 = opendir( $dir2 )){  while( ($file2=readdir($handle2))!== false){
      if( filetype( $path2 = $dir2 .'/'. $file2 ) == "file" ) {   $arrtt2b[]=$file2;  } }}
      //---------------------------------------------------------------------------------------------
      if( is_dir($dir3) && $handle3 = opendir( $dir3 )){  while( ($file3=readdir($handle3))!== false){
      if( filetype( $path3 = $dir3 .'/'. $file3 ) == "file" ) {   $arrtt3b[]=$file3;  } }}
      //---------------------------------------------------------------------------------------------
      if( is_dir($dir4) && $handle4 = opendir( $dir4 )){  while( ($file4=readdir($handle4))!== false){
      if( filetype( $path4 = $dir4 .'/'. $file4 ) == "file" ) {   $arrtt4b[]=$file4;  } }}
    //---------------------------------------------------------------------------------------------
    if( is_dir($dir5) && $handle5 = opendir( $dir5 )){  while( ($file5=readdir($handle5))!== false){
    if( filetype( $path5 = $dir5 .'/'. $file5 ) == "file" ) {   $arrtt5b[]=$file5;
      $arrtate9b[]=$file5;
     } }}
//----------------------------------------------------------------------------------------------
$jimgcm1=json_encode($arrtt1b);
       ?>

       <?php
       //----------------------------------111---------------------------
        $countk1=count($arrtt1b);	$ck12=count($arrtt1b); $cnt1=0;
         $kt1=1;     //設定：画像枚数。（最低１枚）
         if($kt1==0){  echo '只今画像枚数の設定値は０ですが、1以上に訂正して下さい。';	$kt1=1;		}
          $hk1=160/$kt1;   //設定：画像高さ。）
         $spli1=$countk1-$countk1%$kt1;
         array_splice($arrtt1b, $spli1);
         $duty1=100/$kt1;
         foreach($arrtt1b as $tt1b){ $cnt1 +=1; $arrtt1c[]=$tt1b;  if($cnt1==$kt1){  $arrtt1[]=$arrtt1c; $arrtt1c=array(); $cnt1=0;	} }
         $ck1=count($arrtt1);
         //-----------------------------------222---------------------------------
             $countk2=count($arrtt2b);	$ck22=count($arrtt2b); $cnt2=0;
           $kt2=4;     //設定：画像枚数。（最低１枚）
           if($kt2==0){  echo '只今画像枚数の設定値は０ですが、1以上に訂正して下さい。';	$kt2=1;		}
           $hk2=760/$kt2;   //設定：画像高さ。）
           $spli2=$countk2-$countk2%$kt2;
           array_splice($arrtt2b, $spli2);
           $duty2=96/$kt2;
           foreach($arrtt2b as $tt2b){ $cnt2 +=1; $arrtt2c[]=$tt2b;  if($cnt2==$kt2){  $arrtt2[]=$arrtt2c; $arrtt2c=array(); $cnt2=0;	} }
           $ck2=count($arrtt2);
           //-----------------------------------333--   top  -----------------------------
            $countk3=count($arrtt3b);	$ck32=count($arrtt3b); $cnt3=0;
            $kt3=4;     //設定：画像枚数。（最低１枚）
             if($kt3==0){  echo '只今画像枚数の設定値は０ですが、1以上に訂正して下さい。';	$kt3=1;	}
             $hk3=760/$kt3;   //設定：画像高さ。）
             $spli3=$countk3-$countk3%$kt3;
             array_splice($arrtt3b, $spli3);
             $duty3=96/$kt3;
             foreach($arrtt3b as $tt3b){ $cnt3 +=1; $arrtt3c[]=$tt3b;  if($cnt3==$kt3){  $arrtt3[]=$arrtt3c; $arrtt3c=array(); $cnt3=0;	} }
             $ck3=count($arrtt3);
             //-----------------------------------444------------------------------------------
                 $countk4=count($arrtt4b);	$ck42=count($arrtt4b); $cnt4=0;
               $kt4=4;     //設定：画像枚数。（最低１枚）
               if($kt4==0){    echo '只今画像枚数の設定値は０ですが、1以上に訂正して下さい。';$kt4=1;	}
               $hk4=760/$kt4;   //設定：画像高さ。）
               $spli4=$countk4-$countk4%$kt4;
               array_splice($arrtt4b, $spli4);
               $duty4=95/$kt4;
               foreach($arrtt4b as $tt4b){ $cnt4 +=1; $arrtt4c[]=$tt4b;  if($cnt4==$kt4){  $arrtt4[]=$arrtt4c; $arrtt4c=array(); $cnt4=0;	} }
               $ck4=count($arrtt4);


     //-----------------------------------555-----------------------------
        $countk5=count($arrtt5b);	$ck52=count($arrtt5b); $cnt5=0;
      $kt5=4;     //設定：画像枚数。（最低１枚）
      if($kt5==0){  echo '只今画像枚数の設定値は０ですが、1以上に訂正して下さい。';	$kt5=1;		}
      $hk5=760/$kt5;   //設定：画像高さ。）
      $spli5=$countk5-$countk5%$kt5;
      array_splice($arrtt5b, $spli5);
      $duty5=95/$kt5;
      foreach($arrtt5b as $tt5b){ $cnt5 +=1; $arrtt5c[]=$tt5b;  if($cnt5==$kt5){  $arrtt5[]=$arrtt5c; $arrtt5c=array(); $cnt5=0;	} }
      $ck5=count($arrtt5);

   ?>

<!-- :::::::::::::::::::::::  縦画像　4枚      ::::::::::::::::::::::::::::::::::::::: -->
<table width="100%" border="0"height="30"><tr> <td>&nbsp;</td></tr></table>

<table width="100%"align="center" border="0"><tr><td align="center">
<div id="divps">
	   <div class="xza2"><div class="xza1">
        <span id="xboxzz2"class="btnx2"><img src="{{ asset('images/btntop.jpg') }}" style="border-radius:25px;width:30px;height:30px;"></span>
       <span id="xboxzz" class="btnx1"><img src="{{ asset('images/btnbot.jpg') }}" style="border-radius:25px;width:30px;height:30px;"></span>
<?php

$xkt=4;     //設定：画像枚数。（最低2枚）
$xhimg=220;
$xhk=$xkt*$xhimg;   //設定：画像高さ。）
$countkx=count($arrtate9b);
$xspli=$countkx-$countkx%$xkt;
array_splice($arrtate9b, $xspli);
$xduty=100/$xkt;  $cntx9=0;

foreach($arrtate9b as $tate9b){ 	$cntx9 +=1;	  $arrtate9c[]=$tate9b;
if($cntx9==$xkt){	$arrtate9[]=$arrtate9c; $arrtate9c=array(); $cntx9=0;				}
}

//-------------------------------------------------
$xck=count($arrtate9); $xck2=count($arrtate9b);
if($xkt>1){
 for($v=0;$v<count($arrtate9);$v++){
  echo '<span class="box'.$v.'"	style="width:100%">';
 for($a=0;  $a<$xkt;  $a++){
 echo '<div ><img src="'.$dpath5.'/'.$arrtate9[$v][$a].'" style="border-radius:5px;margin:0px;width:100%;height:'.$xhimg.'px"	></div>';
	}
   echo '</span>';
 }}

?>
</div></div></div>
</td></tr></table>

<!-- :::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::: -->
</td><td style="vertical-align:top">
  <table width="100%"border="0">
  <tr><td><div id="message5"></div></td></tr>
  <tr><td><div id="message3"></div></td></tr>
  <tr><td><div id="message4"></div></td></tr>
  <tr><td><span id="message2"></span><span id="imgcm6">  </span></td></tr>
  </table>
<!-- :::::::::::::::::::::::::::::::::::::::::::::::::::::::: -->


<table align="center"width="98%" height="30"> <tr>
  <td style="font-size:13px;vertical-align:top"><strong>最近閲覧商品</strong> </td></tr></table>

  <table align="center"width="100%" ><tr><td align="center">
  <div class="za22"><div class="za21">
    <span id="boxzz22"class="btn22"><img src="{{ asset('images/btnleft.jpg') }}" style="border-radius:25px;width:30px;height:30px;"></span>
    <span id="boxzz2" class="btn21"><img src="{{ asset('images/btnright.jpg') }}" style="border-radius:25px;width:30px;height:30px;"></span>
<?php
echo '';  //--------------------------------------------------------
if($kt2>1){
for($v2=0;$v2<count($arrtt2);$v2++){
echo '<span class="box2'.$v2.'" style="width:100%;">';
echo '<table border="0"width="100%"><tr>';
for($a2=0;  $a2<$kt2;  $a2++){
  echo '<td align="center">zz'.$arrtt2[$v2][$a2].'</br><img src="'.$dpath2.'/'.$arrtt2[$v2][$a2].'"style="border-radius:5px;width:95%;"></td>';
}
echo '</tr></table></span>';
}}else{
for($v21=0;$v21<count($arrtt2b);$v21++){
echo '<img src="'.$dpath2.'/'.$arrtt2b[$v21].'" class="box2'.$v21.'"	style="width:100%;height:300px" >';  }
}
 echo '';

?>
</div></div></td></tr></table>
<!-- +++++++++++++++++++++++++3333++++++++++++++++++++++++++++++++++++ -->

<table align="center"width="98%" height="30"> <tr>
  <td style="font-size:13px;vertical-align:top"><strong>人気ブランド</strong> </td></tr></table>
  <table align="center"width="100%" ><tr><td align="center">
  <div class="za32"><div class="za31">
  <span id="boxzz32"class="btn32"><img src="{{ asset('images/btnleft.jpg') }}" style="border-radius:25px;width:30px;height:30px;"></span>
  <span id="boxzz3" class="btn31"><img src="{{ asset('images/btnright.jpg') }}" style="border-radius:25px;width:30px;height:30px;"></span>
<?php
 //---------------------------------------------------------------------------------------------------------
if($kt3>1){
for($v3=0;$v3<count($arrtt3);$v3++){
echo '<span class="box3'.$v3.'" style="width:100%">';
for($a3=0;  $a3<$kt3;  $a3++){if($a3==0){$mz3=0; }else{$mz3=10;}
echo '<img src="'.$dpath3.'/'.$arrtt3[$v3][$a3].'"style="border-radius:5px;margin-left:'.$mz3.'px;width:'.$duty3.'%;height:'.$hk3.'px">';	}

echo '</span>';
}}else{
for($v31=0;$v31<count($arrtt3b);$v31++){
echo '<img src="'.$dpath3.'/'.$arrtt3b[$v31].'" class="box3'.$v31.'"	style="width:100%;height:300px" >';  }
}
echo '';
?>
 </div></div></td></tr></table>

<!-- +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
<table align="center"width="98%" border="0"height="30"> <tr>
  <td style="font-size:13px;vertical-align:top"><strong>おすすめ商品</strong> </td></tr></table>
    <table align="center"width="100%" ><tr><td align="center">
  <div class="za42"><div class="za41">
  <span id="boxzz42"class="btn42"><img src="{{ asset('images/btnleft.jpg') }}" style="border-radius:25px;width:30px;height:30px;"></span>
  <span id="boxzz4" class="btn41"><img src="{{ asset('images/btnright.jpg') }}" style="border-radius:25px;width:30px;height:30px;"></span>
<?php
//echo ' <div class="za42"><div class="za41"><span id="boxzz42"class="btn42">◀</span><span id="boxzz4" class="btn41">▶</span>';
//-------------------------
if($kt4>1){
for($v4=0;$v4<count($arrtt4);$v4++){
echo '<span class="box4'.$v4.'" style="width:100%">';
for($a4=0;  $a4<$kt4;  $a4++){    if($a4==0){$mz4=0; }else{$mz4=10;}
  echo '<img src="'.$dpath4.'/'.$arrtt4[$v4][$a4].'"style="border-radius:5px;margin-left:'.$mz4.'px;width:'.$duty4.'%;height:'.$hk4.'px">';	}
echo '</span>';
}}else{
for($v41=0;$v41<count($arrtt4b);$v41++){
echo '<img src="'.$dpath4.'/'.$arrtt4b[$v41].'" class="box4'.$v41.'"	style="width:100%;height:300px" >';  }
}
  echo '</div></div>';
?>
</div></div></td></tr></table>

<table align="center"width="98%" height="30"> <tr>
  <td style="font-size:13px;vertical-align:top"><strong>人気ブランド</strong> </td></tr></table>
  <table align="center"width="100%" ><tr><td align="center">
  <div class="za52"><div class="za51">
  <span id="boxzz52"class="btn52"><img src="{{ asset('images/btnleft.jpg') }}" style="border-radius:25px;width:30px;height:30px;"></span>
  <span id="boxzz5" class="btn51"><img src="{{ asset('images/btnright.jpg') }}" style="border-radius:25px;width:30px;height:30px;"></span>
<?php
 //---------------------------------------------------------------------------------------------------------
if($kt5>1){
for($v5=0;$v5<count($arrtt5);$v5++){
echo '<span class="box5'.$v5.'" style="width:100%">';
for($a5=0;  $a5<$kt5;  $a5++){if($a5==0){$mz5=0; }else{$mz5=10;}
echo '<img src="'.$dpath5.'/'.$arrtt5[$v5][$a5].'"style="border-radius:5px;margin-left:'.$mz5.'px;width:'.$duty5.'%;height:'.$hk5.'px">';	}

echo '</span>';
}}else{
for($v51=0;$v51<count($arrtt5b);$v51++){
echo '<img src="'.$dpath5.'/'.$arrtt5b[$v51].'" class="box5'.$v51.'"	style="width:100%;height:300px" >';  }
}
echo '';
?>
 </div></div></td></tr></table>







</td></tr></table>


<!-- :::::::::::::::::::::::::::::::::::::::::::::::::::::::: -->
</td></tr></table>
</body>
<script type="text/javascript">
var arrpp=[];var idkk='';
var arrg4=JSON.parse('<?php echo $arrg4k; ?>');
var categoryx=''; var classx=''; var itemx=''; var product=''; var arrse=[];
var ikey=123; var search='';var searchx=''; var class8=''; var item8='';
//--------------------------------------------------------------
categoryx='<?php echo $category8k; ?>';
class8='<?php echo $class8k; ?>';
item8='<?php echo $item8k; ?>';
arrse=JSON.parse('<?php echo $arrse2; ?>');
arrse=arrse.join('|');
//----------------------------------------------------
var jimgcm1=JSON.parse('<?php echo $jimgcm1; ?>');
var dpath1='<?php echo $dpath1; ?>';
//-------------------------------------------------------
 $(function(){
if(categoryx!=''){ ikey=999;    read();    }
if(class8!=''){ ikey=811;  read();    }
if(item8!=''){ ikey=822;   read();  }
if(arrse!=''){ ikey=833;       read();  }
 });
//++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
function cmimg(eled){  $('.imaget').children('img').attr('src', ''+dpath1+'/'+eled.id+''); }

//----------------------------------------------------------------------
  function funsearch(){ ikey=833;
  search = $("input[name=search]").val();
  if(search!=''){  ikey=833; //
  search = search.replace(/　/g, " ");
  search=search.split(' ');
  search=search.filter(Boolean);
  arrse=search.join('|'); //alert(arrse);
  window.location.href = "{{URL::to('manager/home3')}}?sear="+arrse+"";
  }}
  //----------------------------------------
  function func1(ele1){  ikey=111;  class8=ele1.id; read();  }
  function func2(ele2){  ikey=222;  item8=ele2.id;    read();  }
  function func3(ele3){  ikey=333;  product=ele3.id;  read();  }
    //-------------------------------------------------------------------------
    $.ajaxSetup({
    headers: {  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')    }
    });
    //--------------------------------------------------------------
    $(".btn-submit").click(function(e){  e.preventDefault();   read();  });
   //----------------------------------------------------------------------
      function read(){
        var vname1 = ikey;
        var vname2 = categoryx;
        var vname3 = class8;
        var vname4 = item8;
        var vname5 = product;
        var vname6 = arrse;
        var vname7 = '77';
        var vname8 = '88';
        $.ajax({
           type:'POST',
           url:"{{ route('manager/ajaxform1/home3ajax') }}",
           data:{kname1:vname1, kname2:vname2, kname3:vname3, kname4:vname4,
             kname5:vname5, kname6:vname6, kname7:vname7, kname8:vname8
           },
           success:function(data){
  //-----------------------------------------------------------------
  //-----------------------------------------------------------
  var items51=data['items51']; var menuk=data['menuk']; var ctk=0; var cmimg='';
  var main1a='';  var main1b='';
   var category=''; var classm='';var itemk=''; var product='';
   //-----------------------------------------------------------
   var arrkk=[]; var arrcc=[]; var main2a='';  var main2b='';
   var main9b=''; var main9a=''; var zname4='';  var arrg4k='';
 //----------------------------------------------------------
 for(var i=0;i<items51.length;i++){
   if(data['zname1']==999){
     if(data['zname2']==items51[i]['category']){  ctk +=1;
       var feat1=items51[i]['featherm'].slice( 0, 10 );
       main9a='<a href="{{ url('manager/product') }}?codeitem='+items51[i]['codeitem']+'">'
      +'<span class="spancss25">'
      +'<div class="divcss20"align="right">'+items51[i]['itemk']+'</div>'
      +'<div class="divcss20"><strong>'+'商品名：'+items51[i]['product']+'</strong></div>'
      +'<div align="center"><img src="../storage/upload/'+items51[i]['storeid']+'/'+items51[i]['picmain']+'" class="imgcss24"></div>'
      +'<div style="height:10px"></div>'
      +'<div class="divcss20"align="center"><strong>'+feat1+'</strong></div>'
      +'<div class="divcss20">' +'店舗名：'+items51[i]['storename']+'</div>'
      +'<div class="divcss20">'+'型番：'+items51[i]['numitem']+'</div><div class="divcss20">'
      +'単価：'+items51[i]['pricem']+'　円</div>'
      +'</span></a>';
      main9b=main9b+main9a;
     } }
   //--------------------------------------------------
 if(data['zname1']==811||data['zname1']==111){ var feat2=items51[i]['featherm'].slice( 0, 10 );
   if(data['zname3']==items51[i]['classm']){ ctk +=1;
     main1a='<a href="{{ url('manager/product') }}?codeitem='+items51[i]['codeitem']+'">'
    +'<span class="spancss25">'
    +'<div class="divcss20"align="right">'+items51[i]['itemk']+'</div>'
    +'<div class="divcss20"><strong>'+'商品名：'+items51[i]['product']+'</strong></div>'
    +'<div align="center"><img src="../storage/upload/'+items51[i]['storeid']+'/'+items51[i]['picmain']+'" class="imgcss24"></div>'
    +'<div style="height:10px"></div>'
    +'<div class="divcss20"align="center"><strong>'+feat2+'</strong></div>'
    +'<div class="divcss20">' +'店舗名：'+items51[i]['storename']+'</div>'
    +'<div class="divcss20">'+'型番：'+items51[i]['numitem']+'</div><div class="divcss20">'
    +'単価：'+items51[i]['pricem']+'　円</div>'
    +'</span></a>';
    main1b=main1b+main1a;
 } }
 //------------------------------------------------
 if(data['zname1']==822||data['zname1']==222){ var feat3=items51[i]['featherm'].slice( 0, 10 );
   if(data['zname4']==items51[i]['itemk']){  ctk +=1;
     main1a='<a href="{{ url('manager/product') }}?codeitem='+items51[i]['codeitem']+'">'
    +'<span class="spancss25">'
    +'<div class="divcss20"align="right">'+items51[i]['itemk']+'</div>'
    +'<div class="divcss20"><strong>'+'商品名：'+items51[i]['product']+'</strong></div>'
    +'<div align="center"><img src="../storage/upload/'+items51[i]['storeid']+'/'+items51[i]['picmain']+'" class="imgcss24"></div>'
    +'<div style="height:10px"></div>'
    +'<div class="divcss20"align="center"><strong>'+feat3+'</strong></div>'
    +'<div class="divcss20">' +'店舗名：'+items51[i]['storename']+'</div>'
    +'<div class="divcss20">'+'型番：'+items51[i]['numitem']+'</div><div class="divcss20">'
    +'単価：'+items51[i]['pricem']+'　円</div>'
    +'</span></a>';
    main1b=main1b+main1a;
 } }
 //------------------------------------------------
 if(data['zname1']==333){
   if(data['zname5']==items51[i]['product']){  ctk +=1;
     var feat4=items51[i]['featherm'].slice( 0, 10 );
     main1a='<a href="{{ url('manager/product') }}?codeitem='+items51[i]['codeitem']+'">'
    +'<span class="spancss25">'
    +'<div class="divcss20"align="right">'+items51[i]['itemk']+'</div>'
    +'<div class="divcss20"><strong>'+'商品名：'+items51[i]['product']+'</strong></div>'
    +'<div align="center"><img src="../storage/upload/'+items51[i]['storeid']+'/'+items51[i]['picmain']+'" class="imgcss24"></div>'
    +'<div style="height:10px"></div>'
    +'<div class="divcss20"align="center"><strong>'+feat4+'</strong></div>'
    +'<div class="divcss20">' +'店舗名：'+items51[i]['storename']+'</div>'
    +'<div class="divcss20">'+'型番：'+items51[i]['numitem']+'</div><div class="divcss20">'
    +'単価：'+items51[i]['pricem']+'　円</div>'
    +'</span></a>';
    main1b=main1b+main1a;
 } }
 //------------------------------------------------
 if(data['zname1']==833){ //serch
   arrcc=data['zname6'].split('|');
   for(var v2=0;v2<arrcc.length;v2++){
   if(arrcc[v2]==items51[i]['codeitem']){   ctk +=1;
     var feat5=items51[i]['featherm'].slice( 0, 10 );
     main1a='<a href="{{ url('manager/product') }}?codeitem='+items51[i]['codeitem']+'">'
    +'<span class="spancss25">'
    +'<div class="divcss20"align="right">'+items51[i]['itemk']+'</div>'
    +'<div class="divcss20"><strong>'+'商品名：'+items51[i]['product']+'</strong></div>'
    +'<div align="center"><img src="../storage/upload/'+items51[i]['storeid']+'/'+items51[i]['picmain']+'" class="imgcss24"></div>'
    +'<div style="height:10px"></div>'
    +'<div class="divcss20"align="center"><strong>'+feat5+'</strong></div>'
    +'<div class="divcss20">' +'店舗名：'+items51[i]['storename']+'</div>'
    +'<div class="divcss20">'+'型番：'+items51[i]['numitem']+'</div><div class="divcss20">'
    +'単価：'+items51[i]['pricem']+'　円</div>'
    +'</span></a>';
    main1b=main1b+main1a;
 }}}
 //--------------------------------------------------
 }
 var arrclass=[]; var arritem=[]; var main8a=''; var main8b='';
 var arrcate=[];  var arrpro=[];
 for(var v3=0;v3<menuk.length;v3++){
  if(menuk[v3]['category']==data['zname2']){ arrcate.push(menuk[v3]['classm']); }
 if(menuk[v3]['classm']==data['zname3']){ arrclass.push(menuk[v3]['itemk']); }
}
//--------------------------------------------------------------------------
for(var v4=0;v4<menuk.length;v4++){
 if(menuk[v4]['itemk']==data['zname4']){ arritem.push(menuk[v4]['product']); }
}
//--------------------------------------------------------------------------

/*
cmimg='<span id="'++'"class="imaget">'
+'<img src="'+dpath1+'/'+jimgcm1[0]+'"width="50%" height="290"style="border-radius:5px;margin-left:20px"></span>';
for(var b=0;b<jimgcm1.length;b++){
}*/
//-------------------------------------------------------------------
if(data['zname1']==811||data['zname1']==111){ //item
  arrclass = arrclass.filter(function(ele , pos){     return arrclass.indexOf(ele) == pos;  })
  for(var v5=0;v5<arrclass.length;v5++){main2a=main2a+'<span class="spancss23">'+arrclass[v5]+'</span>';}
  $('#message5').html( '<span class="ft11"><strong>■ '+data['zname2']+' ▶ '+data['zname3']+'</strong></span><hr>');
  $('#message2').html( main1b+cmimg);
   $('#message4').html('');
  //$('#message3').html( main8b);
  }
  //------------------------------------------------------------------------
  if(data['zname1']==822||data['zname1']==222){ //item
  arrclass = arrclass.filter(function(ele , pos){     return arrclass.indexOf(ele) == pos;  })
  for(var v5=0;v5<arrclass.length;v5++){main2a=main2a+'<span class="spancss23">'+arrclass[v5]+'</span>';}
  for(var v6=0;v6<arritem.length;v6++){
    if(arrg4[arritem[v6]]!=null){arrg4k='('+arrg4[arritem[v6]]+')';}else{arrg4k='';}
    main8b=main8b+'<span id="'+arritem[v6]+'"class="spancss23"onclick="func3(this);" >'+arritem[v6]+arrg4k+'</span>';}

  $('#message5').html( '<span class="ft11"><strong>■ '+data['zname2']+' ▶ '+data['zname3']+' ▶ '+data['zname4']+'</strong></span><hr>');
  $('#message4').html( '<hr><span class="ft11"><strong>● '+data['zname4']+'</strong></span><hr>');
   $('#message2').html( main1b+cmimg);
  $('#message3').html( main8b);
}
//------------------------------------------------------------------------
if(data['zname1']==999){
 $('#message2').html( '<span class="ft11"><strong>■ '+data['zname2']+'</strong></span><hr>'+main9b+cmimg);
}
if(data['zname1']==333){
for(var v7=0;v7<arritem.length;v7++){main8b=main8b+'<span id="'+arritem[v7]+'"class="spancss23"onclick="func3(this);" >'+arritem[v7]+'</span>';}
  $('#message5').html( '<span class="ft11"><strong>■ '+data['zname2']+' ▶ '+data['zname3']+' ▶ '+data['zname4']+'</strong></span><hr>');
  $('#message4').html( '<hr><span class="ft11"><strong>● '+data['zname5']+'</strong></span><hr>');
//  $('#message3').html( main8b+444);

$('#message2').html(main1b);    //+cmimg

}

//data['zname1']+data['zname2']+data['zname3']+



             //-----------ok-------------------
           }
        });
        }
</script>


<script>

  var kt1='<?php echo $kt1; ?>';	if(kt1==1){	lengthk1='<?php echo $ck12; ?>';}
  var kt2='<?php echo $kt2; ?>';	if(kt1==1){	lengthk1='<?php echo $ck22; ?>';}
  var kt3='<?php echo $kt3; ?>';	if(kt1==1){	lengthk1='<?php echo $ck32; ?>';}
  var kt4='<?php echo $kt4; ?>';	if(kt1==1){	lengthk1='<?php echo $ck42; ?>';}
  var kt5='<?php echo $kt5; ?>'; 	if(kt1==1){	lengthk1='<?php echo $ck52; ?>';}
  var lengthk1='<?php echo $ck1; ?>';
  var lengthk2='<?php echo $ck2; ?>';
  var lengthk3='<?php echo $ck3; ?>';
  var lengthk4='<?php echo $ck4; ?>';
  var lengthk5='<?php echo $ck5; ?>';


</script>
<script src="{{ asset('/js/kirikae7b.js') }}"></script>

<script type="text/javascript">;

$(function() {
	var xkt='<?php echo $xkt; ?>';		xkt=Number(xkt);
	var xhimg='<?php echo $xhimg; ?>';	xhimg=Number(xhimg);
	var xhk=xkt*xhimg+24;

	var xpodiv = $('#divps').position();  //alert(podiv.top);
	var xht=0; var xxz=xkt*xhimg-5*xhimg-35;	//450-2*himg;	3
	var xhm=-xpodiv.top-xhimg+xxz;
	var xhp=xpodiv.top+xhimg-xxz;
	var xlengthk;

	if(xkt>1){	xlengthk='<?php echo $xck; ?>';			}else{	xlengthk='<?php echo $xck2; ?>';			}
	var xkk=xlengthk-1;	var xsk0=0;	var xsk1=1; var xsk2=0;


	//--------------------------------------------------------------
	for(ix=0;ix<xlengthk;ix++){
	$(".box"+ix).css({position:"absolute",top:xhm,left:'0%'});
	}
	$(".box1").css({position:"absolute",top:xhm,left:'0%'});
	$(".box0").css({position:"absolute",top:xht,left:'0%'});
	$(".box"+xkk).css({position:"absolute",top:xhp,left:'0%'});
	$("#xboxzz").click(function(){ 	xrt='plus'; 		xread();		});
	$("#xboxzz2").click(function(){ 	xrt='minas'; 	xread();		});
	function xread(){
		if(xrt=='plus'){
		if(xsk0==xkk){  xsk1=xkk-xsk0; xsk2=xsk0-1;  	$(".box"+xsk1).css({position:"absolute",top:xhm,left:'0%'});
	 		  }else{  xsk1=xsk0+1; xsk2=xsk0+2;		$(".box"+xsk1).css({position:"absolute",top:xhm,left:'0%'});
        }

		$(".box"+xsk0).animate({top:xhp,left:'0%'},1000);
		$(".box"+xsk1).animate({top:xht,left:'0%'},1000);
		if(xsk0==xkk){ xsk0=-1;	}
		xsk0 +=1;
		}
	//---------------------------------------------------------------------------------
		if(xrt=='minas'){
		if(xsk0==0){   	$(".box"+xkk).css({position:"absolute",top:xhp,left:'0%'});
	 			}else{		xsk1=xsk0+1; xsk2=xsk0-1;	$(".box"+xsk2).css({position:"absolute",top:xhp,left:'0%'});	}

		$(".box"+xsk0).animate({top:xhm,left:'0%'},1000);
		$(".box"+xsk1).css({position:"absolute",top:xhp,left:'0%'});
		if(xsk0==0){ 	$(".box"+xkk).animate({top:xht,left:'0%'},1000);		}else{
			$(".box"+xsk2).animate({top:xht,left:'0%'},1000);
			}
		xsk0 -=1;
		if(xsk0<0){ xsk0=xkk;	}
		}}  //read
		//----------------------------------------------------
		if(xkt>1){	$('.xza1').css('height',''+xhk+'px');	$('.xza2').css('height',''+xhk+'px');		}else{
			$('.xza1').css('width','100%');  $('.xza1').css('height',''+xhk+'px');
			}
});
//---------------------------------------------
$(function(){
	 $('.btnx1,.btnx2').css("opacity", 0);
  $(".xza1").hover(
    function() {
      $('.btnx1,.btnx2').css("opacity", 1);
    },
    function() {
      $('.btnx1,.btnx2').css("opacity", 0);
    }
  );
});

</script>
</html>
