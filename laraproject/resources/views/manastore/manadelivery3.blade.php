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

   <!-- ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
   <table border="0" width="90%"align="center" class="ft11"><tr><td align="right" >
     <a href="{{ url('manastore/manadelivery') }}">
    <button id="buttona0"class="btncss25">出荷予定一覧</button></a>
    <a href="{{ url('manastore/manadelivery3') }}">
    <button id="buttona1"class="btncss25">出荷履歴</button></a>
    <a href="{{ url('manastore/manadelivery7') }}">
    <button id="buttona2"class="btncss25">出荷伝票</button></a>
       <a href="{{ url('manastore/manadelivery6') }}">
         <button class="btncss25">出荷手配</button></a>

     <!-- ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^  -->
   </td></tr></table></br>
   <!-- ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->

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
   if(isset($sales3)){
   foreach($sales3 as $ales1){   foreach($ales1 as $ales2){
       $arrsa1[]=$ales2; $cat +=1; //echo $ales2;
   if($cat==28){$arrsa2[]=$arrsa1;  $arrsa1=array(); $cat=0;    }  } }
   }
   //-----------------------------------------------------------------------
   if(isset($address3)){
   foreach($address3 as $ales5){   foreach($ales5 as $ales6){
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
   <h3 align="center">出荷履歴</h3>
   <?php

   $arrsum3a=array();$arrsum4a=array(); $ckka=0;
   echo '<table border="1" width="90%"align="center" bordercolor="#ffffff"cellspacing="0" class="ft11">';
   echo '<tr bgcolor="#999999"align="center" class="he30"><td>No</td>
   <td>購入者</td><td>出荷日</td><td>出荷番号</td> <td >注文番号</td><td>商品名</td><td>商品型番</td><td>商品単価</td>
   <td>出荷数量</td><td>商品金額</td>
   </tr>';

   foreach($arrpon1 as $rpona){
  for($v1=0;$v1<count($arrsa2);$v1++){
  if($arrsa2[$v1][1]==$rpona){
  if($arrsa2[$v1][9]==$storeid){
   if($arrsa2[$v1][10]=='shipped'){
    // if($arrsa2[$v1][26]=='paid'){      //}
     $ckka +=1;
     $dateship=date('Y-m-d', strtotime($arrsa2[$v1][22]));
  echo '<tr align="center" bgcolor="#cccccc"class="he30"><td>'.$ckka.'</td><td class="padd1">'.$arrsa2[$v1][7].'</td>  <td class="padd1">'.$dateship.'</td>
   <td class="padd1">'.$arrsa2[$v1][25].'</td><td class="padd1">'.$arrsa2[$v1][1].'</td>
  <td class="padd1">'.$arrsa2[$v1][2].'</td><td class="padd1">'.$arrsa2[$v1][3].'</td><td class="padd1">'.$arrsa2[$v1][4].'</td><td>'.
  $arrsa2[$v1][5].'</td><td class="padd1">'.$arrsa2[$v1][6].'</td>

  </tr>';
  $arrsum3a[]=$arrsa2[$v1][6];$arrsum4a[]=$arrsa2[$v1][6];
  }}}}}

  foreach($arrsa8 as $vvsa8a){
  for($v3=0;$v3<count($arrsa6);$v3++){
  if($vvsa8a==$arrsa6[$v3][7]){
   $addr3a='受取人：'.$arrsa6[$v3][5].'　　電話番号：'.$arrsa6[$v3][6].' &nbsp; &nbsp; 送り先： 〒'.$arrsa6[$v3][3].$arrsa6[$v3][4];
  }}}


  $res3a = array_sum($arrsum3a); $arrsum3a=array();
  if($res3a>0){
    echo '<tr class="he30"><td class="padd1"colspan="12"> '.$addr3a.'  </td></tr>';
   echo '<tr bgcolor="#999999"class="he30"align="center"><td colspan="9">小計<td>'.$res3a.'</td> </tr>';
  echo '<tr align=""><td class="padd1"colspan="12">&nbsp;</td></tr>';
  }
  $res4a = array_sum($arrsum4a);
  if($res4a>0){
   echo '<tr bgcolor="#66ff99"class="he30"align="center"><td colspan="9">合計<td>'.$res4a.'</td> </tr>';
  }
  echo '</table></br>';

    ?>





</td></tr></table>
</body>
<script type="text/javascript">


    //-------------------------------------------------------------------------
    $.ajaxSetup({
    headers: {  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')    }
    });
    //--------------------------------------------------------------
    $("#select1").click(function(e){  e.preventDefault();    read();
     });
   //----------------------------------------------------------------------
      function read(){
        var vname1 = idkk;
        var vname2 = shipm2;

        $.ajax({
           type:'POST',
           url:"{{ route('/manastore/manastoreajax/manadelivery4') }}",
           data:{kname1:vname1, kname2:vname2},
           success:function(data){


             //-----------ok-------------------
           }
        });
        }
</script>

</html>

<script>
/*
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
      */
  </script>

  <?php
  }
   ?>
