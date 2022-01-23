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
<!-- ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
 <h3 align="center">出荷手配</h3>
<?php
date_default_timezone_set ('Asia/Tokyo');
$dateto=date('YmdHis');
$dateto2=date('Y-m-d');
 //-------------------------------------------------------
   $arrsa1=array();  $arrsa2=array(); $cat=0;
   $arrsa5=array();  $arrsa6=array(); $cat5=0;
   $arrcust=array();
//----------------------------------------------------------------
if(isset($sales6)){  foreach($sales6 as $ales1){
  foreach($ales1 as $ales2){    $arrsa1[]=$ales2; $cat +=1;
if($cat==28){$arrsa2[]=$arrsa1;  $arrsa1=array(); $cat=0;    }  } }}
//-----------------------------------------------------------------------
if(isset($address6)){    foreach($address6 as $ales5){
   foreach($ales5 as $ales6){    $arrsa5[]=$ales6; $cat5 +=1; //echo $ales6;
if($cat5==9){$arrsa6[]=$arrsa5;  $arrsa5=array(); $cat5=0;    }  } }}
//--------------------------------------------------------------------
//echo $storeid;
for($k3=0;$k3<count($arrsa2);$k3++){
  if($arrsa2[$k3][22]==$dateto2){
    if($arrsa2[$k3][10]=='order'){
    if($arrsa2[$k3][9]==$storeid){

   $arrcust[]=$arrsa2[$k3][12];

}}}
  }
$arrcust=array_unique($arrcust);     $arrcust=array_values($arrcust);
$jsonTest=json_encode($arrcust);
//----------------------------------------------------------------------
?>
<table align="center"width="100%"border="0"><tr bgcolor="#cccccc"align="center"><td width="20%"style="vertical-align:top">
<?php

echo '<table width="100%"align="center"border="0" ><tr align="center"class="he400">
<td style="vertical-align:top"><h3 align="center"">顧客コード</h3>';

echo '<div id="shipt"></div>';
echo '</td></tr></table>';
 ?>
<!-- ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
</td><td width="80%"style="vertical-align:top"><div id="message"></div>
  <?php
if(count($arrcust)>0){}else{ echo '<h4>本日出荷予定がありません</h4>'; }
   ?>
</td></tr></table>
<!-- ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->


</td></tr></table>
</body>
<script type="text/javascript">
//-----------------------------------------
$(function () {});
var arrcust=JSON.parse('<?php echo $jsonTest; ?>');
 var acust1=''; var acust2='';

for(var a=0;a<arrcust.length;a++){
  acust1='<button id="'+arrcust[a]+'" class="spancss22"onclick="func(this);" >'+arrcust[a]+'</button>';
   acust2=acust2+acust1;
	}
	$('#shipt').html(acust2);

//------------------------------------------------
var idkk; var cust;
function func(ele){ idkk=ele.id; ikey=''; read(); }
//-------------------------------------------------------
var checkk='';
  $("#select1").click(function(e){  e.preventDefault();   });

//------------------------------------------------------------
var arrk=[]; var ikey=0;
function select1(){  ikey=100;    arrk=[];
  for(var t=0;t<20;t++){
    checkk=$(':checkbox[name="checkk'+t+'"]:checked').val();
    if(checkk!=null){  arrk.push(checkk);   checkk='';      }
  }
  arrk=arrk.join('|');
  read();
}
//-------------------------------------------------------------
function select2(){  ikey=220;    read();   }
//---------------------------------------------------------
    //-------------------------------------------------------------------------
    $.ajaxSetup({
    headers: {  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')    }
    });
    //--------------------------------------------------------------

   //----------------------------------------------------------------------
      function read(){
        var vname1 = idkk;
        var vname2 = ikey;
        var vname3 = arrk;
        $.ajax({
           type:'POST',
           url:"{{ route('/manastore/manastoreajax/manadelivery6k') }}",
           data:{kname1:vname1, kname2:vname2, kname3:vname3},
           success:function(data){

   //-------------------------------------------------------------------------
      var salek=data['sales6'];
      var maintb='';  var maintb2='';var maintb1=''; var namek; var arrcu=[];
      //--------------------------------------------------------------
      var arrtt=data['zname3']; var deli='';var deli2='';var deli3='';var deli5='';
      var deliplan;
      //-------------------------------------------------------------
       for(var i=0;i<salek.length;i++){
         namek=salek[i]['name'];  deliplan=salek[i]['deliplan'];


          if(salek[i]['status']=='order'){
          if(salek[i]['deliplan']==data['dateto3']){
             arrcu.push(salek[i]['custcode']);
         if(salek[i]['custcode']==data['zname1']){
         maintb=''
+'<tr align="center"class="he30">'+'<td><input type="checkbox"name="checkk'+i+'" id="checkk'+i+'"class="che1"value="'+salek[i]['ponumber']+'"></td>'
+'<td>'+salek[i]['datet']+'</td>'+'<td>'+salek[i]['ponumber']+'</td>'+'<td>'+salek[i]['product']+'</td>'
+'<td>'+salek[i]['numitem']+'</td>'+'<td>'+salek[i]['pricem']+'</td>'+'</td>'
+'<td>'+salek[i]['quantity']+'</td>'+'<td>'+salek[i]['amount']+'</td></tr>'
         maintb2=maintb2+maintb;
}}}
 }
//--------------------------------------------------------------------------------
for(var j=0;j<arrtt.length;j++){
for(var j2=0;j2<salek.length;j2++){
  if(arrtt[j]==salek[j2]['ponumber']){
    deli=''
+'<tr align="center"class="he30">'
+'<td>'+salek[j2]['product']+'</td>'+'<td>'+salek[j2]['numitem']+'</td>'+'<td>'+salek[j2]['pricem']+'</td>'+'</td>'
+'<td>'+salek[j2]['quantity']+'</td>'+'<td>'+salek[j2]['amount']+'<td>'+salek[j2]['ponumber']+'</td>'
+'</td></tr>'
    deli2=deli2+deli;

}}}
//------------------------------------------------------------------------------


if(data['zname2']!=100&&data['zname2']!=220){
  $('#message').html('<h3 align="center"">出荷選択</h3>'
  +'<p class="ft11">顧客コード：'+data['zname1']+'　　購入者：'+namek +'</p>'
          +'<table width="90%"border="1"bordercolor="#fff"cellspacing="0"class="ft11">'
          +'<tr bgcolor="#999999"align="center"class="he30">'
          +'<td>出荷選択</td>' +'<td>注文日</td>'+'<td>注文番号</td>'+'<td>商品名</td>'+'<td>型番</td>'+'<td>単価</td>'
          +'<td>数量</td>'+'<td>金額</td>'
          +maintb2+'</table>'
          +'<p  align="center"><button id="select1"onclick="select1();" class="btncss25">選択</button></p>'
        );

  }else{  }
  //-----------------------------------------------------------
if(data['zname2']==100){
    $('#message').html('<h3 align="center"">出荷選択</h3>'
    +'<p class="ft11">顧客コード：'+data['zname1']+'　　購入者：'+namek +'</p>'
            +'<table width="90%"border="1"bordercolor="#fff"cellspacing="0"class="ft11">'
            +'<tr bgcolor="#999999"align="center"class="he30">'
            +'<td>商品名</td>'+'<td>型番</td>'+'<td>単価</td>'
            +'<td>数量</td>'+'<td>金額</td>'+'<td>注文番号</td>'
            +deli2+'</table>'
            +'<p  align="center"><button id="select2"onclick="select2();"class="btncss25">出荷確定</button></p>'
          );
}

//------------------------------------------------------------
if(data['zname2']==220){
  $('#message').html('<h3 align="center"">出荷明細</h3>'
          +'<p class="ft11">出荷番号：'+data['zname4']+'　　受取人：'+namek +'</p>'
          +'<table width="90%"border="1"bordercolor="#fff"cellspacing="0"class="ft11">'
          +'<tr bgcolor="#999999"align="center"class="he30">'
          +'<td>商品名</td>'+'<td>型番</td>'+'<td>単価</td>'
          +'<td>数量</td>'+'<td>金額</td>'+'<td>注文番号</td>'
          +deli2+'</table>'
         +'<p  align="center"><a href="{{ url('manastore/manadelivery7') }}?ship='+data['zname4']+'"><button class="btncss25">出荷伝票</button></a></p>'
        );
}
//-----------------------------------------------------------------------

             //-----------ok-------------------
           }
        });
        }
</script>

</html>


<?php
}
 ?>
