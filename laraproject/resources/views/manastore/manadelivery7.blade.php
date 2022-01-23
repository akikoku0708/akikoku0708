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
<!-- ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
<table border="0" width="90%"align="center" class="ft11"><tr><td align="right" >
  <a href="{{ url('manastore/manadelivery') }}">
 <button class="btncss25">出荷予定一覧</button></a>
 <a href="{{ url('manastore/manadelivery3') }}">
 <button class="btncss25">出荷履歴</button></a>

 <a href="{{ url('manastore/manadelivery7') }}">
 <button class="btncss25">出荷伝票</button></a>
    <a href="{{ url('manastore/manadelivery6') }}">
      <button class="btncss25">出荷手配</button></a>

  <!-- ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^  -->
</td></tr></table></br>
<!-- ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
<?php
$shipcode='';
if(isset($_GET['ship'])){   $shipcode= $_GET['ship'];       }
 ?>

 <h3 align="center">出荷書類</h3>
 <?php
  //-------------------------------------------------------
    $arrsa1=array();  $arrsa2=array(); $cat=0;
    $arrsa5=array();  $arrsa6=array(); $cat5=0;
    $arrcust=array();
 //----------------------------------------------------------------
 if(isset($sales7)){  foreach($sales7 as $ales1){
   foreach($ales1 as $ales2){    $arrsa1[]=$ales2; $cat +=1;
 if($cat==26){$arrsa2[]=$arrsa1;  $arrsa1=array(); $cat=0;    }  } }}
 //-----------------------------------------------------------------------
 if(isset($address7)){    foreach($address7 as $ales5){
    foreach($ales5 as $ales6){    $arrsa5[]=$ales6; $cat5 +=1; //echo $ales6;
 if($cat5==9){$arrsa6[]=$arrsa5;  $arrsa5=array(); $cat5=0;    }  } }}
 //--------------------------------------------------------------------
 for($k3=0;$k3<count($arrsa2);$k3++){    $arrcust[]=$arrsa2[$k3][25];  }
 $arrcust=array_unique($arrcust);
 //----------------------------------------------------------------------
 ?>

 <table align="center"width="100%"border="0"><tr bgcolor="#cccccc"align="center"class="he400">
   <td width="20%"style="vertical-align:top">
 <?php

 echo '<table width="90%"align="center"border="0"class="ft11" ></br><strong>出荷番号</strong>';

 sort($arrcust);
 foreach($arrcust as $cust){
   if($cust!=''){
 echo '<tr align="center"class="he30" >
 <td width="100%"class="ft11" id="'.$cust.'" onclick="func(this);"><span class="spancss22">'.$cust.'</span></td></tr>';
 }}
 echo '</table>';
  ?>
 <!-- ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->


</td><td style="vertical-align:top"width="100%">

  <table class="he30"><tr><td>&nbsp;</td></tr></table>

  <table align="center"width="90%" border="0" cellspacing="0">
    <tr align="center"> <td width="20%"style="vertical-align:top">

 <h3 align="center">出荷伝票</h3>
  <div id="message"></div>
<p class="he30"id="mess1">&nbsp;</p>

</td></tr>
</table><hr>
  <table align=""width="60%"border="0"class="he1500"><tr><td style="vertical-align:top">
    <div id="mess3"></div>

    </td><td align="right"style="vertical-align:top">
      <div id="mess4"></div>

</td></tr></table>



</td></tr></table>
</diV>

</td></tr></table>





</td></tr></table>
</body>
<script type="text/javascript">
  var shipcode=''; var shipm1='';var shipm2=''; var custcode='';
$(function () {
  //------------------------------------------
  shipcode='<?php echo $shipcode; ?>';
    if(shipcode!=''){     read();           }
    //----------------------------------------------------
    });
//---------------------------------------------------------------------
var idkk; var ship; var ikey=123;
function func(ele){ shipcode=ele.id; ikey=123; read(); }
//-------------------------------------------------------
//--------------------------------------------------------------
$("#buttona1").click(function(e){  e.preventDefault();  ikey=123; read();  });
//--------------------------------------------------------------
$("#button5").click(function(e){  e.preventDefault();  ikey=555; read();  });
//--------------------------------------------------------------
$("#button6").click(function(e){  e.preventDefault();  ikey=666; read();  });
//----------------------------------------------------------------------
    //-------------------------------------------------------------------------
    $.ajaxSetup({
    headers: {  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')    }
    });

      function read(){
        var vname1 = shipcode;
        var vname2 =ikey;
        var vname3 =shipm2;
        var vname5 =custcode;
        $.ajax({
           type:'POST',
           url:"{{ route('/manastore/manastoreajax/manadelivery7aj') }}",
           data:{kname1:vname1, kname2:vname2, kname3:vname3, kname5:vname5 },
           success:function(data){

        //-------------------------------
        var salek=data['sales7'];     var codeaddress; var arrvv=[];
        var maintb='';  var maintb2='';var maintb1=''; var namek; var ckt=0;
        //----------------------------------------------------
        var addk=data['address7'];  shipm2='';shipm1='';　var storename='';
        //-------------------------------------------
        for(var i=0;i<salek.length;i++){ custcode=salek[i]['custcode'];
          namek=salek[i]['name'];  codeaddress=salek[i]['codeaddress'];
          storename=salek[i]['storename'];
         if(salek[i]['shipcode']==data['zname1']){ ckt +=1;
          maintb=''
 +'<tr align="center"bgcolor="#8fbc8f"class="he30">'
 +'<td>'+salek[i]['product']+'</td>' +'<td>'+salek[i]['numitem']+'</td>'
 +'<td>'+salek[i]['pricem']+'</td>'+'</td>' +'<td>'+salek[i]['quantity']+'</td>'
 +'<td>'+salek[i]['amount']+'<td>'+salek[i]['ponumber']+'</td>'
 +'</td></tr>';
 shipm1=salek[i]['product']+'_'+salek[i]['numitem']+'_'+salek[i]['pricem']
 +'_'+salek[i]['quantity']+'_'+salek[i]['amount']+'_'+salek[i]['ponumber']+'_'+salek[i]['deliplan']+'_'+salek[i]['name'];
 shipm2=shipm2+'|'+shipm1;

          arrvv.push(salek[i]['amount']);
          maintb2=maintb2+maintb;
 }}
 //-----------------------------------------------------------
 var nameh=''; var posth='';var addressh='';var receiverh=''; var phoneh='';
 //----------------------------------------------------

 for(var j=0;j<addk.length;j++){
   if(addk[j]['codeaddress']==codeaddress){
     nameh=addk[j]['name'];
     posth=addk[j]['post'];
     addressh=addk[j]['addresst'];
     receiverh=addk[j]['receiver'];
     phoneh=addk[j]['phone'];
 }
}
var sum = 0;
   for (var v=0;v<arrvv.length; v++) {  sum += arrvv[v];   }
 //----------------------------------------------------------
　if(data['zname2']==123){
$('#message').html(''
        +'<table width="90%"border="0"class="ft11"><tr >'
        +'<td width="50%"class="he60"style="vertical-align:top">'
        +'<strong>送り先　</strong>'
        +'</br>受取人：<strong class="ft11">'+receiverh　+'  様</strong>'
        +'</br>住所：　〒'+posth+addressh
        +'</br>電話番号：　'+phoneh
        +'</td>'
        +'<td  width="50%"style="vertical-align:top"><strong>出荷元</strong></br>　'
        +storename
        +'</td></tr>'
        +'<tr><td colspan="2"class="he20"><hr></td></tr>'
        +'<tr><td>出荷日：　'+data['dateto2']+'</td>'+'<td align="right">出荷番号：　'+data['zname1']
        +'</td></tr>'
        +'</table>'
        +'<table width="90%"border="0"cellspacing="1"class="ft11">'
        +'<tr class="he30"align="center"bgcolor="#999999"><td>商品名</td>'+'<td>型番</td>'+'<td>単価</td>'
        +'<td>数量</td>'+'<td>金額</td>'+'<td>注文番号</td></tr>'
        +maintb2
        +'<tr class="he30"bgcolor="#999999"align="center"><td colspan="4"></td><td>'+sum+'</td><td></td></tr></table>'
      );
      }
   //-------------------------------------------------------------------------
      if(data['zname2']==555){
        $('#mess1').html('<span class="ft11">顧客へ連絡しました。</span>');
     }


     if(data['zname2']==666){
       $('#message').html('<table border="1"><tr><td>'
      +data['zname1']+data['zname2']+'</td></tr><table>');
    }

    //-------------------------------------------------------------------
if(ckt>0){
  $('#mess3').html('<button id="button5"class="btncss25">顧客へ連絡</button>');
    $('#mess4').html('<button id="button6"class="btncss25">プリンタ</button>'
    +'<button id="button7"class="btncss25">ダウンロード</button>');
}
             //-----------ok-------------------
           }
        });
        }
</script>

</html>



  <?php
  }
   ?>
