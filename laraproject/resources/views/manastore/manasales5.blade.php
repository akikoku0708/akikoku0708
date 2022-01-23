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
  <a href="{{ url('manastore/manasales') }}" class="alink">
  <button id="buttona0"class="btncss25">受注一覧</button></a>
  <a href="{{ url('manastore/manasales3') }}" class="alink">
  <button id="buttona2"class="btncss25">納期回答</button></a>
  <a href="{{ url('manastore/manasales5') }}" class="alink">
  <button id="buttona3"class="btncss25">納期連絡</button></a>
</td></tr></table></br>
<!-- +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
<?php
 //-------------------------------------------------------
   $arrsa1=array();  $arrsa2=array(); $cat=0;
   $arrsa5=array();  $arrsa6=array(); $cat5=0;
   $arrcust=array();
//----------------------------------------------------------------
if(isset($sales)){  foreach($sales as $ales1){
  foreach($ales1 as $ales2){    $arrsa1[]=$ales2; $cat +=1;
if($cat==28){$arrsa2[]=$arrsa1;  $arrsa1=array(); $cat=0;    }  } }}
//-----------------------------------------------------------------------
if(isset($address)){    foreach($address as $ales5){
   foreach($ales5 as $ales6){    $arrsa5[]=$ales6; $cat5 +=1; //echo $ales6;
if($cat5==9){$arrsa6[]=$arrsa5;  $arrsa5=array(); $cat5=0;    }  } }}
//--------------------------------------------------------------------
for($k3=0;$k3<count($arrsa2);$k3++){
  $arrcust[]=$arrsa2[$k3][12]; //echo $arrsa2[$k3][12];
}
$arrcust=array_unique($arrcust);
//----------------------------------------------------------------------

date_default_timezone_set ('Asia/Tokyo');
$dateto=date('YmdHis');
$dateto2=date('Ymd');
$dateto3=date('Y-m-d');
$datetoy=date("Ymd", strtotime("-1 day"))
 ?>

<!-- ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->

<table border="1"width="90%" align="center" bordercolor="#87ceeb"class="he600"cellspacing="0">
  <tr><td width="20%"style=" vertical-align:top">
    <h4 align="center">顧客コード</h4>
<?php
   echo '<table border="0"width="100%"align="center" class="ft11">';
   foreach($arrcust as $cust){

   echo '<tr class="he30">
   <td align="center"id="'.$cust.'" onclick="func3(this);"><span class="spancss22">'.$cust.'</span></td></tr>';
  }
  echo '</table>';
 ?>
</td><td align="center"width="80%"style=" vertical-align:top">
<!-- ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
<h3 align="center">出荷予定</h3>
    <div align="center" class="ft11"id="message">顧客コードで選択</div>
</td></tr></table>



</td></tr></table>
</body>
<script type="text/javascript">
$(function() {   read();          });

//------------------------------------------------------
var idkk=''; var arrm=[]; var cust=''; var ponumber='';
//----------------------------------------------------
var idkk3='';
function func3(ele3){
idkk=ele3.id;
read();
}
//--------------------------------------------
function func(ele){       arrm=[];
idkk=ele.id;
for(var i=0;i<5;i++){
 cust=$("input[name="+idkk+i+"]").val();
if(cust==idkk+i){  ponumber=$("input[name=ponumber"+i+"]").val();  arrm.push(ponumber); }}
arrm=arrm.join('|');
read();
}
//----------------------------------------------------------------------
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
        var vname3 = ponumber;
        var vname4=123;
        $.ajax({
           type:'POST',
           url:"{{ route('/manastore/manastoreajax/manasales5ajax') }}",
           data:{kname1:vname1, kname2:vname2, kname3:vname3,kname4:vname4        },
           success:function(data){
   //-------------------------------------------------------------------------
       var sales5=data['sales'];   main5a='';  main5b=''; arrtot=[]; var cnt=0;
       var address5=data['address'];
       for(var j=0;j<sales5.length;j++){
         if(sales5[j]['custcode']==data['zname2']){
          if(sales5[j]['storeid']==data['storeid']){
          if(sales5[j]['shipcode']==null){
            cnt +=1;
         main5a='<tr bgcolor="#cccccc"class="he30"align="center"><td>'+sales5[j]['product']+'</td><td>'+sales5[j]['numitem']+'</td><td>'+sales5[j]['pricem']
         +'</td><td>'+sales5[j]['quantity']+'</td><td>'+sales5[j]['amount']+'</td><td>'+sales5[j]['deliplan']
         +'</td><tr>'
         +'<input type="hidden"name="'+sales5[j]['custcode']+cnt+'"id="'+sales5[j]['custcode']+cnt+'"value="'+sales5[j]['custcode']+cnt+'" >'
         +'<input type="hidden"name="ponumber'+cnt+'"id="ponumber'+cnt+'"value="'+sales5[j]['ponumber']+'" >'
         +'';
         main5b=main5b+main5a;
         arrtot.push(sales5[j]['amount']);
       }   }   }}

        var sum = 0;
       for (var v=0;v<arrtot.length; v++) {  sum += arrtot[v];   }

       if(data['zname2']!=null){
       $('#message').html('<div id="deli'+data['zname2']+'"></div>'
       +'<table width="90%"border="1"bordercolor="#fff"cellspacing="0"class="ft11">'
       +'<tr class="he30"align="center"bgcolor="#999999"><td>商品名</td><td>型番</td><td>単価</td><td>数量</td><td>金額</td><td>出荷予定日</td>  </tr>'
       +main5b
       +'<tr class="he30"align="center"bgcolor="#999999"><td colspan="4"><td>'+sum+'</td><td></td></tr>'
       +'</table>'
       +'<p><button id="'+data['zname2']+'" onclick="func(this);"class="btncss25">納期連絡</button></p>'
       +'');
       }

      if(data['zname1']!=null){
      $('#deli'+data['zname2']).html('顧客番号：'+data['zname2']+'へ納期回答のメールを送信しました。');
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
