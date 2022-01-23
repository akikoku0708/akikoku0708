
<?php
  $loginname='';
  $loginname=Session('custsessname');
  $custcode=Session('custsesscode');
//  echo $custcode;
//if($logink==''){
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

<script>
/*
function kmmkk(){
for ( var jd = 0; jd < 500; jd++) {	 	$('#btn' + jd).click((function(jd) {
return function() {
var dname = $('#bbtt'+ jd).val();
 window.location.href = 'manage_main2.php?submenu='+dname+'';
}
   })(jd));
}}
*/
jQuery(function(){		nmenu.init({	menuid: 'myside'	})
});
//----------------------------------------------------------
/*
function kakunin(){
  obj = document.test.linkselect;
  index = obj.selectedIndex;
  if (index != 0){
    href = obj.options[index].value;
 //-------------------------------------------------------
  location.href = "manage_main2.php?submenu="+href+"";
//----------------------------------------------
  }}
  */
//-------------------------------------------------------------------------------
</script>
<style>
.cak{ float: left;}
</style>
<body>
@extends('layouts.add')


<?php
$idnumber='';
$userid='';
$loginid='';
$namek='';


$ser01='';$subm='';
$submenu2='';$submenu3='';
$item='';$cata='';$subm1='';$category8='';$itemmk='';$category2s='';$product8='';
$menubar1_1c= '';	 $menudb='';
$amenu4='';$prkcode='';$category2='';$class8='';$item8='';$codeitem='';
$idnumber=$namek;
if(isset($_GET['amenu4'])){	$amenu4=$_GET['amenu4'];		}
if(isset($_GET['codeitem'])){	$codeitem=$_GET['codeitem'];		}
if(isset($_GET['submenu'])){	$category2=$_GET['submenu'];		}
if(isset($_GET['submenu2'])){	$class8=$_GET['submenu2'];		}
if(isset($_GET['submenu3'])){	$item8=$_GET['submenu3'];		}
if(isset($_GET['prkcode'])){	$prkcode=$_GET['prkcode'];			}

$arr2=array();
if(isset($arra)){
foreach($arra as $arx){ $arr2[]=$arx; //echo $arx;
}}
 $arrtt1=array();$arrtt2=array();$data5=array();$cnt2=0;
$arrtt5=array();$arrtt6=array();$data7=array();$cnt32=0;
$arrtt8=array();$arrtt8b=array();$data8=array();$cnt82=0;
//-------------------------------------------------------

$arrz1=array(); $arrz2=array(); $arrz3=array(); $arrz4=array(); $arrz5=array();
$arrg1=array(); $arrg2=array(); $arrg3=array(); $arrg4=array(); $arrg5=array();
if(isset($items51)){
 foreach($items51 as $mkk8){   foreach($mkk8 as $mkk82){
   $arrtt8[]=$mkk82;$cnt82+=1;
 if($cnt82==14){$data7[]=$arrtt8;  $arrtt8=array(); $cnt82=0;    }  } }
}
for($k7=0;$k7<count($data7);$k7++){
$arrz1[]=$data7[$k7][0];  $arrg1=array_count_values($arrz1);
$arrz2[]=$data7[$k7][1];  $arrg2=array_count_values($arrz2);
$arrz3[]=$data7[$k7][2];  $arrg3=array_count_values($arrz3);
$arrz4[]=$data7[$k7][3];  $arrg4=array_count_values($arrz4);
$arrz5[]=$data7[$k7][4];  $arrg5=array_count_values($arrz5);
  if($data7[$k7][13]==$codeitem){  $item8=$data7[$k7][2];    }
}
 ?>
<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
<style>
/*
  .wt300{width:300px;} .wt180{width:180px;} .wt160{width:160px;}  .wt80{width:80px;}
  .wt600{width:600px;} .wt20{width:20px;}
  .he1500{height:1500px;}  .he30{height:30px;}  .he24{height:24px;}  .he60{height:60px;}
   .he80{height:80px;} .he22{height:22px;}   .he400{height:400px;}  .he600{height:600px;}
  .he420{height:420px;} .he150{height:150px;}

  .ft11{font-size:11px;}  .ft13{font-size:13px;}  .ft16{font-size:16px;}  .ft20{font-size:20px;} .ft24{font-size:24px;}

  .btncss25{width:80px;height:24px;font-size:11px; color:#ffffff;border-radius:3px;background-color:#483d86;margin-right:4px;border:none;      }
  .btncss25:hover {    background-color: #f5deb3;  color:#483d86;  }
  .btncss24{width:80px;height:30px;font-size:11px;color:#fff;  border-radius:3px;background-color:#8b4513;margin-right:4px;border:none;      }
  .btncss24:hover {    background-color: #66ff99; color:#333;  }
  .btncss20{width:60px;height:20px;font-size:11px; color:#ffffff;border-radius:3px;background-color:#483d86;margin-right:4px;border:none;      }
  .btncss20:hover {    background-color: #006400;  color:#ffffff;  }

  .imgcss20{width:40px;  height:40px;border-radius: 3px;    }
  .imgcss21{width:60%;  border-radius:5px; vertical-align:top;        }
  .imgcss24{width:150px;  height:150px;border-radius:5px; vertical-align:top;        }
  .acss5{ text-decoration:none;color:#ffffff;font-size:20px;font-weight:900;font-family:arial black;}
  .alink{text-decoration:none;}
  .spancss21{ background-color:#cd853f;padding:2px 5px 2px 5px;vertical-align:top;border-radius:10px;       }
  .inputcss22{width:70%;border-radius:5px;color:#333;border:none;background-color:#fff; height:30px;     }
*/

</style>

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
<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->

  @error('token') <div class="alert alert-danger">{{ $message }}</div> @enderror

<?php

//-------------------------------------------------------
if(isset($items21)){
 foreach($items21 as $mkk){   foreach($mkk as $mkk2){
   $arrtt1[]=$mkk2;$cnt2+=1;
 if($cnt2==5){$data5[]=$arrtt1;  $arrtt1=array(); $cnt2=0;    }  } }
}
//----------------------------------------------------------------
$arrclass1=array();  $arrclass2=array(); //$arrclass3=array();
$arritem1=array();  $arritem2=array();
$arritem=array();
for($k=0;$k<count($data5);$k++){
  $unique[]=$data5[$k][0];  $unique=array_unique($unique);


}
?>

<!-- ************************************************************** -->

<?php

 $arrcatecory=array('電子機器・家電','ファッション','住まい・暮らし','グルメ','美容・健康','車・スポッツ');

if(isset($arr2)){$category2='電子機器・家電'; }else{  $category2='住まい・暮らし';     }

if(isset($_POST['ser01'])){	$ser01=$_POST['ser01'];	$category2=$_POST['subm'];	}
if(isset($_POST['subm'])){	$category2=$_POST['subm'];	}

if($category2!=''){	$category8=$category2;		}

 $strm= preg_replace("/( |　)/", "|", $ser01 );

?>

<form>
  <table width="100%" align="center" bgcolor="#483d86"border="0"><tr><td width="10%">
</td><td width="65%"align="right">
<input type="text" name="search"id="search"class="inputcss22"  placeholder="<?php echo $arr2[0]; ?>" required="">
<input type="hidden" name="keyw" value="keyword1111"required="">
</td><td width="5%"><button class="btncss20">検索</button>
</td><td width="20%"></td></tr></table>
</form>
<?php
echo '<table width="100%"  align="center" border="0"  class="he40" >';
echo '<tr><td width="20%"  class="ft11">';
	//----------------------------------------------------------------
for($j=0;$j<count($arrcatecory);$j++){
echo '<a class="cak" id="c'.$j.'"href="home2?submenu='.$arrcatecory[$j].'"  style="margin:2px;padding:6px 10px 6px 10px; text-decoration:none; background-color:#ffdddd">&nbsp;'.$arrcatecory[$j].'&nbsp;&nbsp;';
if(isset($arrg1[$arrcatecory[$j]])){echo '('.$arrg1[$arrcatecory[$j]].')';}
}
//-----------------------------------------------------------------
echo '</a></td></tr></table>';


?>

<?php
$knt=0;	$item8b='';$class8b='';
$arrcate1=array();	$arrclass1=array();	$arrclass2=array();	$arritem1=array();
for($k2=0;$k2<count($data5);$k2++){
$menmen=$data5[$k2][0].$data5[$k2][1].$data5[$k2][2].$data5[$k2][3].$data5[$k2][4];
if($ser01!=''){		if( preg_match( '/'.$strm.'/', $menmen ) ) {
$knt +=1; $arrcate1[]=$data5[$k2][0];	$category8=$data5[$k2][0];$class8=$data5[$k2][1]; $item8=$data5[$k2][2];}}

if($class8==$data5[$k2][1]){	$category8=$data5[$k2][0];	$class8=$data5[$k2][1];	$knt +=1;	}
if($item8==$data5[$k2][2]){		$category8=$data5[$k2][0];	$class8=$data5[$k2][1];	$item8b=$data5[$k2][2];	$knt +=1;}
if($prkcode!=''){$knt +=1;}
}

	if(isset($arrcate1[0])){	$category8=	$arrcate1[0];	}

?>

<?php

echo '<table width="100%" align="center"border="3" class="he600"cellspacing="0" bordercolor="cccccc">';//---top---1-1
echo '<tr ><td width="20%"align="center" style="vertical-align:top">';

//-----------------------------------------------------------------------------------
echo '<table width="100%" class="ft11"  bgcolor="#66CC99"align="center"border="1" cellspacing="0" bordercolor="#99ffff">';

for($d2=0;$d2<count($data5);$d2++){
  if($category8==$data5[$d2][0]){	$arrclass1[]=$data5[$d2][1];


}}
$arrclass1 = array_unique($arrclass1);
//***********************************************
$arrlis1=array();$arrlis2=array();$arrlis3=array();
$arrmm1=array();$arrmm2=array();$arrmm3=array();$arrmm4=array();$arrmm5=array();$arrmm5b=array();
$arree1=array();$arree2=array();$arree3=array();$arree4=array();$arree5=array();
$arrbb1=array();
//if(isset($data7)){
for($t6=0;$t6<count($data7);$t6++){
  $category9=$data7[$t6][0];
  $classm9=$data7[$t6][1];
  $item9=$data7[$t6][2];
  $product9=$data7[$t6][3];
  $itemcode9=$data7[$t6][4];
  $storeid9=$data7[$t6][5];
  $storename9=$data7[$t6][6];
  $numitem9=$data7[$t6][7];
  $feather9=$data7[$t6][8];
  $price9=$data7[$t6][9];
  $userid9=$data7[$t6][10];
  $codeitem9=$data7[$t6][13]; //echo   $codeitem9;
  $meme=$category9.$classm9.$item9.$product9.$itemcode9.$storeid9.$storename9.$numitem9.$feather9.$price9.$userid9.$codeitem9;
  $arrlis1[]=array($category9,$classm9,$item9,$product9,$itemcode9,$storeid9,$storename9,$numitem9,$feather9,$price9,$userid9,$codeitem9);
  $arrmm5b[]=$itemcode9;
}

//---------------------------------------------------------------------------------------

for($k2b=0;$k2b<count($arrmm5b);$k2b++){//echo $arrmm5b[$k2b];

for($k2=0;$k2<count($data5);$k2++){

if($arrmm5b[$k2b]==$data5[$k2][4]){//echo $data5[$k2][4];

$arrlis2[]=array($data5[$k2][0],$data5[$k2][1],$data5[$k2][2],$data5[$k2][3],$data5[$k2][4]);

$arrmm1[]=$data5[$k2][0]; $arrmm2[]=$data5[$k2][1]; $arrmm3[]=$data5[$k2][2]; $arrmm4[]=$data5[$k2][3]; $arrmm5[]=$data5[$k2][4];


}}}
//----------------------------------------------------------------------------

for($t2=0;$t2<count($arrlis2);$t2++){
for($t1=0;$t1<count($arrlis1);$t1++){
if($arrlis1[$t1][4]==$arrlis2[$t2][4]){
$arrlis3[]=array($arrlis2[$t2][0],$arrlis2[$t2][1],$arrlis2[$t2][2],$arrlis2[$t2][3],$arrlis2[$t2][4],
$arrlis1[$t1][5],$arrlis1[$t1][6],$arrlis1[$t1][7],$arrlis1[$t1][8],$arrlis1[$t1][9],$arrlis1[$t1][10]);
}}}

//**********************************
foreach($arrclass1 as $kc){
if($class8==$kc){	$mcc='m111';	}else{	$mcc='z222';		}
echo '<tr class="'.$mcc.'"><td class="he24"style=""><a href="home2?submenu2='.$kc.'"style="text-decoration:none;" class="mlink">
&nbsp;&nbsp; '.$kc.'';
if(isset($arrg2[$kc])){echo '('.$arrg2[$kc].')';}
echo '</a></td></tr>';
//--------------------------------------------------------------
if($class8==$kc){
for($u3=0;$u3<count($data5);$u3++){
if($data5[$u3][1]==$class8){	$arritem1[]=$data5[$u3][2];	$data5b[]=array($data5[$u3][2],$data5[$u3][3]);	}}
$arritem1 = array_unique($arritem1);


foreach($arritem1 as $kitem){
echo '<tr bgcolor="#FFFFFF"class="he24"><td class="ft11"align="left"><a href="home2?submenu3='.$kitem.'" class="mlink"style="text-decoration:none;">
'.$kitem.'&nbsp;';
if(isset($arrg3[$kitem])){echo '('.$arrg3[$kitem].')';}
echo '</a></td></tr>';

}}}

echo '</table>';
//----------------------------------------------------------------


echo '</td><td width="60%"style="vertical-align:top" >';//---top--------1-2
$classt='';$itemcodet='';$productt='';
$arrdis=array();
$arrvv5=array();
if($arr2[0]==null){
//=================================================================
if($class8!=''){
echo '<span class="ft11"><strong>&nbsp;'.$class8.'</strong></span></br>';
echo '<hr color="#99ffff">';
}
//-------------------------------------------------------------------------
if($item8!=''){
echo '<span class="ft11"><strong>◆&nbsp;'.$item8.'</strong></span></br>';
//------------------------------------------------------------
for($u5=0;$u5<count($data5);$u5++){
if($data5[$u5][2]==$item8){
  ?>

<span class="ft11"><a class="cak"href="{{ url('manager/home2') }}?submenu3=<?php echo $data5[$u5][2].'&productt='.$data5[$u5][3].'&prkcode='.$data5[$u5][4]; ?>" style="border-radius:3px;padding:3px;margin:3px;text-decoration:none;">
<?php echo $data5[$u5][3];
if(isset($arrg4[$data5[$u5][3]])){echo '('.$arrg4[$data5[$u5][3]].')';}
?></a></span>
<?php
}}}

//----------------------------------------------------------------------------------------------------------

if($knt>0){}else{
echo '<span class="ft11"><strong>◆&nbsp;'.$category8.'</strong></span>';
}
//----------------------------------------------

//-------------------------------------------------------------------------------------------------
for($k3=0;$k3<count($arrlis3);$k3++){
if($prkcode==''){
//----------------------------------------------------------------------------------------------------------------------
if($item8==$arrlis3[$k3][2]){

$arrbb1[]=array($arrlis3[$k3][0],$arrlis3[$k3][1],$arrlis3[$k3][2],$arrlis3[$k3][3],$arrlis3[$k3][4],
				$arrlis3[$k3][5],$arrlis3[$k3][6],$arrlis3[$k3][7],$arrlis3[$k3][8],$arrlis3[$k3][9],$arrlis3[$k3][10]);
}else{
//--------------------------------------------------------------------------------------------------------------------------------------
	if($class8==$arrlis3[$k3][1]){

$arrbb1[]=array($arrlis3[$k3][0],$arrlis3[$k3][1],$arrlis3[$k3][2],$arrlis3[$k3][3],$arrlis3[$k3][4],
				$arrlis3[$k3][5],$arrlis3[$k3][6],$arrlis3[$k3][7],$arrlis3[$k3][8],$arrlis3[$k3][9],$arrlis3[$k3][10]);
}}
//---------------------------------------------------------------------------------------------------
}

if($prkcode==$arrlis3[$k3][4]){
//--------------------------------------------------------------------------------------------------------------------------------------
$arrbb1[]=array($arrlis3[$k3][0],$arrlis3[$k3][1],$arrlis3[$k3][2],$arrlis3[$k3][3],$arrlis3[$k3][4],
				$arrlis3[$k3][5],$arrlis3[$k3][6],$arrlis3[$k3][7],$arrlis3[$k3][8],$arrlis3[$k3][9],$arrlis3[$k3][10]);//-------------------------------------------------------------------------------------------------------------------------------------
}
if($knt>0){}else{
if($category8==$arrlis3[$k3][0]){
//--------------------------------------------------------------------------------------------------------------------------------------
$arrbb1[]=array($arrlis3[$k3][0],$arrlis3[$k3][1],$arrlis3[$k3][2],$arrlis3[$k3][3],$arrlis3[$k3][4],
				$arrlis3[$k3][5],$arrlis3[$k3][6],$arrlis3[$k3][7],$arrlis3[$k3][8],$arrlis3[$k3][9],$arrlis3[$k3][10]);//-------------------------------------------------------------------------------------------------------------------------------------
}}}

//======================================================================
}else{

for($v1=0;$v1<count($data7);$v1++){
$meme=$data7[$v1][0].$data7[$v1][1].$data7[$v1][2].$data7[$v1][3].$data7[$v1][4].
$data7[$v1][5].$data7[$v1][6].$data7[$v1][7].$data7[$v1][8].$data7[$v1][9];

if(preg_match('/'.$arr2[0].'/',$meme)){//echo $data7[$v1][13];
$arrvv5[]=array($data7[$v1][0],$data7[$v1][1],$data7[$v1][2],$data7[$v1][3],
$data7[$v1][4],$data7[$v1][5],$data7[$v1][6],$data7[$v1][7],$data7[$v1][8],
$data7[$v1][9],$data7[$v1][10],$data7[$v1][11],$data7[$v1][13]);
}}}
//~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
$arrdis=array();
//-------------------------------------------------------
$arrtt8=array();$arrtt8b=array();$data8=array();$cntt8=0;
if(isset($dbitem)){
foreach($dbitem as $mtt8){   foreach($mtt8 as $mtt82){
  $arrtt8[]=$mtt82;$cntt8+=1;
if($cntt8==23){$data8[]=$arrtt8;  $arrtt8=array(); $cntt8=0;    }  } }
}
$productt='';
if(isset($_GET['productt'])){$productt=$_GET['productt'];}

if(isset($_GET['prkcode'])){echo '<hr width="98%"></br>';
for($t1=0;$t1<count($data8);$t1++){
    if($data8[$t1][4]==$_GET['prkcode']){
$arrdis[]=array($data8[$t1][3],$data8[$t1][2],$data8[$t1][7],$data8[$t1][6],$data8[$t1][12],
$data8[$t1][19],$data8[$t1][20],$data8[$t1][21],$data8[$t1][5],$data8[$t1][22]);
}}}

//-------------------------submenu3------------------------------
if(isset($_GET['prkcode'])){}else{
  if(isset($item8)){
//--------------------------------------------------------------------
for($t3=0;$t3<count($data8);$t3++){
  if($data8[$t3][2]==$item8){  /////////////////
$arrdis[]=array($data8[$t3][3],$data8[$t3][2],$data8[$t3][7],$data8[$t3][6],$data8[$t3][12],
$data8[$t3][19],$data8[$t3][20],$data8[$t3][21],$data8[$t3][5],$data8[$t3][22]);
}}}}
//----------------------submenu----------------------
  if(isset($_GET['submenu'])){
    //---------------------------------------------------------------------
for($z1=0;$z1<count($data8);$z1++){
  if($data8[$z1][0]==$_GET['submenu']){
$arrdis[]=array($data8[$z1][3],$data8[$z1][2],$data8[$z1][7],$data8[$z1][6],$data8[$z1][12],
$data8[$z1][19],$data8[$z1][20],$data8[$z1][21],$data8[$z1][5],$data8[$z1][22]);
}}}

//-------------------------submenu2-------------------
  if(isset($_GET['submenu2'])){  // echo '<hr width="98%"></br>';
    //---------------------------------------------------------------------
for($z2=0;$z2<count($data8);$z2++){
if($data8[$z2][1]==$_GET['submenu2']){
$arrdis[]=array($data8[$z2][3],$data8[$z2][2],$data8[$z2][7],$data8[$z2][6],$data8[$z2][12],
$data8[$z2][19],$data8[$z2][20],$data8[$z2][21],$data8[$z2][5],$data8[$z2][22]);
  }}}

//=========================================商品表示===============================================================================
$ctt=0;$mk=0; $pict=array();
 echo '<table align="center"width="98%"cellspacing="0"bordercolor="#9cc"border="0"class="ft11">';
//--------------------------------------------------------------------
for($z7=0;$z7<count($arrdis);$z7++){$ctt +=1; //echo $arrdis[$z7][9];
if($ctt%4==1){echo '<tr><td width="25%" style="vertical-align:top">';
}else{ echo '<td width="25%" style="vertical-align:top">';   }
?>
<a href="{{ url('/manager/product') }}?codeitem=<?php echo $arrdis[$z7][9]; ?>" style="text-decoration:none;">
  <?php
echo '<table bgcolor="#9cc">';
echo '<tr><td>';
if(isset($arrdis[$z7][5])){
  $pict=explode('|',$arrdis[$z7][5]);
  echo '';
echo '<img src="../storage/upload/'.$arrdis[$z7][8].'/'.$pict[0].'" class="imgcss24">';
}
echo '</td></tr>';
echo '<tr><td class="ft11">品名:'.$arrdis[$z7][0].'</td></tr>
<tr><td class="ft11">店舗:'.$arrdis[$z7][3].'</td></tr>
<tr><td class="ft11"style="font-weight:900;">単価:　'.$arrdis[$z7][4].'円</td></tr>';

echo '</table></a>';
echo '</td>';
if($ctt%4==0){echo '</td></tr>';    }else{ echo '</td>';   }
$mk=4-count($arrdis)%4;
}
for($v=0;$v<$mk;$v++){ echo '<td width="25%"></td>';     }
echo '</tr>';
echo '</table>';

//~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
//=========================================商品表示=Serarch==============================================================================
$ctt5=0;$mk5=0; $pict5=array(); $countk=count($arrvv5);
if($arr2[0]!=''){
if($countk>0){
echo '<p class="ft13">検索結果：'.$countk.'　件を見つかりました。</p>';
}else{$countk=0;
echo '<p class="ft13">検索結果：'.$countk.'　件を見つかりました。</p>';
}}

 echo '<table align="center"width="98%"cellspacing="0"bordercolor="#9cc"border="0"class="ft11">';
//--------------------------------------------------------------------
for($v7=0;$v7<count($arrvv5);$v7++){$ctt5 +=1;
if($ctt5%4==1){echo '<tr><td width="25%" style="vertical-align:top">';
}else{ echo '<td width="25%" style="vertical-align:top">';   }
?>
<a href="{{ url('/manager/product') }}?codeitem=<?php echo $arrvv5[$v7][12]; ?>" style="color:#333333;text-decoration:none;">
  <?php
echo '<table border="0"bgcolor="#9cc">';
echo '<tr><td>';
if(isset($arrvv5[$v7][11])){
  $pict5=explode('|',$arrvv5[$v7][11]);

echo '<img src="../storage/upload/'.$arrvv5[$v7][5].'/'.$pict5[0].'" class="imgcss24">';
}
echo '</td></tr>';
echo '<tr><td class="ft11">品名:'.$arrvv5[$v7][3].'</td></tr>
<tr><td class="ft11">店舗:'.$arrvv5[$v7][6].'</td></tr>
<tr><td class="ft11"style="font-weight:900;">単価:　'.$arrvv5[$v7][9].'円</td></tr>';

echo '</table></a>';
echo '</td>';
if($ctt5%4==0){echo '</td></tr>';    }else{ echo '</td>';   }
$mk5=4-count($arrvv5)%4;
}
for($v5=0;$v5<$mk5;$v5++){ echo '<td width="25%"></td>';     }
echo '</tr>';
echo '</table>';
echo '</td></tr></table>';
//~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~



?>














<!-- ************************************************************** -->
</td></tr></table>




</body>
</html>
