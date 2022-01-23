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
        <meta http-equiv='cache-control' content='no-cache'>
        <meta http-equiv='expires' content='0'>
        <meta http-equiv='pragma' content='no-cache'>
        <meta name="csrf-token" content="{{ csrf_token() }}" />
    <script src="{{ asset('/js/jquery-1.11.2.js') }}"></script>

      <script src="https://code.jquery.com/jquery-3.0.0.min.js"></script>



        <title>Home</title>

    </head>
    <style type="text/css">


    </style>



    <body>
      @extends('layouts.add')
      <?php
       $submenu3='';$codeitem='';
    if(isset($_GET['submenu3'])){	$submenu3=$_GET['submenu3'];		}
      if(isset($_GET['codeitem'])){	$codeitem=$_GET['codeitem'];		}
       ?>
    <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
    <style>
    input[type=checkbox]{width:20px;height:20px;}
    </style>

    <table width="100%"class="he40"align="center"bgcolor="#483d86"border="0"><tr>
    <td width="10%"align="center" >
    <a href="{{ url('manager/home') }}" class="acss5" > meisis </a> </td >
    <td class="ft11"width="70%"align="center"style="color:#ffffff;">
    <?php
    $manakeyword='xhome_xhome2_xproduct_cart_'.$codeitem.'';
     if($loginname!=''){  echo ''.$loginname.'様ログイン中';     }            ?>
  </td><td width="20%"align="right">
    @if($submenu3!='')
    <a href="{{ url('manager/home3') }}?submenu3=<?php echo $submenu3; ?>" >
      <button class="btncss25">戻る</button></br>
    @elseif($codeitem!='')
    <a href="{{ url('manager/product') }}?codeitem=<?php echo $codeitem; ?>" >
      <button class="btncss25">戻る</button></br>
    @else
    <a href="{{ url('manager/home') }}" >
      <button class="btncss25">戻る</button></br>
 @endif
    </td></tr></table><hr class="hr">
    <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
    @error('token') <div class="alert alert-danger">{{ $message }}</div> @enderror
    <!-- **************************login************************************** -->
     <table width="100%"class="he1500"border="0"cellspacing="0">
       <tr><td style="vertical-align:top;">
  <!-- =======================top======================================= -->
<?php
//-------------------------------------------------------
$arrkk1=array();  $arrkk2=array(); $arrkk3=array();$cntt=0;
if(isset($cartpo)){
foreach($cartpo as $mkk){   foreach($mkk as $mkk2){
 $arrkk1[]=$mkk2;  $cntt+=1;
if($cntt==2){ $arrkk2[]=$arrkk1;  $arrkk1=array(); $cntt=0;    }
}}}
for($k=0;$k<count($arrkk2);$k++){
  if($arrkk2[$k][0]=='cart'){
     $arrkk3[]=$arrkk2[$k][1];
   }}
$jsonarray=json_encode($arrkk3);
 ?>

<h3 align="center">送り先</h3>
<table width="80%" align="center" border="0"><tr><td width="10%"></td>
<td align="center"width="80%"></td>
<td width="10%"><a href="{{ url('manager/address') }}?codeitem=<?php echo $codeitem; ?>" >
 <button class="btncss25">新規・編集</button> </a></td></tr></table>

  <?php

  $arrtt1=array();$arrtt2=array();  $cnt2=0; $addcode='';
  if(isset($address)){
  foreach($address as $mkk){   foreach($mkk as $mkk2){
    $arrtt1[]=$mkk2;  $cnt2+=1; //echo $mkk2;
  if($cnt2==9){ $arrtt2[]=$arrtt1;  $arrtt1=array(); $cnt2=0;    }  } }
  }
  $ctk=0;
  if(isset($custcodez)){ //echo $custcodez;
 for($t=0;$t<count($arrtt2);$t++){  //echo $arrtt2[$t][1];
    if($arrtt2[$t][1]==$custcodez){
      if($arrtt2[$t][8]=='checked'){ $addcode=$arrtt2[$t][7]; $ctk +=1;
?>

<?php
echo '  <table width="80%" cellspacing="0"bordercolor="#fff"border="1"align="center">';
  echo'<tr align="center"bgcolor="#cccccc"class="ft11">
  <td width="10%">受取人</td><td width="10%">郵便番号</td>
  <td width="60%"class="he30">住所</td><td width="20%">電話番号</td></tr>';
  echo '<tr align="center"bgcolor="#cccccc"class="ft11">
  <td width="10%">'.$arrtt2[$t][5].'</td><td width="10%">'.$arrtt2[$t][3].'</td>
  <td width="60%"class="he30">'.$arrtt2[$t][4].'</td><td width="20%">'.$arrtt2[$t][6].'</td></tr>';
  echo '</table></br><hr width="80%">';
}}}
}else{ }

if($ctk>0){}else{
  echo '  <table width="80%" cellspacing="1"border="0"align="center">';
  echo '<tr align="center"class="he30"><td class="ft11"colspan="4">';
  echo '送り先はログインしてから設定する。</td></tr>';
  echo '</table><hr width="80%"></br>';
}
   ?>

<h3 align="center">カート詳細</h3>
<table width="80%" align="center" border="0"><tr><td >
  <div id="cartid"></div>
</td></tr></table>

 <table width="100%" align="center" border="0"><tr><td >
  <div id="cartid2"></div>
</td></tr></table>

<div id="za1"></div>

<!-- =======================top======================================= -->
</td></tr></table>



</body>
<script type="text/javascript">
//-----------------------------------------------------
var custcode='<?php echo $custcode; ?>';
var codeitem='<?php echo $codeitem; ?>';
var ctk='<?php echo $ctk; ?>';
var addcode='<?php echo $addcode; ?>';
var manakeyword='xhome_xhome2_xproduct_cart_'+codeitem;
var arrpo=JSON.parse('<?php echo $jsonarray; ?>');

//-------------------------------------------------
var quantity; var ponumber;
var idkb; var xb=555;
//-----------------------------------------------
function funcb(ele){
idkb=ele.id;
xb = idkb.replace( /spanbtnmb/g , "" ) ;
xb=Number(xb);
ponumber=$('#ponumber'+xb).val();
quantity=$('#quantity'+xb).val();//
quantity=Number(quantity)-1;
if(quantity>=0){}else{  quantity=0;  }
dele="";
read();
}
//-----------------------------------------------
var idka; var xa=666;
//----------------------------------------------------
function funca(elea){
idka=elea.id;
xa = idka.replace( /spanbtnma/g , "" ) ;
xa=Number(xa);
ponumber=$('#ponumber'+xa).val();
quantity=$('#quantity'+xa).val();
quantity=Number(quantity)+1;
dele="";
read();
}
//-----------------------------------------------
var idk4; var x4; var dele;
//~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
function fundele(ele4){  //dele
idk4=ele4.id;
x4 = idk4.replace( /dele/g , "" ) ;
dele="dele";
quantity=$('#quantity'+x4).val();
ponumber=$('#ponumber'+x4).val();
read();
}
//~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
var ponum; var arrpc=[];
function funorder(ele7){
for(var e=0;e<arrpo.length;e++){
 for(var z=0;z<20;z++){
ponum=$('#ponumber'+z).val();
quantity=$('#quantity'+z).val();
if(arrpo[e]==ponum){
arrpc.push(ponum+'|'+quantity);
}}}
arrpc=arrpc.join('_');
read();
}
//~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
//------------------------------------------------
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

read();

function read(){

        var cname1=arrpc;
        var cname2=dele;
        var cname3=ponumber;
        var cname4=quantity;
      　var cname5=addcode;

        $.ajax({
           type:'POST',
           cache: false,
           url:"{{ route('manager/cartajax') }}",
           data:{vname1:cname1, vname2:cname2,vname3:cname3, vname4:cname4, vname5:cname5
           },
           success:function(data){
//-------------------------------------------------------------------------
var maintb=''; var maintb2=''; var arrcc=[]; var ctt1=0; var logink=null;
var loginid; var arrv=[];
//--------------------------------------------
var bmm;var bmm2;
var cartm=data['cartm'];      var custcode=data['custcode'];
for(var i=0;i<cartm.length;i++){
loginid=cartm[i]['loginid'];
  if(cartm[i]['status']=='cart'){ ctt1 +=1;
subtotal=Number(cartm[i]['pricem'])*Number(cartm[i]['quantity']);
arrcc.push(subtotal);
arrv.push(cartm[i]['ponumber']);
  maintb='<table width="100%"cellspacing="0"border="1"bordercolor="#fff"><tr><td width="20%"align="right"rowspan="2">'
  +'<input type="hidden"name="quantity'+i+'" id="quantity'+i+'" value="'+cartm[i]['quantity']+'" >'
  +'<input type="hidden" name="storeid'+i+'" id="storeid'+i+'" value="'+cartm[i]['storeid']+'" >'
  +'<input type="hidden" name="numitem'+i+'" id="numitem'+i+'" value="'+cartm[i]['numitem']+'" >'
  +'<input type="hidden" name="ponumber'+i+'" id="ponumber'+i+'" value="'+cartm[i]['ponumber']+'" >'
  +'<input type="hidden" name="storename'+i+'" id="storename'+i+'" value="'+cartm[i]['storename']+'" >'
  +'<input type="hidden" name="itemk'+i+'" id="itemk'+i+'" value="'+cartm[i]['itemk']+'" >'
  +'<input type="hidden" name="product'+i+'" id="product'+i+'" value="'+cartm[i]['product']+'" >'
  +'<input type="hidden" name="size'+i+'" id="size'+i+'" value="'+cartm[i]['size']+'" >'
  +'<input type="hidden" name="color'+i+'" id="color'+i+'" value="'+cartm[i]['color']+'" >'
  +'<input type="hidden" name="stock'+i+'" id="stock'+i+'" value="'+cartm[i]['stock']+'" >'
  +'<input type="hidden" name="jancode'+i+'" id="jancode'+i+'" value="'+cartm[i]['jancode']+'" >'
  +'<input type="hidden" name="picture'+i+'" id="picture'+i+'" value="'+cartm[i]['picture']+'" >'
  +'<input type="hidden" name="weight'+i+'" id="weight'+i+'" value="'+cartm[i]['weight']+'" >'
  +'<input type="hidden" name="codeitem'+i+'" id="codeitem'+i+'" value="'+cartm[i]['codeitem']+'" >'
  +'<img src="../storage/upload/'+cartm[i]['storeid']+'/'+cartm[i]['picture']+'" class="imgcss22">'
  +'</td><td width="40%"class=""bgcolor="#66ff99"style="vertical-align:top">'
  +'<span class="ft11"><strong>商品名:　'+cartm[i]['product']+'</strong></span>'
  +'<div class="ft11">型番:　'+cartm[i]['numitem']+'</div>'
  +'<div class="ft11">色:　'+cartm[i]['color']+'</div>'
  +'<div class="ft11">サイズ：　'+cartm[i]['size']+'</div>'
  +'</td><td width="40%"class=""bgcolor="#66ff99"style="vertical-align:top">'
  +'<span class="ft11"><strong>単価:　'+cartm[i]['pricem']+' 円</strong></span>'
  +'<input type="hidden"name="price'+i+'" id="price'+i+'" value="'+cartm[i]['pricem']+'" >'
  +'<div class="ft11">数量:　'
  +'<button class="btncss22"id="spanbtnmb'+i+'" onclick="funcb(this);"> - </button>'
  +'<span style="padding:0px 10px 0px 10px"class="ft11"name="quantt'+i+'"id="quantt'+i+'">'+cartm[i]['quantity']+'</span>'
  +'<button class="btncss22" id="spanbtnma'+i+'"onclick="funca(this);"> + </button>'
  +'<div class="ft11">在庫:　'+cartm[i]['stock']+'</div>'
  +'</td></tr>'
  +'<tr align="center"bgcolor="#cccccc"><td height="20">'
  +'<button class="btncss25"id="dele'+i+'"onclick="fundele(this);">削除</button>'
  +'</td><td class="ft11"><strong>'
  +'小計：<span id="subto'+i+'">'+subtotal+'</span>円</strong>'
  +'</td></tr>'
  +'</table><div class="">&nbsp;</div>';
$('#cartid').append('<div id="'+cartm[i]['ponumber']+'"></div>');
$('#'+cartm[i]['ponumber']+'').html(maintb);
}}
//---------------------------------------
arrv=arrv.join('_');
var sumk=0; var tk=cartm.length+1;
for(var v = 0; v < arrcc.length; v++) {   sumk += arrcc[v];  }
$('#cartid').append('<div id="divk'+cartm.length+'"></div>');
$('#divk'+cartm.length+'').html('<p align="right"class="ft11"><strong>合計:    '+sumk+'円</strong></p>');
//-----------------------------------------------------------------------
$('#cartid').append('<div id="divk'+tk+'"></div>');
  if(ctt1>0){
    if(custcode!=null){
      $('#divk'+tk+'').html('<p align="center">'
    +'<a href="{{ url('manager/payment') }}?codeitem='+codeitem+'&arrp='+arrv+'">'
      +'<button onclick="funorder(this);"class="btncss25">注文確定</button></a></p>');
   }else{
      $('#divk'+tk+'').html(''
      +'<p align="center"class="ft11">'
      +'注文は<strong>ログイン</strong>と<strong>送り先</strong>を指定するが必要です。</p>'
      + '<p align="center">'
      +'<a href="{{ url('customs/signin') }}?manakeyword='+manakeyword+'">'
      +'<button class="btncss25">ログイン</button></a></p>');
    }

}else{   $('#divk'+tk+'').html('<p align="center"class=""></p>');                 }
$('#'+data['kname9']).html('');
//--------------------------------------------------------
/*
var tdcss1 = { 'padding-left':'9px','background-color':'#afeeee','vertical-align':'top','font-size':'11px','border-radius':'3px'}
$('.tdcss1').css(tdcss1);
*/
   //---------------------------ok-------------------
           }
        });

}


</script>

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
