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
  <html>
  <head>
      <title>Laravel 8 Ajax Request example</title>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=0.5">
      <script src="https://code.jquery.com/jquery-3.0.0.min.js"></script>
      <script src="{{ asset('/js/jquery-1.11.2.js') }}"></script>
      <meta name="csrf-token" content="{{ csrf_token() }}" />
  </head>
<style>

</style>

<body>
@extends('layouts.add')
<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
<table align="center" width="100%"bgcolor="#008000"><tr class="he30">
<td width="10%" style="font-family:arial black;color:#fff;"align="center" >
<a href="{{ url('manager/home') }}" class="ft20"style="text-decoration:none;color:#fff;">
  meisis </a> </td > <td class="ft11"width="20%"align="center"style="color:#fff;">
  <?php
    if($storeid!=''){  echo ''.$storename.'様  ログイン中';     }
  ?>
</td > <td width="60%"align="right">
<a href="{{ url('client/clientproduct') }}"  ><button class="btncss24">戻る</button></a>
</td></tr></table><hr class="hr">
<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
  @error('token') <div class="alert alert-danger">{{ $message }}</div> @enderror

<!-- **************************login*******************#******************* -->
<table width="100%" class="he1500"bgcolor="#99fff;"border="0">
  <tr><td style="vertical-align:top;">
    <!-- ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
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
<!-- +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
<table border="0" width="96%"align="center" class="ft11"><tr><td align="right" >
  <a href="{{ url('manastore/manadelivery') }}">
 <button id="buttona0"class="btncss25">出荷予定一覧</button></a>
 <a href="{{ url('manastore/manadelivery3') }}">
 <button id="buttona1"class="btncss25">出荷履歴</button></a>
 <a href="{{ url('manastore/manadelivery7') }}">
 <button id="buttona2"class="btncss25">出荷伝票</button></a>
    <a href="{{ url('manastore/manadelivery6') }}">
      <button class="btncss25">出荷手配</button></a>

</td></tr></table></br>
<!-- +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
<?php
//--------------------------------------------------------------
date_default_timezone_set ('Asia/Tokyo');
$dateto=date('YmdHis');
$dateto2=date('Ymd');
$datetoy=date("Ymd", strtotime("-1 day"));
 //-------------------------------------------
 $arrcust=array(); $arrsa8=array();
//-----------------------------------------------------
$arrsa1=array();  $arrsa2=array(); $cat=0; $arrsa5=array();  $arrsa6=array(); $cat5=0;
  $arrpon1=array();
//----------------------------------------------------------------
if(isset($sales)){
foreach($sales as $ales1){   foreach($ales1 as $ales2){
    $arrsa1[]=$ales2; $cat +=1;
if($cat==28){$arrsa2[]=$arrsa1;  $arrsa1=array(); $cat=0;    }  } }
}
//-----------------------------------------------------------------------
if(isset($address)){
foreach($address as $ales5){   foreach($ales5 as $ales6){
    $arrsa5[]=$ales6; $cat5 +=1; //echo $ales6;
if($cat5==9){$arrsa6[]=$arrsa5;  $arrsa5=array(); $cat5=0;    }  } }
}
//--------------------------------------------------------------------
for($k3=0;$k3<count($arrsa2);$k3++){
    $arrpon1[]=$arrsa2[$k3][1]; $arrsa8[]=$arrsa2[$k3][8];
}
$arrpon1=array_unique($arrpon1);
//----------------------------------------------------------------------

 ?>
 <!-- ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->

   <h3 align="center">出荷予定一覧</h3>
  <?php

  $arrsum3=array();$arrsum4=array(); $ckk=0;
  echo '<table border="1" width="96%"align="center" bordercolor="#ffffff"cellspacing="0"class="ft11">';
  echo '<tr bgcolor="#999999"align="center"class="he30"><td>No</td>
  <td>日付</td> <td >注文番号</td><td>商品名</td><td>商品型番</td><td>商品単価</td><td>注文数量</td><td>商品金額</td>
  <td>購入者</td><td >支払状況</td><td >出荷日程</td><td >出荷数量</td>
  </tr>';

  foreach($arrpon1 as $rpon){  //  echo $rpon.'</br>';
for($v=0;$v<count($arrsa2);$v++){
if($arrsa2[$v][1]==$rpon){
if($arrsa2[$v][9]==$storeid){
  if($arrsa2[$v][10]=='order'){
  //  if($arrsa2[$v][27]!=''){
    $ckk +=1;

    $dateord=date('Y-m-d', strtotime($arrsa2[$v][0]));
    $dateship=date('Y-m-d', strtotime($arrsa2[$v][22]));
echo '<tr align="center"class="he30"bgcolor="#cccccc"><td>'.$ckk.'</td> <td class="padd1">'.$dateord.'</td><td class="padd1">'.$arrsa2[$v][1].'</td>
<td class="padd1">'.$arrsa2[$v][2].'</td><td class="padd1">'.$arrsa2[$v][3].'</td><td class="padd1">'.$arrsa2[$v][4].'</td><td>'.
$arrsa2[$v][5].'</td><td class="padd1">'.$arrsa2[$v][6].'</td><td class="padd1">'.$arrsa2[$v][7].'</td>
<td class="padd1">'.$arrsa2[$v][27].'</td><td class="padd1">'.$dateship.'</td><td class="padd1">'.$arrsa2[$v][5].'</td>
</tr>';
$arrsum3[]=$arrsa2[$v][6];$arrsum4[]=$arrsa2[$v][6];
//}
}}}}}
foreach($arrsa8 as $vvsa8){
for($v6=0;$v6<count($arrsa6);$v6++){
if($vvsa8==$arrsa6[$v6][7]){
  $addr3='受取人：'.$arrsa6[$v6][5].'　　電話番号：'.$arrsa6[$v6][6].' &nbsp; &nbsp; 送り先： 〒'.$arrsa6[$v6][3].$arrsa6[$v6][4];
}}}


$res3 = array_sum($arrsum3); $arrsum3=array();
if($res3>0){
   echo '<tr align=""class="he30"><td class="padd1"colspan="12"> '.$addr3.'  </td></tr>';
  echo '<tr bgcolor="#999999"align="center"class="he30"><td colspan="7">小計<td>'.$res3.'</td> <td colspan="5"></td></tr>';
echo '<tr ><td class="padd1"colspan="12">&nbsp;</td></tr>';
}
$res4 = array_sum($arrsum4);
if($res4>0){
  echo '<tr bgcolor="#66ff99"class="he30"align="center"><td colspan="7">合計<td>'.$res4.'</td> <td colspan="5"></td></tr>';
}
echo '</table></br>';

  $jsonTest=json_encode($arrcust);

 ?>


</td></tr></table>

</body>


<script type="text/javascript">

    //-------------------------------------------------------------------------
    $.ajaxSetup({
    headers: {  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')    }
    });
    //--------------------------------------------------------------
    $(".btn-submit").click(function(e){  e.preventDefault();   read();  });
   //----------------------------------------------------------------------
      function read(){
        var vname1 = arrm;
        var vname2 = idkk;
        var vname3 = shipdate;
        var vname4 = shipqty;
        var vname5 = ponumber;
        var vname6 = xt;
        var vname7 = xt2;
　　　　　//alert(vname2);
        $.ajax({
           type:'POST',
           url:"{{ route('/manastore/manastoreajax/manadelivery2') }}",
           data:{kname1:vname1, kname2:vname2,kname3:vname3, kname4:vname4, kname5:vname5,
             kname6:vname6,kname7:vname7
           },
           success:function(data){

             //-----------ok-------------------
           }
        });
        }
        </script>

</html>



  <?php
  }
   ?>
