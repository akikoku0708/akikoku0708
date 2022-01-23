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
//--------------------------------------------------------------
$arrsa1=array();  $arrsa2=array(); $cat=0; $arrsa5=array();  $arrsa6=array(); $cat5=0;
 $arrsa7=array();$arrsa8=array(); $purchser='';
 $arrkv1=array(); $arrkv2=array();
 //-------------------------------------------
 $arrcust=array();$arrsum1=array(); $arrsum2=array();
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
    $arrsa8[]=$arrsa2[$k3][8]; //echo $arrsa2[$k3][8];
    $arrcust[]=$arrsa2[$k3][12];
  //  echo $arrsa2[$k3][12];
}
$arrsa8=array_unique($arrsa8);  //address
$arrcust=array_unique($arrcust); //custcode
//----------------------------------------------------------------------
foreach($arrcust as $rsa8){
for($k=0;$k<count($arrsa2);$k++){
   if($arrsa2[$k][12]==$rsa8){ //custcode
 if($storeid==$arrsa2[$k][9]){ //storeid
  if($arrsa2[$k][10]=='order'){  //status
// if($arrsa2[$k][25]!=''){
$arrkv1[]=array($arrsa2[$k][0],$arrsa2[$k][1],$arrsa2[$k][2],$arrsa2[$k][3],$arrsa2[$k][4],$arrsa2[$k][5],
          $arrsa2[$k][6],$arrsa2[$k][7],$arrsa2[$k][8],$arrsa2[$k][9],$arrsa2[$k][10],$arrsa2[$k][11],
          $arrsa2[$k][12],$arrsa2[$k][22],$arrsa2[$k][23],$arrsa2[$k][25]
);
//}
}}}}}

date_default_timezone_set ('Asia/Tokyo');
$dateto=date('YmdHis');
$dateto2=date('Ymd');
$datetoy=date("Ymd", strtotime("-1 day"))
 ?>
 <!-- ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->

 <!-- ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->

 <h3 align="center">納期回答</h3>
<table border="0" width="96%"align="center" class="ft11">
  <tr><td align="center"class="he30"><div id="message"></div>
 </td></tr></table>
  <?php

  $arrsum3=array();$arrsum4=array();
  echo '<table border="1" width="96%"align="center" bordercolor="#99ffff"cellspacing="0"class="ft11">';
  echo '<tr bgcolor="#999999"align="center"class="he30"><td>No</td>
  <td>日付</td> <td >注文番号</td><td>商品名</td><td>商品型番</td><td>商品単価</td><td>注文数量</td><td>商品金額</td>
  <td>購入者</td><td >支払状況</td><td >出荷日程</td><td >出荷数量</td><td >納期回答</td>
  </tr>';
 echo '<tr align=""><td class="padd1"colspan="12">&nbsp;<span></span></td></tr>';
 $kkt3=0; $arrx=array();
 foreach($arrsa8 as $vvsa8){
  ////---------------------------------------------------------------------
   for($v5=0;$v5<count($arrkv1);$v5++){
     if(($key=array_search($arrkv1[$v5][12],$arrx))!==false){     }else{$arrx[]=$arrkv1[$v5][12];
     echo '<tr align=""><td class="padd1"colspan="3">顧客番号：'.$arrkv1[$v5][12].'<span></span></td>
     <td align="right"colspan="7"> <strong><div id="deli'.$arrkv1[$v5][12].'"></div></strong></td></tr>';
     }
  //------------------------------------------------------------------------
   if($arrkv1[$v5][8]==$vvsa8){

     //$datedeli=date('Y-m-d');
     $datedeli='';
     if($arrkv1[$v5][13]==''){   }else{  $datedeli=date('Y-m-d', strtotime($arrkv1[$v5][13]));  }
      $dateho3=date('Y-m-d', strtotime($arrkv1[$v5][0]));


     $kkt3 +=1;
       echo '<tr id="trtr'.$arrkv1[$v5][1].'"bgcolor="#cccccc"class="he30"align="center"><td>'.$kkt3.'</td>
       <td class="padd1">'.$dateho3.'</td><td class="padd1">'.$arrkv1[$v5][1].'</td>
       <td class="padd1">'.$arrkv1[$v5][2].'</td><td class="padd1">'.$arrkv1[$v5][3].'</td>
       <td class="padd1">'.$arrkv1[$v5][4].'</td><td>'.
       $arrkv1[$v5][5].'</td><td class="padd1">'.$arrkv1[$v5][6].'</td><td class="padd1">'.$arrkv1[$v5][7].'</td>
    <td class="padd1">'.$arrkv1[$v5][15].'</td> <td class="">
   <input type="date"name="shipdate'.$v5.'"id="shipdate'.$v5.'"value="'.$datedeli.'"class="inputcss21" ></td>
     <td class="">'.$arrkv1[$v5][5].'<input type="hidden"class="inputcss22"name="shipqty'.$v5.'"id="shipqty'.$v5.'"value="'.$arrkv1[$v5][5].'" ></td>
     <td class="padd1"><span id="answerbtn'.$v5.'"><button id="answer'.$v5.'"class="btncss22">確定</button></span></td>';
     if($arrkv1[$v5][10]=='order'){    }
       echo '</tr>';
       echo '<input type="hidden"name="ponumber'.$v5.'"id="ponumber'.$v5.'"value="'.$arrkv1[$v5][1].'" >';
   $arrsum3[]=$arrkv1[$v5][6]; $arrsum4[]=$arrkv1[$v5][6]; //amount
}}
$res3 = array_sum($arrsum3); $arrsum3=array();
for($v6=0;$v6<count($arrsa6);$v6++){
if($vvsa8==$arrsa6[$v6][7]){
  $addr3='受取人：'.$arrsa6[$v6][5].'　　電話番号：'.$arrsa6[$v6][6].' &nbsp; &nbsp; 送り先： 〒'.$arrsa6[$v6][3].$arrsa6[$v6][4];
}}

if($res3>0){
   echo '<tr align=""><td class="padd1"colspan="12">'.$addr3.'</td></tr>';
  echo '<tr bgcolor="#999999"align="center"><td colspan="7">小計<td>'.$res3.'</td> <td colspan="5"></td></tr>';
echo '<tr align=""><td class="padd1"colspan="12">&nbsp;</td></tr>';
} }
$res4 = array_sum($arrsum4);
if($res4>0){
  echo '<tr bgcolor="#66ff99"align="center"><td colspan="7">合計<td>'.$res4.'</td> <td colspan="5"></td></tr>';
}


  echo '</table></br>';

   ?>
 <!-- ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->


<?php

  $jsonTest=json_encode($arrcust);

 ?>





</td></tr></table>

</body>


<script type="text/javascript">

//------------------------------------------------------

var idkk; var arrm=[]; var cust;
function func(ele){       arrm=[];  idkk=ele.id;
for(var i=0;i<20;i++){
 cust=$("input[name=custcode"+i+"]").val();
if(idkk==cust){
var ponumber=$("input[name="+cust+i+"]").val();
arrm.push(ponumber);
 }}
arrm=arrm.join('|');
read();
}
//-------------------------------------------------------------------------------------
  var shipdate=''; var shipqty=''; var ponumber=''; var xt=0;
    for (var j = 0; j < 20; j++) {
    $('#answer' + j).click((function(j) {
      return function() { xt=j;
  //--------------------------------------------------------------------

  shipdate=$("input[name=shipdate"+j+"]").val();
  shipqty=$("input[name=shipqty"+j+"]").val();
  ponumber=$("input[name=ponumber"+j+"]").val();
    read();
//----------------------------------------------------------------------------------
}    })(j));	}
//----------------------------------------------------------------

//-------------------------------------------------------------------------------------
  var xt2=0;
    for (var n = 0; n< 20; n++) {
    $('#shipped' + n).click((function(n) {
      return function() { xt2=88; xt=n;
  //--------------------------------------------------------------------
  ponumber=$("input[name=ponumber"+n+"]").val();
  read();
//----------------------------------------------------------------------------------
}    })(n));	}
//----------------------------------------------------------------

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
　　
        $.ajax({
           type:'POST',
           url:"{{ route('/manastore/manastoreajax/manasales3ajax') }}",
           data:{kname1:vname1, kname2:vname2,kname3:vname3, kname4:vname4, kname5:vname5,
             kname6:vname6,kname7:vname7
           },
           success:function(data){
   //-------------------------------------------------------------------------
        $('#message').html('<table bgcolor="#66ff99"class="ft11"style="border-radius:3px;padding:0px 5px 0px 5px;"><tr><td>納期回答成功：'
        +'注文番号：'+data['zname5']+'　出荷日：'+data['zname3']+'　数量：'+data['zname4']
        +'</td></tr></table>');

           $('#deli'+data['zname2']).html('顧客番号：'+data['zname2']+'へ納期回答のメールを送信しました。');
             //-----------ok-------------------
           }
        });
        }
        </script>

</html>


  <?php
  }
   ?>
