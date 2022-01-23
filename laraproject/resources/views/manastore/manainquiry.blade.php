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

    <title>Home</title>

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
<a href="{{ url('client/clientproduct') }}"  >  <button class="btncss24">戻る</button></a>
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
<h3 align="center">お問い合わせ</h3>








</td></tr></table>

</body>
</html>



<?php
}

 ?>
