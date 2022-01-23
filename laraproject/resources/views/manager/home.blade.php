
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
<link rel="stylesheet" type="text/css" href="{{ asset('/css/jquery.carousel.css') }}">
<script src="{{ asset('/js/jquery-1.11.2.js') }}"></script>
<script src="{{ asset('/js/nmenu.js') }}"></script>



    <title>Home</title>

</head>
<style>

.cak{ float: left; height:20px;}
.nmenu > ul{ width: 190px;height: 200px; }
.nmenu ul li > div, .nmenu ul li > ul{  padding-top:0px;  top:-2px;
  left:180px;width: 1000px;	height: 540px;
}
.btn-submit{width:60px;height:30px; background-color:#483d86;color:#fff;border-radius: 3px;}
.form-control{width:99%;height:24px;font-size:13px;border-color:#fff; border-radius:3px;
}
.image {     position: relative; height:300px; }
.image .imgc1 {    position: absolute; top: 80px; right: 10px;color:#fdd700;         }
.image .imgc2 {    position: absolute; top: 80px; left: 10px;color:#fdd700;   }
</style>


<style>

.za1{ position: relative; overflow:hidden;  width:100%;	align:center;		}
.za2{ position: relative;width:100%;	margin : 0 auto;				}
.btn1{ position: absolute; top:40%; right:5px; z-index:10;font-size:40px;border:none;color:#fdd700;   }
.btn2{ position: absolute; top:40%; left:5px; z-index:10; font-size:40px;border:none;color:#fdd700; }

.acss51{ text-decoration:none;color:#483d86;font-size:20px;font-weight:900;font-family:arial black;}
.acss5{ text-decoration:none;color:#ffffff;font-size:20px;font-weight:900;font-family:arial black;}

.za51{ position: relative; overflow:hidden;  width:100%;	align:center;		}
.za52{ position: relative;width:100%;	margin : 0 auto;				}
.btn51{ position: absolute; top:40%; right:5px; z-index:10;font-size:40px;border:none;color:#fdd700;   }
.btn52{ position: absolute; top:40%; left:5px; z-index:10; font-size:40px;border:none;color:#fdd700; }

.za41{ position: relative; overflow:hidden;  width:100%;	align:center;		}
.za42{ position: relative;width:100%;	margin : 0 auto;				}
.btn41{ position: absolute; top:40%; right:5px; z-index:10;font-size:40px;border:none;color:#fdd700;   }
.btn42{ position: absolute; top:40%; left:5px; z-index:10; font-size:40px;border:none;color:#fdd700; }

.za31{ position: relative; overflow:hidden;  width:100%;	align:center;		}
.za32{ position: relative;width:100%;	margin : 0 auto;				}
.btn31{ position: absolute; top:40%; right:5px; z-index:10;font-size:40px;border:none;color:#fdd700;   }
.btn32{ position: absolute; top:40%; left:5px; z-index:10; font-size:40px;border:none;color:#fdd700; }

.za21{ position: relative; overflow:hidden;  width:100%;	align:center;		}
.za22{ position: relative;width:100%;	margin : 0 auto;				}
.btn21{ position: absolute; top:40%; right:10px; z-index:10;border:none;color:#fdd700;   }
.btn22{ position: absolute; top:40%; left:10px; z-index:10; border:none;color:#fdd700; }

.za11{ position: relative; overflow:hidden;  width:100%;	align:center;	}
.za12{ position: relative;width:100%;	margin : 0 auto;		height:200px;			}
.btn11{ position: absolute; top:25%; right:5px; z-index:10;font-size:40px;border:none;color:#fdd700;   }
.btn12{ position: absolute; top:25%; left:5px; z-index:10; font-size:40px;border:none;color:#fdd700; }


</style>
<script>

(function() {  $(function() {    return $('.carousel').each(function() {
 return $(this).carousel({     cycle: 3000    });    });  });		}).call(this);
//------------------------------------------------------------------
 jQuery(function(){ 	nmenu.init({		menuid: 'myside'	})     })

</script>
<body>


@extends('layouts.add')



<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->

 <table width="100%"class="he40"align="center"bgcolor="#ffffff"border="0"><tr>
 <td align="center" ><a href="{{ url('manager/home') }}" class="acss51">
   meisis </a> </td > <td width="20%"class="ft11"align="center"style="color:#000000;">
<?php

$cou='';
if(isset($cartc5)){ $cou=count($cartc5); }
 $manakeyword='home_xhome2_xproduct_xcart_xxxxx';
if($loginname!=''){  echo ''.$loginname.'様';     }else{echo 'ゲスト様';}

 ?>
 </td > <td width="60%"align="right">
   @if($loginname!='')
    <a href="{{ url('manager/home') }}?out=logout" >
     <button class="btncss25">ログアウト</button></a>
   @else
<a href="{{ url('customs/signin') }}?manakeyword=<?PHP echo $manakeyword; ?>" >
  <button class="btncss25">ログイン</button></a>
  @endif
  <a href="{{ url('manager/mypage') }}" >
  <button class="btncss25">マイページ</button></a>
  <a href="{{ url('manager/browsing') }}" >
  <button class="btncss25">お気に入り</button></a>
  <a href="{{ url('manager/cart') }}" >
  <button class="btncss25">カート<span class="spancss21"id="cartck">
    <?php echo $cou; ?></span></button></a>
</td></tr></table>
<table align="center"width="100%"style="border:3px solid #ffffff;" bgcolor="#483d86"><tr><td width="20%"></td>
  <td align="center"width="70%"><input type="text" name="search" value="" class="inputcss22"style=""/>
<button type="submit"onclick="funsearch(this);"class="btncss25">検索</button>
</td><td width="10%"></td></tr></table>
<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
  @error('token') <div class="alert alert-danger">{{ $message }}</div> @enderror
<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~img~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
<?php
  //-------------------------------------------------------------------------------------

  $arrtt1=array(); $arrtt2=array(); $arrtt3=array(); $arrtt4=array(); $arrtt5=array();
  $arrtt1b=array(); $arrtt2b=array(); $arrtt3b=array(); $arrtt4b=array(); $arrtt5b=array();
  $arrtt1c=array(); $arrtt2c=array(); $arrtt3c=array(); $arrtt4c=array(); $arrtt5c=array();
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
  if( filetype( $path5 = $dir5 .'/'. $file5 ) == "file" ) {   $arrtt5b[]=$file5;  } }}
  //-----------------------------------555-----------------------------
     $countk5=count($arrtt5b);	$ck52=count($arrtt5b); $cnt5=0;
   $kt5=5;     //設定：画像枚数。（最低１枚）
   if($kt5==0){  echo '只今画像枚数の設定値は０ですが、1以上に訂正して下さい。';	$kt5=1;		}
   $hk5=960/$kt5;   //設定：画像高さ。）
   $spli5=$countk5-$countk5%$kt5;
   array_splice($arrtt5b, $spli5);
   $duty5=96/$kt5;
   foreach($arrtt5b as $tt5b){ $cnt5 +=1; $arrtt5c[]=$tt5b;  if($cnt5==$kt5){  $arrtt5[]=$arrtt5c; $arrtt5c=array(); $cnt5=0;	} }
   $ck5=count($arrtt5);
   //-----------------------------------444------------------------------------------
       $countk4=count($arrtt4b);	$ck42=count($arrtt4b); $cnt4=0;
     $kt4=4;     //設定：画像枚数。（最低１枚）
     if($kt4==0){    echo '只今画像枚数の設定値は０ですが、1以上に訂正して下さい。';$kt4=1;	}
     $hk4=990/$kt4;   //設定：画像高さ。）
     $spli4=$countk4-$countk4%$kt4;
     array_splice($arrtt4b, $spli4);
     $duty4=96/$kt4;
     foreach($arrtt4b as $tt4b){ $cnt4 +=1; $arrtt4c[]=$tt4b;  if($cnt4==$kt4){  $arrtt4[]=$arrtt4c; $arrtt4c=array(); $cnt4=0;	} }
     $ck4=count($arrtt4);
   //-----------------------------------333-------------------------------
    $countk3=count($arrtt3b);	$ck32=count($arrtt3b); $cnt3=0;
    $kt3=5;     //設定：画像枚数。（最低１枚）
     if($kt3==0){  echo '只今画像枚数の設定値は０ですが、1以上に訂正して下さい。';	$kt3=1;	}
     $hk3=960/$kt3;   //設定：画像高さ。）
     $spli3=$countk3-$countk3%$kt3;
     array_splice($arrtt3b, $spli3);
     $duty3=96/$kt3;
     foreach($arrtt3b as $tt3b){ $cnt3 +=1; $arrtt3c[]=$tt3b;  if($cnt3==$kt3){  $arrtt3[]=$arrtt3c; $arrtt3c=array(); $cnt3=0;	} }
     $ck3=count($arrtt3);
   //-----------------------------------222---------------------------------
       $countk2=count($arrtt2b);	$ck22=count($arrtt2b); $cnt2=0;
     $kt2=4;     //設定：画像枚数。（最低１枚）
     if($kt2==0){  echo '只今画像枚数の設定値は０ですが、1以上に訂正して下さい。';	$kt2=1;		}
    $hk2=760/$kt2;   //設定：画像高さ。）
     $spli2=$countk2-$countk2%$kt2;
     array_splice($arrtt2b, $spli2);
     $duty2=94/$kt2;
     foreach($arrtt2b as $tt2b){ $cnt2 +=1; $arrtt2c[]=$tt2b;  if($cnt2==$kt2){  $arrtt2[]=$arrtt2c; $arrtt2c=array(); $cnt2=0;	} }
     $ck2=count($arrtt2);
   //----------------------------------111---------------------------
       $countk1=count($arrtt1b);	$ck12=count($arrtt1b); $cnt1=0;
     $kt1=1;     //設定：画像枚数。（最低１枚）
     if($kt1==0){  echo '只今画像枚数の設定値は０ですが、1以上に訂正して下さい。';	$kt4=1;		}
     $hk1=900/$kt1;   //設定：画像高さ。）
     $spli1=$countk1-$countk1%$kt1;
     array_splice($arrtt1b, $spli1);
     $duty1=100/$kt1;
     foreach($arrtt1b as $tt1b){ $cnt1 +=1; $arrtt1c[]=$tt1b;  if($cnt1==$kt1){  $arrtt1[]=$arrtt1c; $arrtt1c=array(); $cnt1=0;	} }
     $ck1=count($arrtt1);

?>
<table width="100%"align="center" border="0"><tr><td align="center">
<div class="za12"><div class="za11">
<span id="boxzz12"class="btn12"><img src="{{ asset('images/btnleft.jpg') }}" style="border-radius:25px;width:30px;height:30px;"></span>
<span id="boxzz1" class="btn11"><img src="{{ asset('images/btnright.jpg') }}" style="border-radius:25px;width:30px;height:30px;"></span>
<?php

 //echo '<div class="za12"><div class="za11"><span id="boxzz12"class="btn12">◀</span><span id="boxzz1" class="btn11">▶</span>';
 //----------------------------------------------
 if($kt1>1){
 for($v1=0;$v1<count($arrtt1);$v1++){
 echo '<span class="box1'.$v1.'" style="width:100%">';
 for($a1=0;  $a1<$kt1;  $a1++){
   echo '<img src="'.$dpath1.''.$arrtt1[$v1][$a1].'"style="margin:1px;width:'.$duty1.'%;height:'.$hk1.'px">';	}
 echo '</span>';
 }}else{

 for($v11=0;$v11<count($arrtt1b);$v11++){
 echo '<img src="'.$dpath1.'/'.$arrtt1b[$v11].'" class="box1'.$v11.'"	style="width:100%;height:200px" >';  }
 }
  echo '</div></div></td></tr></table>';

 ?>


<!-- ~~~~~~~~~~~~~~~~~~~~~~~menu~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
<?php

$ser01='';
if(isset($_POST['ser01'])){ 	$ser01=$_POST['ser01'];	}

 $arrzz1=array();$arrzz2=array();$data5=array();$cntz2=0;
 $arrzz5=array();$arrzz6=array();$data7=array();$cnt12=0;
 //-------------------------------------------------------
  foreach($items11 as $mkk11){   foreach($mkk11 as $mkk12){
    $arrzz5[]=$mkk12;      $cnt12+=1;
  if($cnt12==11){$data7[]=$arrzz5;  $arrzz5=array(); $cnt12=0;    }  } }
 //----------------------------------------------------------------
//-------------------------------------------------------
 foreach($items as $mkk){   foreach($mkk as $mkk2){
   $arrzz1[]=$mkk2;$cntz2+=1;
 if($cntz2==5){$data5[]=$arrzz1;  $arrzz1=array(); $cntz2=0;    }  } }
//----------------------------------------------------------------
 for($k=0;$k<count($data5);$k++){
   $unique[]=$data5[$k][0];  $unique=array_unique($unique);
   $unique1[]=$data5[$k][1]; $unique1=array_unique($unique1);
   $unique2[]=$data5[$k][2]; $unique2=array_unique($unique2);
}
?>
<table class="he3000" width="100%" border="0"bgcolor="#ffffff"> <tr><td style="vertical-align:top;">
<?php

$arrsub1=array();$arrsub2=array(); $kkt=0; $arrsub5=array();$arrsub6=array();
$arrz1=array(); $arrz2=array(); $arrz3=array(); $arrz4=array(); $arrz5=array();
$arrg1=array(); $arrg2=array(); $arrg3=array(); $arrg4=array(); $arrg5=array();
 for($k3=0;$k3<count($data7);$k3++){
$arrz1[]=$data7[$k3][0];  $arrg1=array_count_values($arrz1);
$arrz2[]=$data7[$k3][1];  $arrg2=array_count_values($arrz2);
$arrz3[]=$data7[$k3][2];  $arrg3=array_count_values($arrz3);
$arrz4[]=$data7[$k3][3];  $arrg4=array_count_values($arrz4);
$arrz5[]=$data7[$k3][4];  $arrg5=array_count_values($arrz5);
}

echo '<table width="100%"  border="0"class="ft16"><tr>
<td class="wt160"align="center"style="color:#800080;font-family:arial black;vertical-align:top"></br>MENU';
echo '<nav id="myside" class="nmenu">';
echo '<ul>';
//----------------------------------------------------------------------------------
$cnt5=0; $cntt=5; $cnt9=0; $kcnt=0;$cnt7=0;	$cnt8=0; $knt1=0;$knt2=0;
foreach($unique as $datakk){   	$knt1 +=5;
echo '<li>';
echo '<a href="{{ url((manager/home)) }}" class="he22"style="padding-top:5px;margin:2px;border-radius:3px;background-color:#483d86;color:#ffffff">'
.'<span class="ft11">'.$datakk.'</span>';
if(isset($arrg1[$datakk])){echo '('.$arrg1[$datakk].')';}
echo '</a><ul>';
echo '<li>';
//-------------------------------------------------------------
echo '<table width="80%" class="he400"align="left" border="0"   >';
echo '<tr><td class="ft11"style="vertical-align:top; padding-left:10px; margin:0px; background-color:#8da" >';
echo '<p align="center" class="ft20"style="color:#000; font-family:MS PGothic;"><strong >'.$datakk.'</strong></p>';

for($ia = 0 ; $ia < count($data5) ; $ia++){
      if($datakk==$data5[$ia][0]){	 $arrsub1[]=$data5[$ia][1];  }}
$unisub = array_unique($arrsub1);
foreach($unisub as $sub1){  $cnt8 =0;   $cnt7=0;
echo '<table width="100%" align="center" border="0"  >';
echo '<tr><td class="wt180" align="left" style="vertical-align:top"  >';
//-------------------------------------------------------------------
echo '<a href="/manager/home3?submenu2='.$sub1.'" class="he22"style="padding-top:5px;margin:2px;border-radius:3px;background-color:#ffffcc" >';
echo ''.$sub1.'';
if(isset($arrg2[$sub1])){echo '('.$arrg2[$sub1].')';}
//-------------------------------------------------------------
echo '</a></td><td class="ft11">';
for($ib= 0 ; $ib < count($data5) ; $ib++){  //55
if($datakk==$data5[$ib][0]){  //56
    if($sub1==$data5[$ib][1]){   $arrsub5[]=$data5[$ib][2];
	$cnt8 +=1;	$arrsub1=array();
    } 	//53
  }   //56
}  //55
$kkt=0;
//~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
$unique5 = array_unique($arrsub5);
foreach($unique5 as $sub5){
echo '<a class="cak" href="home3?submenu3='.$sub5.'" style="padding-top:5px;margin:2px;border-radius:3px;background-color:#ffffff">&nbsp;'
.$sub5.'';
if(isset($arrg3[$sub5])){echo '('.$arrg3[$sub5].')&nbsp;&nbsp;';}else{  echo '&nbsp;&nbsp;';      }
if($knt2==10){	}
}
$arrsub5=array();$knt2=0;
echo '</a></td></tr></table>';
}  //52
	$cnt9 =0;
	echo '</br></td></tr></table>';
//----------------------------------
echo '</li>';
echo '</ul>';
echo '</li>';
}  //21
echo '</ul>';
echo '</nav>';
//--------------------end--------------------------------------

?>
</td><td align="center"width="80%"style="vertical-align:top;">
<!-- ::::::::::::::::::::::::::::::::::::::::::::::::::::::: -->



 <table align="center"width="98%"border="0" height="30"> <tr>
   <td style="font-size:13px;vertical-align:top"><strong>おすすめ商品</strong> </td></tr></table>
   <div class="za22"><div class="za21">
   <span id="boxzz22"class="btn22"><img src="{{ asset('images/btnleft.jpg') }}" style="border-radius:25px;width:30px;height:30px;"></span>
   <span id="boxzz2" class="btn21"><img src="{{ asset('images/btnright.jpg') }}" style="border-radius:25px;width:30px;height:30px;"></span>
 <?php
 echo '';  //--------------------------------------------------------
 if($kt2>1){
 for($v2=0;$v2<count($arrtt2);$v2++){
 echo '<span class="box2'.$v2.'" style="width:100%">';
 for($a2=0;  $a2<$kt2;  $a2++){ if($a2==0){$mz2=0; }else{$mz2=10;}
   echo '<img src="'.$dpath2.'/'.$arrtt2[$v2][$a2].'"style="border-radius:5px;margin-left:'.$mz2.'px;width:'.$duty2.'%;height:'.$hk2.'px">';	}
 echo '</span>';
 }}else{
 for($v21=0;$v21<count($arrtt2b);$v21++){
 echo '<img src="'.$dpath2.'/'.$arrtt2b[$v21].'" class="box2'.$v21.'"	style="width:100%;height:300px" >';  }
 }
  echo '</div></div>';

 ?>
</td></tr></table>



<table align="center"width="98%" height="20"> <tr>
  <td style="font-size:13px;vertical-align:top"><strong>人気商品ランキング</strong> </td></tr></table>
  <div class="za32"><div class="za31">
  <span id="boxzz32"class="btn32"><img src="{{ asset('images/btnleft.jpg') }}" style="border-radius:25px;width:30px;height:30px;"></span>
  <span id="boxzz3" class="btn31"><img src="{{ asset('images/btnright.jpg') }}" style="border-radius:25px;width:30px;height:30px;"></span>

<?php
//echo '<div class="za32"><div class="za31"><span id="boxzz32"class="btn32">◀</span><span id="boxzz3" class="btn31">▶</span>';  //--------------------------------------------------------

if($kt3>1){
for($v3=0;$v3<count($arrtt3);$v3++){
echo '<span class="box3'.$v3.'" style="width:100%">';
for($a3=0;  $a3<$kt3;  $a3++){ if($a3==0){$mz3=1; }else{$mz3=10;}
  echo '<img src="'.$dpath3.'/'.$arrtt3[$v3][$a3].'"style="border-radius:5px;margin-left:'.$mz3.'px;width:'.$duty3.'%;height:'.$hk3.'px">';	}
echo '</span>';
}}else{
for($v31=0;$v31<count($arrtt3b);$v31++){
echo '<img src="'.$dpath3.'/'.$arrtt3b[$v31].'" class="box3'.$v31.'"	style="width:100%;height:300px" >';  }
}
echo '</div></div>';

?>
<table align="center"width="98%" height="30"> <tr>
  <td style="font-size:13px;vertical-align:top"><strong>注目商品</strong> </td></tr></table>
  <div class="za42"><div class="za41">
  <span id="boxzz42"class="btn42"><img src="{{ asset('images/btnleft.jpg') }}" style="border-radius:25px;width:30px;height:30px;"></span>
  <span id="boxzz4" class="btn41"><img src="{{ asset('images/btnright.jpg') }}" style="border-radius:25px;width:30px;height:30px;"></span>
<?php
//echo ' <div class="za42"><div class="za41"><span id="boxzz42"class="btn42">◀</span><span id="boxzz4" class="btn41">▶</span>';
//-------------------------
if($kt4>1){
for($v4=0;$v4<count($arrtt4);$v4++){
echo '<span class="box4'.$v4.'" style="width:100%">';
for($a4=0;  $a4<$kt4;  $a4++){ if($a4==0){$mz4=5; }else{$mz4=10;}
  echo '<img src="'.$dpath4.'/'.$arrtt4[$v4][$a4].'"style="border-radius:5px;margin-left:'.$mz4.'px;width:'.$duty4.'%;height:'.$hk4.'px">';	}
echo '</span>';
}}else{
for($v41=0;$v41<count($arrtt4b);$v41++){
echo '<img src="'.$dpath4.'/'.$arrtt4b[$v41].'" class="box4'.$v41.'"	style="width:100%;height:300px" >';  }
}
  echo '</div></div>';

?>
<table align="center"width="98%" height="30"> <tr>
  <td style="font-size:13px;vertical-align:top"><strong>最近閲覧商品</strong> </td></tr></table>
  <div class="za52"><div class="za51">
  <span id="boxzz52"class="btn52"><img src="{{ asset('images/btnleft.jpg') }}" style="border-radius:25px;width:30px;height:30px;"></span>
  <span id="boxzz5" class="btn51"><img src="{{ asset('images/btnright.jpg') }}" style="border-radius:25px;width:30px;height:30px;"></span>
<?php
 //echo '<div class="za52"><div class="za51"><span id="boxzz52"class="btn52">◀</span><span id="boxzz5" class="btn51">▶</span>';
//---------------------------------------------------------------------------------------------------------

if($kt5>1){
for($v5=0;$v5<count($arrtt5);$v5++){
echo '<span class="box5'.$v5.'" style="width:100%">';
for($a5=0;  $a5<$kt5;  $a5++){ if($a5==0){$mz5=1; }else{$mz5=10;}
echo '<img src="'.$dpath5.'/'.$arrtt5[$v5][$a5].'"style="border-radius:5px;margin-left:'.$mz5.'px;width:'.$duty5.'%;height:'.$hk5.'px">';	}

echo '</span>';
}}else{
for($v51=0;$v51<count($arrtt5b);$v51++){
echo '<img src="'.$dpath2.'/'.$arrtt5b[$v51].'" class="box5'.$v51.'"	style="width:100%;height:300px" >';  }
}
echo '</div></div>';

?>






<!-- ::::::::::::::::::::::::::::::::::::::::::::::::::::::: -->
</td></tr></table>
<!-- ************************************************************** -->
<table align="center"width="100%"border="0" class="he150"bgcolor="#000000"><tr>
  <td align="center"style="vertical-align:top" >

<table align="center"width="90%"border="0" ><tr>
  <td align="" width="10%"style="color:#fff;vertical-align:top"class="ft11">
<td align="" width="20%"style="color:#fff;vertical-align:top"class="ft11">
  Applyex</br>
  特別商法について</br>

</td>
<td align="" width="20%"style="color:#fff;vertical-align:top"class="ft11">

 購入について</br>
 会員登録</br>
 購入方法</br>
 ログイン</br>
 ログアウト</br>
</td>
<td align="" width="20%"style="color:#fff;vertical-align:top"class="ft11">
 出店に関する</br>
 出店方法</br>
 出店手続き</br>
 <a href="{{ url('members/signin') }}"class="alink"> 店舗ログイン </a>

</td>
<td align="" width="20%"style="color:#fff;vertical-align:top"class="ft11">
 個人情報保護</br>
 <a href="{{ url('manastore/sitemana1') }}"class="alink"> サイト管理 </a>
</td>
</tr></table>
</td></tr></table>
<!-- ************************************************************** -->




<!-- ************************************************************** -->
<script>
var search=''; var key='';
function funsearch(){
search = $("input[name=search]").val();
if(search!=''){
search = search.replace(/　/g, " ");
search=search.split(' ');
search=search.filter(Boolean);
search=search.join('|');
window.location.href = "{{URL::to('manager/home3')}}?sear="+search+"";
}}
//---------------------------------------------

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
<script src="{{ asset('/js/kirikae7.js') }}"></script>






</body>
</html>
