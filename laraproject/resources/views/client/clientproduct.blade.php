<?php
  $storeid='';  $storename='';
  $storeid=Session('storeidkk');
  $storename=Session('storenamekk');
  if($storeid==''){
    // +++++++++++++++++++++++++++++++++++++++++++++++++++++++++
  ?>


  <script>
  window.location.href = "{{URL::to('members/signin')}}";
  </script>
  <?php
  }else{
    // +++++++++++++++++++++++++++++++++++++++++++++++++++++++++
  ?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

<script src="{{ asset('/js/jquery-1.11.2.js') }}"></script>
<script src="{{ asset('/js/nmenu.js') }}"></script>
<script src="{{ asset('/js/main2k2.js') }}"></script>
<script src="{{ asset('/js/jsbtnmenu.js') }}"></script>


    <title>Home</title>

</head>


<style>

ul { display: none; list-style: none; padding: 0px; line-height:1px; margin-top:0px; margin-bottom:0px;}
ul ul{   padding: 1px; line-height:1px;   }
li {   list-style: none;   padding-left: 10px; line-height:25px;}
li li{     padding-top: 5px;line-height:18px;	}
</style>

<SCRIPT>

$(function () {
$('div').click(function() {
$(this).next('ul').slideToggle('fast');
});
$('li').click(function(e) {
$(this).children('ul').slideToggle('fast');
e.stopPropagation();
});
});
//---------------------------------------------------------------------------------

function kakunin(){
obj = document.test.linkselect;

index = obj.selectedIndex;
if (index != 0){
href = obj.options[index].value;
//-------------------------------------------------------
location.href = "clientproduct?submenu1="+href+"";

//----------------------------------------------

}
}
</SCRIPT>

<body>
@extends('layouts.add')

<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
  <table align="center" width="100%"bgcolor="#008000"><tr class="he30">
  <td width="10%" style="font-family:arial black;color:#fff;"align="center" >
    <a href="{{ url('manager/home') }}" class="ft20"style="text-decoration:none;color:#fff;">
    meisis </a>
  </td > <td class="ft11"width="20%"align="center"style="color:#fff;">
  <?php

if($storeid!=''){  echo ''.$storename.'様  ログイン中';     }
?>
</td > <td width="60%"align="right">
  @if($storeid!='')
   <a href="{{ url('client/clientproduct') }}?out=logout" >
    <button class="btncss24">ログアウト</button></a>
  @else
<a href="{{ url('members/signin') }}" >
 <button class="btncss24">ログイン</button></a>
 @endif

</td></tr></table><hr class="hr">
<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
  @error('token') <div class="alert alert-danger">{{ $message }}</div> @enderror
<!-- **************************login************************************** -->
<table class="he1500" width="100%"bgcolor="#99fff;"border="0"><tr><td style="vertical-align:top;">
  <table bgcolor="#008000"width="100%"><tr><td >
  <?php
  $arrmenu=array(
  array(  '管理','manastore/manapromain'),       array(  '店舗情報','manastore/manaprofile'),
  array(  '商品登録','client/clientproduct'),           array(  '受注関連','manastore/manasales'),
  array(  '出荷関連','manastore/manadelivery'),  array(  '入金支払','manastore/manapayment'),
  array(  '顧客情報','manastore/manacustom'),    array(  'お問合せ','manastore/manainquiry'),
  array(  '出店ホーム','manastore/storeprofile')    );
  for($x=0;$x<count($arrmenu);$x++){     ?>
  <a href="{{ url( $arrmenu[$x][1]) }}"><button class="btncss24"><?php echo $arrmenu[$x][0]; ?></button></a>
  <?php   }  ?>
  </td></tr></table></br>
<?php
$arrst2='';
if(isset($arrst)){  $arrst2= $arrst[0];    }
//-------------------------------------------------------------------
$arrtt1=array();$arrtt2=array();$data5=array();$cnt2=0;
$arrtt5=array();$arrtt6=array();$data7=array();$cnt32=0;
$arrtt8=array();$arrtt8b=array();$data8=array();$cnt82=0;

//-------------------------------------------------------
if(isset($items51)){
foreach($items51 as $mkk8){   foreach($mkk8 as $mkk82){
  $arrtt8[]=$mkk82;$cnt82+=1; //echo $mkk82;
if($cnt82==12){$data8[]=$arrtt8;  $arrtt8=array(); $cnt82=0;    }  } }
}

//-------------------------------------------------------
if(isset($items21)){
foreach($items21 as $mkk){   foreach($mkk as $mkk2){
  $arrtt1[]=$mkk2;$cnt2+=1; //echo $mkk2;
if($cnt2==5){$data5[]=$arrtt1;  $arrtt1=array(); $cnt2=0;    }  } }
}
//----------------------------------------------------------------
 ?>
 <?php
  $submenu1='';$submenu2='';$submenu3='';$prkcode='';$cata='';
 $arrcate=array();	$ct=0;
$submenu1='電子機器・家電';
 //----------------------------------------------------------------------------------
if(isset($category51)){
 foreach($category51 as $cate51){   foreach($cate51 as $cate52){
   $arrcate[]=$cate52;
 }}}
 $arrcate = array_unique($arrcate);//echo $arrcate[0];
 foreach($arrcate as $adz){	$ct +=1;	if($ct==1){	 $submenu1=$adz;}	}

 if(isset($_GET['submenu1'])){	$submenu1=$_GET['submenu1'];		}
 if(isset($_GET['submenu2'])){	$submenu2=$_GET['submenu2'];		}
 if(isset($_GET['submenu3'])){	$submenu3=$_GET['submenu3'];		}
 if(isset($_GET['prkcode'])){	$prkcode=$_GET['prkcode'];	}

 echo '<table width="100%"  align="center"   border="0" ><tr><td  align=""width="1%" >';

 echo '<table width="100%"   align="center"border="1" cellspacing="0" bordercolor="#99ffff">
 <tr><td class="wt160" align="center" bgcolor="#FFFFFF" style="vertical-align:top">';
 ?>

 <form name="test">
 <select name="linkselect" class="ft13" style=" font-size:13px;padding-left:10px; background-color:#8fbc8f;width:240px;height:30px;"onChange="kakunin()">

 <option >&nbsp;&nbsp;<?php echo $submenu1; ?></option>
 <option class="ft13" value="電子機器・家電">電子機器・家電</option>
 <option class="ft13"value="ファッション">ファッション</option>
 <option class="ft13"value="住まい・暮らし">住まい・暮らし</option>
 <option class="ft13" value="グルメ">グルメ</option>
 <option class="ft13"value="美容・健康">美容・健康</option>
 <option class="ft13"value="車・スポーツ">車・スポーツ</option>


 </select>
 </form>

 <?php

 $data=array();$data2=array();$data3=array();$data5b=array();
 $datak=array();$datak1=array();	$arrmm1=array();$arrmm2=array();
for($iz = 0 ; $iz < count($data5) ; $iz++){
$categoryk=$data5[$iz][0];
if($categoryk==$submenu1){
$data5b[]=array($data5[$iz][1],$data5[$iz][2],$data5[$iz][3],$data5[$iz][4],$data5[$iz][0]);
}
}
 //--------------------------------------------------------------------------------------------------
 for($i = 0 ; $i < count($data5b) ; $i++){
     for($j = 0; $j < count($data5b[$i]); $j++){
 		$datak[]=$data5b[$i][0];
     }
 }

 $arrt=array();
 $unique = array_unique($datak);
 foreach($unique as $datakk){	if($datakk!=''){$arrt[]=$datakk;	}	}

 //^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^
 echo '<table class="wt240"border="0"class="ft11" cellspacing="0"style=" border-color:#99ffff;">
 <tr><td bgcolor="#FFFFFF" >';

 $arrbb1=array();
 for($j2 = 0 ; $j2 < count($arrt) ; $j2++){  //35

 echo '<div  style="padding:0px; margin:0px"">';
 echo '<a class="amenu1"style="background-color:#d3d3d3;" >&nbsp;'.$arrt[$j2].'</a></br>';
 echo '</div>';

 //========================================================
 for($j3 = 0 ; $j3 < count($data5b) ; $j3++){   //22
 //----------------------------------------------------


 if($arrt[$j2]==$data5b[$j3][0]){  //21
 	$arrbb1[]=$data5b[$j3][1];
 	}								//21
 }  		//22
 //--------------------------------------------
 $unique3 = array_unique($arrbb1);
 echo '<ul>';		//21
 foreach($unique3 as $datakk3){  //34
 echo '<li>';
 if($datakk3!=''){ //33
 echo '<a class="amenu2"style="background-color:#d2b48c;">&nbsp;・'.$datakk3.'</a></br>';
 for($j6 = 0 ; $j6 < count($data5b) ; $j6++){  //32

 if(	$datakk3==$data5b[$j6][1]	){		//31
 echo '<ul><li>';//21
 echo '<a href="ajax51a?prkcode='.$data5b[$j6][3].'" class="amenu1"style="background-color:#eee8aa;">&nbsp;・'.$data5b[$j6][2].'</a></br>';

 echo '</li></ul>';	//21
 		}		}	} //33
 echo '</li>';
 					} //34
 echo '</ul>';	//21

 //===================================================

 $arrbb1=array();

 }//35

 echo '</br>';
 echo '</td></tr></table>';
 //-----------------------------11111-------------------------------------------------------------------
 echo '</td><td style="vertical-align:top" >';
 //-----------------------------2222-------------------------------------

 for($a=0;$a<count($data8);$a++){
     $arrmm1[]=array($data8[$a][0],$data8[$a][1],$data8[$a][2],$data8[$a][3],$data8[$a][4],$data8[$a][5],
     $data8[$a][6],$data8[$a][7],$data8[$a][8],$data8[$a][9],$data8[$a][11]);
    $arrmm2[]=$data8[$a][0];
 }

 $arrmm2=array_unique($arrmm2);
 ?>
<table width="98%" align="center"  border="0" class="ft11">
 <tr><td width="10%"align="center">

</td><td align="center" colspan="3"class="ft16"><strong>登録済商品</strong></td>
<td width="10%" align="center"><a href="{{ url('client/clientdele') }}">
  <button class="btncss25">商品削除</button></a></td></tr>
</table><hr width="98%">
<?php
 foreach($arrmm2 as $amkk){
 	echo '<table width="98%" align="center"  >';
 		echo '<tr class="ft11">';
 		echo '<td  align="" colspan="5"><strong> '.$amkk.'</strong> </td></tr>';
 echo '</table>';

 	echo '<table width="98%" align="center"  border="1"bordercolor="#9cc"cellspacing="0"class="ft11">';

 		echo '<tr align="center" class="ft11"bgcolor="#66cc99"><td width="30%" class="he24"> 商品分類 </td><td  width="20%">商品名 </td>';
 		echo '<td  width="20%"> 型番</td><td  width="15%"> </td><td  width="15%"> ';
 		echo '</td></tr>';

 for($c=0;$c<count($arrmm1);$c++){
 	if($amkk==$arrmm1[$c][0]){
 		echo '<tr  class="he30"style="font-size:11px;">';
 		echo '<td  width=""align="center" > '.$arrmm1[$c][1].' </td>';
 		echo '<td  width=""align="center" >'. $arrmm1[$c][3].'  </td>';
    echo '<td  width=""align="center" > '.$arrmm1[$c][7] .' </td>';
?>
<td width=""align="center"><a href="{{ url('client/clientimg') }}?numitem=<?php echo $arrmm1[$c][7]; ?>&amenu4=<?php echo $arrmm1[$c][10]; ?>" >
 <button class="btncss22">画像</button></a></td>
<td width=""align="center"><a href="{{ url('client/clientedit6a') }}?amenu4=<?php echo $arrmm1[$c][7]; ?>" >
 <button class="btncss22">仕様</button></a></td></tr>

<?php
 }}
echo '</table></br>';
 }
 echo '<table width="100%"  border="0">';
 echo '<tr><td  align="center"  bgcolor="#88FFFF"class="he150" style="vertical-align:top"></td></tr>';
 echo '<tr><td  align="center"  bgcolor="#77FFFF"class="he150" style="vertical-align:top"></td></tr>';
 echo '<tr><td  align="center"  bgcolor="#66FFFF"class="he150"  style="vertical-align:top"></td></tr>';
 echo '</table>';
 echo '</td></tr></table>'; //2-1
 //---------------------------------------------------22222------------------------
 //-------------33333------------------------------------
 echo '</td></tr></table>';
 ?>


</td></tr></table>








</body>
</html>


<?php
}

 ?>
