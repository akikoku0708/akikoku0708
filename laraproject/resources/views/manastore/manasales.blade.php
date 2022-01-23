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
<link rel="stylesheet" type="text/css" href="{{ asset('/css/nmenu3.css') }}">
<script src="{{ asset('/js/jquery-1.11.2.js') }}"></script>
<script src="{{ asset('/js/nmenu.js') }}"></script>
  <meta name="csrf-token" content="{{ csrf_token() }}" />
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

<!-- ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
<table border="0" width="90%"align="center" class="ft11"><tr><td align="right" >

  <a href="{{ url('manastore/manasales') }}" class="alink">
  <button id="buttona0"class="btncss25">受注一覧</button></a>
  <a href="{{ url('manastore/manasales3') }}" class="alink">
  <button id="buttona2"class="btncss25">納期回答</button></a>
  <a href="{{ url('manastore/manasales5') }}" class="alink">
  <button id="buttona3"class="btncss25">納期連絡</button></a>

</td></tr></table></br>
<!-- ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->

<?php
//--------------------------------------------------------------
$arrsa1=array();  $arrsa2=array(); $cat=0; $arrsa5=array();  $arrsa6=array(); $cat5=0;
 $arrsa7=array();$arrsa8=array(); $purchser=''; $arrsum1=array(); $arrsum2=array();
 $arrkv1=array(); $arrkv2=array();
//----------------------------------------------------------------
if(isset($sales)){
foreach($sales as $ales1){   foreach($ales1 as $ales2){
    $arrsa1[]=$ales2; $cat +=1;
if($cat==26){$arrsa2[]=$arrsa1;  $arrsa1=array(); $cat=0;    }  } }
}
//-----------------------------------------------------------------------
if(isset($address)){
foreach($address as $ales5){   foreach($ales5 as $ales6){
    $arrsa5[]=$ales6; $cat5 +=1; //echo $ales6;
if($cat5==9){$arrsa6[]=$arrsa5;  $arrsa5=array(); $cat5=0;    }  } }
}
for($k3=0;$k3<count($arrsa2);$k3++){
    $arrsa8[]=$arrsa2[$k3][8];
}
$arrsa8=array_unique($arrsa8);
//----------------------------------------------------------------------
foreach($arrsa8 as $rsa8){
for($k=0;$k<count($arrsa2);$k++){
   if($arrsa2[$k][8]==$rsa8){ //echo $rsa8;
   if($storeid==$arrsa2[$k][9]){
   if($arrsa2[$k][10]=='order'){
//  if($arrsa2[$k][25]!=''){   //paycode
$arrkv1[]=array($arrsa2[$k][0],$arrsa2[$k][1],$arrsa2[$k][2],$arrsa2[$k][3],$arrsa2[$k][4],$arrsa2[$k][5],
$arrsa2[$k][6],$arrsa2[$k][7],$arrsa2[$k][8],$arrsa2[$k][9],$arrsa2[$k][10],$arrsa2[$k][11],$arrsa2[$k][22],
$arrsa2[$k][23],$arrsa2[$k][25]
);
//}

}}}}
  }

date_default_timezone_set ('Asia/Tokyo');
$dateto=date('YmdHis');
$dateto2=date('Ymd');
$dateto3=date('Y-m-d');
$datetoy=date("Ymd", strtotime("-1 day"))
 ?>

<!-- ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->

<h3 align="center">受注一覧</h3>
<?php
echo '<table border="1" width="90%"align="center" bordercolor="#99ffff"cellspacing="0"class="ft11">';
echo '<tr bgcolor="#999999"align="center"class="he30"><td>No</td>
<td>日付</td> <td >注文番号</td><td>商品名</td><td>型番</td><td>単価</td><td>数量</td><td>金額</td>
<td>購入者</td><td >支払状況</td><td >出荷日程</td><td >出荷数量</td><td >現在状況</td>
</tr>';
  echo '<tr align=""><td class="padd1"colspan="11">&nbsp;</td></tr>';

$kkt2=0;
foreach($arrsa8 as $kvsa8){   //echo $kvsa8;
for($k5=0;$k5<count($arrkv1);$k5++){ //echo $arrkv1[$k5][8];
if($arrkv1[$k5][8]==$kvsa8){
   if($arrkv1[$k5][0]!=''){$dateho1=date('Y-m-d', strtotime($arrkv1[$k5][0]));}else{   $dateho1=''; }
     if($arrkv1[$k5][12]!=''){$dateho2=date('Y-m-d', strtotime($arrkv1[$k5][12]));}else{   $dateho2=''; }

  $kkt2 +=1;
  if($arrkv1[$k5][10]=='order'){$status='出荷待';}else{  $status='出荷済';      }
    echo '<tr bgcolor="#cccccc"class="he30"align="center"><td>'.$kkt2.'</td>
     <td class="padd1">'.$dateho1.'</td><td class="padd1">'.$arrkv1[$k5][1].'</td>
    <td class="padd1">'.$arrkv1[$k5][2].'</td><td class="padd1">'.$arrkv1[$k5][3].'</td>
    <td class="padd1">'.$arrkv1[$k5][4].'</td><td>'.
    $arrkv1[$k5][5].'</td><td class="padd1">'.$arrkv1[$k5][6].'</td><td class="padd1">'.$arrkv1[$k5][7].'</td>
  <td class="padd1">'.$arrkv1[$k5][14].'</td><td class="padd1">'.$dateho2.'</td>  <td class="padd1">'.$arrkv1[$k5][13].'</td><td class="padd1">'.$status.'</td>
    </tr>';
$arrsum1[]=$arrkv1[$k5][6]; $arrsum2[]=$arrkv1[$k5][6]; //amount
}
}
$res1 = array_sum($arrsum1); $arrsum1=array();
for($k6=0;$k6<count($arrsa6);$k6++){
if($kvsa8==$arrsa6[$k6][7]){
  $addr2='受取人：'.$arrsa6[$k6][5].'　　電話番号：'.$arrsa6[$k6][6].' &nbsp; &nbsp; 送り先： 〒'.$arrsa6[$k6][3].$arrsa6[$k6][4];
}}
if($res1>0){
echo '<tr align=""><td class="padd1"colspan="11">'.$addr2.'</td></tr>';
echo '<tr bgcolor="#999999"align="center"><td colspan="7">小計<td>'.$res1.'</td> <td colspan="5"></td></tr>';
  echo '<tr align=""><td class="padd1"colspan="11">&nbsp;</td></tr>';
}}
$res2 = array_sum($arrsum2);
if($res2>0){
  echo '<tr bgcolor="#66ff99"align="center"><td colspan="7">合計<td>'.$res2.'</td> <td colspan="5"></td></tr>';
}
echo '</table></br>';

 ?>

<!-- ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->


<div id="message"></div>



</td></tr></table>

</body>

<script type="text/javascript">
//-------------------------------------------------------------------------------------
  var shipdate; var shipqty; var ponumber
    for (var j = 0; j < 20; j++) {
    $('#answer' + j).click((function(j) {
      return function() {
  //--------------------------------------------------------------------
  shipdate=$("input[name=shipdate"+j+"]").val();
  shipqty=$("input[name=shipqty"+j+"]").val();
  ponumber=$("input[name=ponumber"+j+"]").val();
  read();
//----------------------------------------------------------------------------------
}    })(j));	}
//----------------------------------------------------------------
    //-------------------------------------------------------------------------
    $.ajaxSetup({
    headers: {  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')    }
    });
    //--------------------------------------------------------------
    $(".btn-submit").click(function(e){  e.preventDefault();   read();  });
   //----------------------------------------------------------------------
      function read(){
        var vname1 = 111;
        var vname2 = 222;
        var vname3 = shipdate;
        var vname4 = shipqty;
        var vname5 = ponumber;
        $.ajax({
           type:'POST',
           url:"{{ route('manastore/manastoreajax/manasales2') }}",
           data:{kname1:vname1, kname2:vname2,kname3:vname3, kname4:vname4, kname5:vname5
           },
           success:function(data){
   //-------------------------------------------------------------------------
        $('#message').html('<table border="1"><tr><td>'
        +data['zname1']
        +data['zname2']+data['zname3']+data['zname4']+data['zname5']
        +'</td></tr><table>');
             //-----------ok-------------------
           }
        });
        }
</script>
</html>

  <?php
  }
   ?>
