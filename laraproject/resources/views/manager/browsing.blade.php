

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


<script src="{{ asset('/js/jquery-1.11.2.js') }}"></script>

  <script src="https://code.jquery.com/jquery-3.0.0.min.js"></script>

    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <title>Home</title>

</head>
<style type="text/css">

</style>


<body>
  @extends('layouts.add')
  <table width="100%"class="he40"align="center"bgcolor="#483d86"border="0"><tr>
  <td width="10%"align="center" >
  <a href="{{ url('manager/home') }}" class="acss5" > meisis </a> </td >
  <td class="ft11"width="70%"align="center"style="color:#ffffff;">
  <?php     if($loginname!=''){  echo ''.$loginname.'様ログイン中';     }            ?>
</td><td width="20%"align="right"><a href="{{ url('manager/home') }}" >
  <button class="btncss25">HOME</button></a>
  </td></tr></table><hr class="hr">
  @error('token') <div class="alert alert-danger">{{ $message }}</div> @enderror
<!-- **************************login************************************** -->
 <table width="100%"class="he1500"border="0"cellspacing="0"><tr><td style="vertical-align:top;">


   <table width="100%"align="center"border="0">
   <tr><td width="80%"></td><td width="10%"><button id="buttona1"class="btncss25">閲覧履歴</button></td>
     <td width="10%"><button id="buttona0"class="btncss25">お気に入り</button></td>
     <tr>
   </table>



<div id="pa1">
  <h3 align="center">閲覧履歴</h3>

<?php

$arrkk5=array();  $arrkk6=array(); $cnt5=0;
if(isset($items8)){
 foreach($items8 as $maa8){   foreach($maa8 as $maa82){
  $arrkk5[]=$maa82; $cnt5 +=1;
 if($cnt5==21){$arrkk6[]=$arrkk5;  $arrkk5=array(); $cnt5=0;    }
 } }}
//----------------------------------------------
$arrkk1=array();  $arrkk2=array(); $cnt8=0;
if(isset($favob)){
 foreach($favob as $mkk8){   foreach($mkk8 as $mkk82){
  $arrkk1[]=$mkk82; $cnt8 +=1;
 if($cnt8==5){$arrkk2[]=$arrkk1;  $arrkk1=array(); $cnt8=0;    }
 } }}
$mk=0;$ctt=0;
echo '<table width="80%"align="center"border="0">';
for($v=0; $v<count($arrkk6); $v++){
for($k=0; $k<count($arrkk2); $k++){
  if($arrkk2[$k][4]=='browsing'){
    if($arrkk2[$k][2]==$arrkk6[$v][19]){  $ctt +=1;
$pick=explode('|',$arrkk6[$v][11]);
      if($ctt%5==1){echo '<tr><td width="20%" style="vertical-align:top">';
      }else{ echo '<td width="20%" style="vertical-align:top">';   }

echo '<table width="100%"align="center"border="1"bordercolor="#9cc" class="ft11"cellspacing="0">';//'.$arrkk6[$v][11].'
echo '<tr align="center"><td width=""height="160"><img src="../storage/upload/'.$arrkk6[$v][5].'/'.$pick[0].'" class="imgcss22"></td><tr>
<tr><td>'.$arrkk6[$v][3].'</td><tr>
<tr><td>'.$arrkk6[$v][7].'</td><tr>
<tr><td>'.$arrkk6[$v][6].'</td><tr>
<tr><td>'.$arrkk6[$v][9].'</td><tr>';
echo '</table>';
if($ctt%5==0){echo '</td></tr>';    }else{ echo '</td>';   }
}}}}
$mk=5-count($arrkk6)%4;
for($j=0;$j<$mk;$j++){ echo '<td width="20%"> </td>';     }
echo '</tr>';
echo '</table>';
//------------------------------------------------------------------------------------

?>
</div>


<div id="pa0">
  <h3 align="center">お気に入り</h3>

<?php


$mk2=0;$ctt2=0;
echo '<table width="80%"align="center"border="0">';
for($v2=0; $v2<count($arrkk6); $v2++){
for($k2=0; $k2<count($arrkk2); $k2++){
  if($arrkk2[$k2][4]=='favority'){
  if($arrkk2[$k2][2]==$arrkk6[$v2][19]){  $ctt2 +=1;
$pick2=explode('|',$arrkk6[$v2][11]);
      if($ctt2%5==1){echo '<tr><td width="20%" style="vertical-align:top">';
      }else{ echo '<td width="20%" style="vertical-align:top">';   }

echo '<table width="100%"align="center"border="1"bordercolor="#9cc"class="ft11" cellspacing="0">';
echo '<tr align="center"><td width=""height="160"><img src="../storage/upload/'.$arrkk6[$v2][5].'/'.$pick2[0].'"class="imgcss22"></td><tr>
<tr><td>'.$arrkk6[$v2][3].'</td><tr>
<tr><td>'.$arrkk6[$v2][7].'</td><tr>
<tr><td>'.$arrkk6[$v2][6].'</td><tr>
<tr><td>'.$arrkk6[$v2][9].'</td><tr>';
echo '</table>';
if($ctt2%5==0){echo '</td></tr>';    }else{ echo '</td>';   }
}}}}
$mk2=5-count($arrkk6)%4;
for($j2=0;$j2<$mk2;$j2++){ echo '<td width="20%"> </td>';     }
echo '</tr>';
echo '</table>';
 ?>
</div>




</td></tr></table>
</body>


</html>

<script>
var pbool=false;  	  var arrbb=[];
$(function() {	 for (var ia = 0; ia < 20; ia++) {	 $('#pa'+ia).hide();	 }	  });
//-------------------------------------------------------------------------------------
$(function() {		 $('#pa0').show();
    for (var i = 0; i < 20; i++) {
    $('#buttona' + i).click((function(i) {
      return function() {
  //--------------------------------------------------------------------
  for (var ie = 0; ie < 20; ie++) {	 $('#pa'+ie).hide();	 }
  if(arrbb[0]==i){pbool=	arrbb[1];		}else{	pbool=false;			}
  if(pbool==false){	$("#pa" + i).show();	pbool=true;		}else{	$("#pa" + i).hide();	pbool=false;	}
  arrbb[0]=i;		arrbb[1]=pbool;
//----------------------------------------------------------------------------------
      }    })(i));	}	});
  </script>
