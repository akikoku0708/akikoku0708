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
<style>
.tablecss5{width:100%;height:20px;background-color:#483d86;             }
.btncss5{ color:#ffffff;border-radius:3px;background-color:#483d86;width:80px;height:30px;font-size:11px;margin-right:4px;border:none;      }
.btncss5:hover {    background-color: #ffffff;  color:#483d86;  }
.acss5{ text-decoration:none;color:#fff;padding-left:10px;}
.tdcss1{vertical-align:top; background-color:#66ff99;        }

.imgcss1{width:100%; vertical-align:top; border-radius:5px;         }
.divcss1{ font-size:13px;font-weight:900;            }
.divcss2{ font-size:11px;           }
.divcss3{ line-height:10px;          }
.tablecss1{border-radius:5px; border-color:#ffffff; width:100%;          }
.btncss1{ width:80px;height:20px;font-size:11px;background-color:#483d86;color:#fff; border-radius:3px;              }
.btncss2{ width:120px;height:40px;font-size:13px;background-color:#483d86;color:#fff; border-radius:3px;              }

.tdcss1{ font-size:11px; font-weight: 800px; background-color:#cccccc;width:100px;height:30px; border-radius:5px;padding:5px;     }
.tdcss2{ font-size:11px; font-weight: 800px; background-color:#cccccc;  height:24px; text-align:center;   }
input[type=checkbox]{width:15px;height:15px;margin:0px;}
</style>



<body>
  @extends('layouts.add')


  <!-- @section('title', 'meisis') -->
  <?php
  $codeitem='';//$amenu4='';
  //if(isset($_GET['amenu4'])){	$amenu4=$_GET['amenu4'];		}
  if(isset($_GET['codeitem'])){	$codeitem=$_GET['codeitem'];		}

  $arrp=''; $arrpo=array();
  if(isset($_GET['arrp'])){	$arrp=$_GET['arrp'];		}

   ?>
   <table width="98%"class="tablecss5"height="40"align="center"border="0"><tr>
   <td class="td_add04"width="30%" >
    <a href="{{ url('manager/home') }}" class="acss5" > mesis </a> </td >
   <td width="50%"align="center">
  </td><td width="10%"align="center">

    <a href="{{ url('manager/mypage') }}" >
    <button class="btncss5">マイページ</button>
</td><td width="10%"align="center">
<a href="{{ url('manager/product') }}?codeitem=<?php echo $codeitem; ?>" >
<button class="btncss5">戻る</button> </td></tr></table><hr class="hr">



@error('token') <div class="alert alert-danger">{{ $message }}</div> @enderror

<!-- **************************login************************************** -->
 <table width="100%"height="1500"border="0"cellspacing="0"><tr><td style="vertical-align:top;">


  <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->

  <h3 align="center">支払い方法</h3>

  <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
  <table width="80%" align="center" border="0"height="20">
  <tr><td width="15%"class="tdcss2"id="buttona5">キャリア決済</td>
  <td width="15%"class="tdcss2"id="buttona1">クレジットカード</td>
  <td width="15%"class="tdcss2"id="buttona2">代金交換</td>
  <td width="15%"class="tdcss2"id="buttona3">コンビニ決済</td>
  <td width="15%"class="tdcss2"id="buttona4">銀行振込</td>
  <td width="25%"class="tdcss2"></td>
  </td></tr></table>


  <div id="pa5"><table width="80%" align="center" border="0"><tr style="font-size:11px;"><td width="5%"></td>
  <td align="right"width="5%"height="30">
  <input type="checkbox"name="line"id="line" onclick="func(this);"class="chek"value="キャリア決済" ></td>
  <td width="10%">Line<td align="right"width="5%">
  <input type="checkbox"name="paypay"id="paypay"onclick="func(this);" class="chek"value="キャリア決済y" ></td>
  <td width="10%">Paypay</td><td width="65%">  </td></tr></table>
  </div>
  <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->

  <div id="pa1"><table width="80%" align="center" border="0"><tr style="font-size:11px;"><td width="5%"></td>
  <td align="right"width="5%"height="30">
  <input type="checkbox"name="visa"id="visa" onclick="func(this);"class="chek"value="クレジットカード" ></td>
  <td width="10%">visa<td align="right"width="5%">
  <input type="checkbox"name="mastercard"id="mastercard"onclick="func(this);" class="chek"value="クレジットカード" ></td>
  <td width="10%">mastercard</td><td width="65%">  </td></tr></table></div>
  <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->

  <div id="pa2"><table width="80%" align="center" border="0"><tr style="font-size:11px;"><td width="5%"></td>
  <td align="right"width="5%"height="30">
  <input type="checkbox"name="cod"id="cod" onclick="func(this);"class="chek"value="代金交換" ></td>
  <td width="10%">代金交換<td align="right"width="5%"> </td>
  <td width="10%"></td><td width="65%">  </td></tr></table></div>
  <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->

  <div id="pa3"><table width="80%" align="center" border="0"><tr style="font-size:11px;"><td width="5%"></td>
  <td align="right"width="5%"height="30">
  <input type="checkbox"name="lowson"id="lowson" onclick="func(this);"class="chek"value="コンビニ決済" ></td>
  <td width="10%">Lowson<td align="right"width="5%">
  <input type="checkbox"name="seveneleven"id="seveneleven"onclick="func(this);" class="chek"value="コンビニ決済" ></td>
  <td width="10%">Seveneleven</td><td>
  <input type="checkbox"name="familymart"id="familymart"onclick="func(this);" class="chek"value="コンビニ決済" ></td>
  <td width="10%">Familymart</td> <td width="50%">  </td></tr></table></div>
  <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->

  <div id="pa4"><table width="80%" align="center" border="0"><tr style="font-size:11px;"><td width="5%"></td>
  <td align="right"width="5%"height="30">
  <input type="checkbox"name="bank"id="bank" onclick="func(this);"class="chek"value="銀行振込" ></td>
  <td width="10%">Bank<td align="right"width="5%">
  </td> <td width="10%"></td><td width="65%">  </td></tr></table></div>

    <hr width="80%">

  <!-- <table width="80%" align="center" border="0"height="20"><tr >
    <td width="30%"align="right"height="50">支払方法： </td><td width="45%"align="left"> <div id="message2"></div>
  </td><td width="5%"></td></tr></table> -->
  <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->

  <h3 align="center">注文商品</h3>


<table align="center"width="80%"border="0"cellspacing="0"><tr><td>
  <div id="message"></div>
</td></tr></table>










</td></tr></table>
</body>
<script type="text/javascript">

var idkk='';  var paym='';
$(".chek").on("click", function(){
 if ($(this).prop('checked')){  $(".chek").prop('checked', false);  $(this).prop('checked', true);        }
});


function func(ele){ // arrpay=[];//    //  arrpay.push(paym);
  idkk=ele.id;
  paym=$("input[name="+idkk+"]").val(); //alert(paym);
   read();
}


</script>

<script type="text/javascript">
var codeitem='<?php echo $codeitem; ?>';
var arrp='<?php echo $arrp; ?>';
arrp=arrp.split('_');
var ponumber; var idk; var xt;

//------------------------------------
//-----------------------------------------------------
var rpc;
function fundelebc(ele){  //order
for(var e=0;e<arrp.length;e++){
 for(var z=0;z<20;z++){
ponum=$('#ponumber'+z).val();
quantity=$('#quantity'+z).val();
if(arrp[e]==ponum){
rpc=ponum;
}}}
read();
}
//--------------------------------------------------
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $(".btn-submit").click(function(e){        e.preventDefault();
      read();
  });
  read();
  function read(){
        var vname1 = rpc;
        var vname2 = idkk;
        var vname3 = paym;
        //alert(vname2);
        $.ajax({
           type:'POST',
           url:"{{ route('manager/orderlist2') }}",
           data:{kname1:vname1, kname2:vname2, kname3:vname3},
           success:function(data){
             var order2; var listk=''; var listk2=''; arrtotal=[];
             order2=data['order2'];
for(var i=0;i<order2.length;i++){
  for(var j=0;j<arrp.length;j++){
  if(order2[i]['ponumber']==arrp[j]){
  if(order2[i]['status']=='order'){

  listk='<table align="center"cellspacing="0"bordercolor="#ffffff"class="tablecss1"border="1">'
  +'<tr><td width="20%"rowspan="2" >'
  +'<img src="../storage/upload/'+order2[i]['storeid']+'/'+order2[i]['picture']+'" class="imgcss1">'
  +'</td><td width="40%"class="tdcss1">'
  +'<div class="divcss1">商品名:　'+order2[i]['product']+'</div>'
  +'<div class="divcss2">型番:　'+order2[i]['numitem']+'</div>'
  +'<div class="divcss2">色:　'+order2[i]['color']+'</div>'
  +'<div class="divcss2">サイズ：　'+order2[i]['size']+'</div>'
  +'</td><td width="40%"class="tdcss1">'
  +'<input type="hidden"name="ponumber'+i+'" id="ponumber'+i+'" value="'+order2[i]['ponumber']+'">'
  +'<div class="divcss2">注文番号:　'+order2[i]['ponumber']+'</div>'
  +'<div class="divcss2">単価:　'+order2[i]['pricem']+' 円</div>'
  +'<div class="divcss2">数量:　'+order2[i]['quantity']+' </div>'
  +'</td></tr>'
  +'<tr align="center"class="tdcss2"><td height="20">'
  +'<button class="btncss1"id="delebc'+i+'"onclick="fundelebc(this);">削除</button>'
  +'</td><td class="divcss1">'
  +'小計：<span id="subto'+i+'">'+order2[i]['amount']+'</span>円'
  +'</td></tr></table><div class="divcss3">&nbsp;</div>';
arrtotal.push(order2[i]['amount']);
$('#message').append('<div id="'+order2[i]['ponumber']+'"></div>');
$('#'+order2[i]['ponumber']+'').html(listk);

}}}}
//------------------------------------------------------------
var sumk=0; var tk=order2.length+1;
for(var v = 0; v < arrtotal.length; v++) {   sumk += Number(arrtotal[v]);  }
$('#message').append('<div id="divk'+order2.length+'"></div>');
$('#divk'+order2.length+'').html('<p align="right"class="divcss1">合計:    '+sumk+'円</p>');
//-------------------------------------------------------------------------
$('#message').append('<div id="divk'+tk+'"></div>');
$('#divk'+tk+'').html(''
  +'</br><p align="center">'
  +'<a href="{{ url('manager/payment') }}?codeitem='+codeitem+'">'
  +'<button class="btncss2">支払へ</button></a></p>'

);
$('#'+data['jname1']).html('');
$('#message2').html(data['jname3']+': '+data['jname2']);
 //-----------ok-------------------
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
    for (var iz = 0; iz < 20; iz++) {
    $('#buttona' + iz).click((function(iz) {
      return function() {
  //--------------------------------------------------------------------
  for (var ie = 0; ie < 20; ie++) {	 $('#pa'+ie).hide();	 }
  if(arrbb[0]==iz){pbool=	arrbb[1];		}else{	pbool=false;			}
  if(pbool==false){	$("#pa" + iz).show();	pbool=true;		}else{	$("#pa" + iz).hide();	pbool=false;	}
  arrbb[0]=iz;		arrbb[1]=pbool;
//----------------------------------------------------------------------------------
}    })(iz));	}	});
  </script>
