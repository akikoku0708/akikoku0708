
@extends('layouts.add')

<?php

$arrkk=array(); $arrkk2=array();$arrkk3=array(); $arrkk5=array();       $cnt=0;
$arrtotal=array(); $res5=0;   $arrtotal2 =array(); $res6=0;
if(isset($arr)){
   if($arr[2]!=555){

$arrkk=explode('|',$arr[0]);
foreach($arrkk as $rkk){
$arrkk2=explode('_',$rkk);
$arrkk2 = array_filter($arrkk2);
  for($k=0;$k<count($arrkk2);$k++){ $cnt +=1;
$arrkk5[]=$arrkk2[$k];
 if($cnt==8){  $arrkk3[]=$arrkk5;    $arrkk5=array(); $cnt=0;                }
}}

echo '<table width="60%"border="0"cellspacing="0"class="ft11">
  <tr align="center"><td width="100%"colspan="2">納期連絡  </td></tr>
  <tr align=""><td width="50%">顧客コード：'.$arr[1].' </td>
    <td width="50%">顧客名：'.$arr[2].' </td>  </tr>
    </table>';

echo '<table width="60%"border="1"cellspacing="0">
  <tr align="center"><td width="20%">商品名</td>
  <td  width="15%">型番</td><td  width="10%">単価</td>
  <td  width="5%">数量</td><td width="10%">金額</td><td width="25%">注文番号</td>
  <td  width="15%">予定出荷日</td>
  </tr>';
for($k3=0;$k3<count($arrkk3);$k3++){
  echo '<tr align="center"><td>'.$arrkk3[$k3][1].'</td><td>'.$arrkk3[$k3][2].'</td><td>'
  .$arrkk3[$k3][3].'</td><td>'.$arrkk3[$k3][4].'</td><td>'.$arrkk3[$k3][5].'</td>
  <td>'.$arrkk3[$k3][0].'</td><td>'.$arrkk3[$k3][6].'</td>
  </tr>';
  $arrtotal[]=$arrkk3[$k3][5];


}
$res5 = array_sum($arrtotal);
echo '<tr align="center"><td colspan="4">合計</td><td>'.$res5.'</td><td colspan="2"></td></tr>';
echo '</table>';
}}
 ?>

 <?php


 $arrkk=array(); $arrkk2=array();$arrkk3=array(); $arrkk5=array();       $cnt=0;
 $mtt='';
 if(isset($arr)){
  // echo $arr[2];
 if($arr[2]==555){
   $mtt=explode('_',$arr[1]);
   echo '<table width="60%"border="0"cellspacing="0">
     <tr align="center"><td width="100%"colspan="2">出荷連絡  </td></tr>

     <tr align=""><td width="50%">出荷番号：'.$mtt[1].' </td>
       <td width="50%">顧客名：'.$mtt[0].' </td>  </tr>
       </table>';

   echo '<table width="60%"border="1"cellspacing="0">
     <tr align="center"><td width="20%">商品名</td>
     <td  width="15%">型番</td><td  width="10%">単価</td>
     <td  width="5%">数量</td><td width="10%">金額</td><td width="25%">注文番号</td>
     <td  width="15%">予定出荷日</td>
     </tr>';

 $arrkk=explode('|',$arr[0]);
 foreach($arrkk as $rkk){
 $arrkk2=explode('_',$rkk);
 $arrkk2 = array_filter($arrkk2);
   for($k=0;$k<count($arrkk2);$k++){ $cnt +=1;
 $arrkk5[]=$arrkk2[$k];
  if($cnt==8){  $arrkk3[]=$arrkk5;    $arrkk5=array(); $cnt=0;                }
 }}


 for($k3=0;$k3<count($arrkk3);$k3++){
   echo '<tr align="center"><td>'
   .$arrkk3[$k3][0].'</td><td>'.$arrkk3[$k3][1].'</td><td>'.$arrkk3[$k3][2].'</td><td>'
   .$arrkk3[$k3][3].'</td><td>'.$arrkk3[$k3][4].'</td><td>'.$arrkk3[$k3][5].'</td>
   <td>'.$arrkk3[$k3][6].'</td> </tr>';
   $arrtotal2[]=$arrkk3[$k3][4];
 }
 $res6 = array_sum($arrtotal2);
 echo '<tr align="center"><td colspan="4">合計</td><td>'.$res6.'</td><td colspan="2"></td></tr>';
 echo '</table>';
 }}

  ?>

<!--
@if(isset( $arr))
<table width="400"border="0">
<tr><td align=""class="hei">{{$arr[2]}}</td></tr>
<tr><td align=""class="hei">{{$arr[0]}}</td></tr>
<tr><td align=""class="hei">{{$arr[1]}}</td></tr>
<tr><td align=""class="hei"><hr></td></tr>
<tr><td>
 このメッセージはmeisisの店舗会員を登録する為に送られます。
 このメールに心当たりのない場合は  meisis@applyex.com までご連絡下さい。
</td></tr>
<tr><td align=""class="hei"><hr></td></tr>
<tr><td align=""class="hei"></td></tr>
<tr><td class="hei">meisis運営事務局より</td></tr>


@endif
<!-============================================ -->
