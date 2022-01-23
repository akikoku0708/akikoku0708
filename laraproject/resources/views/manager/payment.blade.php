
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
 <!-- ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^ -->
   <h3 align="center">支払</h3>
   <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
   <table width="80%" align="center" border="0">
   <tr align="center"><td width="15%"class="btncss25"id="buttona5">キャリア決済</td>
   <td width="15%"class="btncss25"id="buttona1">クレジットカード</td>
   <td width="15%"class="btncss25"id="buttona2">代金交換</td>
   <td width="15%"class="btncss25"id="buttona3">コンビニ決済</td>
   <td width="15%"class="btncss25"id="buttona4">銀行振込</td>
   <td width="25%">&nbsp;</td>
   </tr></table>

   <div id="pa5"><table width="80%" align="center" border="0"><tr class="ft11"><td width="5%"></td>
   <td align="right"width="5%"class="he30">
   <input type="checkbox"name="line"id="line" onclick="func(this);"class="chek"value="キャリア決済" ></td>
   <td width="10%">Line<td align="right"width="5%">
   <input type="checkbox"name="paypay"id="paypay"onclick="func(this);" class="chek"value="キャリア決済" ></td>
   <td width="10%">Paypay</td><td width="65%">  </td></tr></table>
   </div>
   <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
   <div id="pa1"><table width="80%" align="center" border="0"><tr class="ft11"><td width="5%"></td>
   <td align="right"width="5%"class="he30">
   <input type="checkbox"name="visa"id="visa" onclick="func(this);"class="chek"value="クレジットカード" ></td>
   <td width="10%">visa<td align="right"width="5%">
   <input type="checkbox"name="mastercard"id="mastercard"onclick="func(this);" class="chek"value="クレジットカード" ></td>
   <td width="10%">mastercard</td><td width="65%">  </td></tr></table></div>
   <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
   <div id="pa2"><table width="80%" align="center" border="0"><tr class="ft11"><td width="5%"></td>
   <td align="right"width="5%"class="he30">
   <input type="checkbox"name="cod"id="cod" onclick="func(this);"class="chek"value="代金交換" ></td>
   <td width="10%">代金交換<td align="right"width="5%"> </td>
   <td width="10%"></td><td width="65%">  </td></tr></table></div>
   <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
   <div id="pa3"><table width="80%" align="center" border="0"><tr class="ft11"><td width="5%"></td>
   <td align="right"width="5%"class="he30">
   <input type="checkbox"name="lowson"id="lowson" onclick="func(this);"class="chek"value="コンビニ決済" ></td>
   <td width="10%">Lowson<td align="right"width="5%">
   <input type="checkbox"name="seveneleven"id="seveneleven"onclick="func(this);" class="chek"value="コンビニ決済" ></td>
   <td width="10%">Seveneleven</td><td>
   <input type="checkbox"name="familymart"id="familymart"onclick="func(this);" class="chek"value="コンビニ決済" ></td>
   <td width="10%">Familymart</td> <td width="50%">  </td></tr></table></div>
   <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
   <div id="pa4"><table width="80%" align="center" border="0"><tr class="ft11"><td width="5%"></td>
   <td align="right"width="5%"class="he30">
   <input type="checkbox"name="bank"id="bank" onclick="func(this);"class="chek"value="銀行振込" ></td>
   <td width="10%">Bank<td align="right"width="5%">
   </td> <td width="10%"></td><td width="65%">  </td></tr></table></div>
  <hr width="80%">
<!-- ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^ -->
<div id="message"></div>

<form method="POST"action="/manager/payment2">
    @csrf
<div id="message2"></div>
</form>


<!-- ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^ -->
</td></tr></table>
</body>


</html>
<script type="text/javascript">

var paym=123; var idkk='idkk'; arrpy=[]; var poponum='';var sum = 0; var arrtotal=[];
var paycode;
var ikey=11;
function func(ele){ idkk=ele.id;  paym = $("input[name="+idkk+"]").val(); ikey=222;   read();   }
//----------------------------------------------
function func3(ele){  ikey=888; read(); }
//------------------------------------------------
$(".chek").on("click", function(){
 if ($(this).prop('checked')){  $(".chek").prop('checked', false);  $(this).prop('checked', true);        }
     });
//----------------------------------------------------
  $(function(){    read();    });
    //-------------------------------------------------------------------------
    $.ajaxSetup({
    headers: {  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')    }
    });
    //--------------------------------------------------------------
    $(".btn-submit").click(function(e){  e.preventDefault();   read();  });
   //----------------------------------------------------------------------
      function read(){
         var vname1 = idkk;
         var vname2 = paym;
         var vname3 = poponum;
         var vname4 = sum;
         var vname5 = paycode;
         var vname6 = ikey;
          $.ajax({
           type:'POST',
           url:"{{ route('manager/paymentajax') }}",
           data:{kname1:vname1, kname2:vname2, kname3:vname3, kname4:vname4, kname5:vname5, kname6:vname6    },
           success:function(data){
   //-------------------------------------------------------------------------
   var payment=data['payk']; var maink1=''; var maink2='';
    btnkk1='';btnkk2='';      arrtotal=[]; sum=0;
  //-----------------------------------------------------
  for(var t=0;t<payment.length;t++){
    if(payment[t]['paycode']==null||payment[t]['paycode']==''){
      if(payment[t]['custcode']==data['custcode']){
    maink1='<tr bgcolor="#9acd32"align="center"class="he30"><td>'+payment[t]['datet']+'</td>'
    +'<td>'+payment[t]['ponumber']+'</td>'
    +'<td>'+payment[t]['product']+'</td>'
    +'<td>'+payment[t]['numitem']+'</td>'
    +'<td>'+payment[t]['pricem']+'</td>'
    +'<td>'+payment[t]['quantity']+'</td>'
    +'<td>'+payment[t]['amount']+'</td>'
    +'</tr>';
    arrpy.push(payment[t]['ponumber']);
    arrtotal.push(payment[t]['amount']);
      maink2=maink2+maink1;
}}}

poponum=arrpy.join('|');
paycode=data['paycode'];

if(data['zname6']==222){
btnkk1='<button class="btncss25"id="button3" onclick="func3(this)">支払</button>';
}else{ btnkk2='<p align="center"class="ft11">支払い方法を選択して下さい。</p>';      }

  for (var v2=0;v2<arrtotal.length; v2++) {  sum += arrtotal[v2];   }

if(maink2!=''){
 $('#message').html('<p align="center"class="ft11">未払い商品一覧</p>'
 +'<table align="center"border="0"width="80%"class="ft11"><tr class="he30"bgcolor="#cccccc"align="center">'
 +'<td>日付</td><td>注文番号</td><td>商品名</td><td>型番</td>'
 +'<td>単価</td><td>数量</td><td>金額</td></tr>'+maink2
 +'<tr bgcolor="#cccccc"align="center"><td colspan="6"class="he30">合計</td><td>'+sum+'</td></tr>' +'</table></br>'
);

  $('#message2').html(''
  +'<input type="hidden"name="amount"id=""value="'+sum+'">'
  +'<input type="hidden"name="paycode"value="'+data['paycode']+'">'
  +'<input type="hidden"name="paycompany"id=""value="'+data['zname2']+'">'
  +'<input type="hidden"name="paymethod"value="'+data['zname1']+'">'
  +'<table align="center"border="0"width="50%"class="ft11">'
  +'<tr class="he60"bgcolor="#cccccc"align="center">'
   +'<td width="50%"class="ft16">支払金額</td><td width="50%"class="ft16">'+sum+' 　円</td></tr>'
     +'<tr align="center"><td colspan="2"class="he80">'
     +btnkk1+''+btnkk2+'</td></tr>'
   +'</table>'
  );
}else{   $('#message').html('<p align="center"class="ft11">未払いがありません。</p>');           }
　//----------------------------------------------------------
  var paywait=data['paywait2']; var pmain1='';  var pmain2=''; var ctt=0;
  for(var k=0;k<paywait.length;k++){
   if(paywait[k]['custcode']==data['custcode']){
   if(paywait[k]['paycode']==null||paywait[k]['paycode']==''){}else{
      ctt +=1;
   pmain1='<tr align="center"class="he30">'+'<td>'+ctt+'</td>'
   +'<td>'+paywait[k]['paymethod']+'</td>'+'</td><td>'+paywait[k]['paycompany']+'</td>'
   +'</td><td >'+paywait[k]['amount']+'</td>'
   +'<td>'+'<a href="{{ url('manager/payment3') }}?pyctt='+paywait[k]['paycode']+'" >'
   +'<input type="hidden"name="amount"id=""value="'+paywait[k]['amount']+'">'
   pmain2=pmain2+pmain1;
 }}  }
 //-----------ok-------------------
           }
        });
        }
</script>
<script type="text/javascript">




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
