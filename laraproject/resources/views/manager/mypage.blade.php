
<?php
$loginname='';
$loginname=Session('custsessname');
$custcode=Session('custsesscode');

if($loginname==''){
  // +++++++++++++++++++++++++++++++++++++++++++++++++++++++++
?>
<script>
window.location.href = "{{URL::to('manager/home')}}";
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
    <script src="{{ asset('/js/jquery-1.11.2.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.0.0.min.js"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>Home</title>

</head>
<style type="text/css">

</style>



<body>
  @extends('layouts.add')
  <table width="100%"class="he40"align="center"bgcolor="#483d86"border="0"><tr>
  <td width="10%"align="center" >
  <a href="{{ url('manager/home') }}" class="acss5" > meisis </a> </td >
  <td class="ft11"width="70%"align="center"style="color:#ffffff;">
  <?php     if($loginname!=''){  echo ''.$loginname.'様ログイン中';     }            ?>
</td><td width="20%"align="right"><a href="{{ url('manager/home') }}" >
  <button class="btncss25">HOME</button></a>
  </td></tr></table><hr class="hr">
  @error('token') <div class="alert alert-danger">{{ $message }}</div> @enderror
<!-- **************************login************************************** -->
 <table width="100%"class="he1500"border="0"cellspacing="0"><tr><td style="vertical-align:top;">
   <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
   <table width="100%" align="center" cellspacing="0"border="0"><tr align="right"><td  >
    <a href="{{ url('manager/mypage') }}"class="alink"><button id=""class="btncss25">注文状況</button></a>
    <a href="{{ url('manager/payment') }}"class="alink"><button id=""class="btncss25">支払状況</button></a>
    <a href="{{ url('manager/instock') }}"class="alink"><button id=""class="btncss25">購入履歴</button></a>
    <a href="{{ url('manager/inquiry') }}"class="alink"><button id=""class="btncss25">問い合わせ</button>
   <a href="{{ url('manager/profile') }}"class="alink"><button id="buttonvx"class="btncss25">プロファイル</button></a>
    </td></tr></table><hr>
  <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
@error('token') <div class="alert alert-danger">{{ $message }}</div> @enderror
<!-- ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^ -->
<div id="pa0">  <h2 align="center">注文中一覧</h2></div>

  <table width="80%" align="center" border="0">
　 <tr><td > <div id="message"></div></td></tr>
  </table>
</td></tr></table>
<?php

$payline='';$arrkk=array();$amount='';$paycode='';$productn='';
if(isset($_GET['payline'])){ $payline=$_GET['payline'];
$arrkk=explode('_',$payline);
$paycode=$arrkk[0];
$productn=$arrkk[1];
$amount=$arrkk[2];
 }
 ?>
</body>
</html>

<script type="text/javascript">
//-----------------------------------------
var paycode='';
var amount='';
var productn='';
paycode='<?php echo $paycode; ?>';
amount='<?php echo $amount; ?>';
productn='<?php echo $productn; ?>';

//---------------------------------------
var ponumber; profile=''; var namepro='';
 var rpc=''; passorder=''; var custcodep='';
//-----------------------------------------------------
 var idkb;
function fundelebc(ele){
  idkb=ele.id;
 for(var z=0;z<20;z++){
if(idkb=='delebc'+z){
ponum=$('#ponumber'+z).val();
rpc=ponum;
}}
read();
}

//--------------------------------------------------
var profile;
    //-------------------------------------------------------------------------
    $.ajaxSetup({
    headers: {  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')    }
    });

    //--------------------------------------------------------------
     function funpro2(ele3){
       $('#inp').html(''
       +'</br><table width="60%"class="ft11"align="center"cellspacing="0"bgcolor="#66ff99"bordercolor="#fff"border="1">'
       +'<tr class="ft11"><td align="center"colspan="3">名前を変更</td></tr>'
       +'<tr class="ft11" ><td width="20%"align="center">名前</td>'
       +'<td style="margin:0px" ><input type="text"name="custname" class="inputcss21"value=""></td>'
       +'<td align="center"width="20%"><button id="profilename" onclick="funpro(this);" class="btncss25">変更</button>'
       +'</table>'  );

     }
    //--------------------------------------------------------------


    //--------------------------------------------------------------
     function funpro(ele3){
    namepro= $("input[name=custname]").val();
    custcodep= $("input[name=custcode]").val();
      read();
     }
    //--------------------------------------------------------------
    $("#buttona4").click(function(e){  e.preventDefault();
      read();  });
   //----------------------------------------------------------------------
    read();
      function read(){
        var vname1 = rpc;
        var vname2 = profile;
        var vname3 = passorder;
        var vname4 = namepro;
        var vname5 = custcodep;
        var vname6 = paycode;
        var vname7 = amount;
        var vname8 = productn;
        $.ajax({
           type:'POST',
           url:"{{ route('manager/mypage2') }}",
           data:{kname1:vname1, kname2:vname2, kname3:vname3, kname4:vname4,
                kname5:vname5, kname6:vname6, kname7:vname7, kname8:vname8
           },
           success:function(data){
      //---------------------------------------------------------
      var custa=data['custa']; var listk=''; var shipd=''; var payst;
      var orderall=data['ordera'];
      var loginid=data['loginid'];
      var arrtotal=[];
      //-------------------------------------------------------
  for(var i=0; i<orderall.length; i++){
    if(orderall[i]['deliplan']!=null){  shipd=orderall[i]['deliplan'];  }else{ shipd='';       }

    if(orderall[i]['paycode']!=''){ payst='<div class="font11">納期:　'+shipd+' </div>';
  }else{ payst='<div class="font11"><strong>未払い</strong></div>';      }
        if(orderall[i]['status']=='order'){


        listk='<table width="100%"align="center"cellspacing="0"bordercolor="#ffffff"style="border-radius:5px;"border="1">'
        +'<tr><td width="20%"rowspan="2" align="center"bgcolor="#cccccc">'
        +'<img src="../storage/upload/'+orderall[i]['storeid']+'/'+orderall[i]['picture']+'" class="imgcss21">'
        +'</td><td width="40%"style="vertical-align:top; background-color:#66ff99;  border-radius:5px;padding:5px; ">'
        +'<div class="ft13"><strong>商品名:　'+orderall[i]['product']+'</strong></div>'
        +'<div class="ft11">型番:　'+orderall[i]['numitem']+'</div>'
        +'<div class="ft11">色:　'+orderall[i]['color']+'</div>'
        +'<div class="ft11">サイズ：　'+orderall[i]['size']+'</div>'
        +'</td><td width="40%"style="vertical-align:top; background-color:#66ff99;  border-radius:5px;padding:5px; "">'
        +'<input type="hidden"name="ponumber'+i+'" id="ponumber'+i+'" value="'+orderall[i]['ponumber']+'">'
        +'<div class="ft11"><strong>注文番号:　'+orderall[i]['ponumber']+'</strong></div>'
        +'<div class="ft11">単価:　'+orderall[i]['pricem']+' 円</div>'
        +'<div class="ft11">数量:　'+orderall[i]['quantity']+' </div>'
        +payst
        +'</td></tr>'
        +'<tr align="center"style="vertical-align:top; background-color:#cccccc;"><td >'
        +'<button class="btncss25"id="delebc'+i+'"onclick="fundelebc(this);">削除</button>'
        +'</td><td class="ft13">'
        +'小計：<strong id="subto'+i+'">'+orderall[i]['amount']+'</strong>円'
        +'</td></tr></table><div class="divcss23">&nbsp;</div>';
      arrtotal.push(orderall[i]['amount']);
      $('#message').append('<div id="'+orderall[i]['ponumber']+'"></div>');
      $('#'+orderall[i]['ponumber']+'').html(listk);
   }}
//}
   //-------------------------------------------------
   var sumk=0;
   for(var v = 0; v < arrtotal.length; v++) {   sumk += arrtotal[v];  }
   $('#message').append('<div id="divk11"></div>');
   $('#divk11').html('<p align="right"class="ft13"><strong>合計:    '+sumk+'円</strong></p>');
   //------------------------------------------------------------

    $('#'+data['zname1']+'').html('');
    //-----------------custa---------------------------------------
    for(var j=0; j<custa.length; j++){
      if(loginid==custa[j]['email']){
       custlist='<table width="60%"class="ft11"align="center"bordercolor="#fff" cellspacing="0"border="1">'
        +'<input type="hidden"name="custcode" class="inputcss11"value="' +custa[j]['custcode']+'">'
       +'<tr bgcolor="#cccccc"class="he30"><td width="20%"align="center">顧客コード</td><td colspan="2"width="60%">' +custa[j]['custcode']+'</td></tr>'
       +'<tr bgcolor="#cccccc"class="he30"><td align="center">メールアド</td><td colspan="2" >' +custa[j]['email']+'</td></tr>'
      +'<tr bgcolor="#cccccc"class="he30"><td align="center">名前</td>'
      +'<td style="margin:0px" >' +custa[j]['name']+'</td>'
      +'<td width="20%"align="center">'
      +'<button id="prof2" onclick="funpro2(this);" class="btncss25">編集へ</button>'
      +'</td></tr>'
      +'</table><div id="inp"></div>';

      $('#message4').append('<div id="'+custa[j]['custcode']+'"></div>');
      $('#'+custa[j]['custcode']+'').html(custlist);
    }}

             //-----------ok-------------------
           }
        });
        }
</script>


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


  <!-- +++++++++++++++==++++++++++++++++++++++++++++++++++++ -->
  <?php }   ?>
  <!-- +++++++++++++++==++++++++++++++++++++++++++++++++++++ -->
