
<?php
$loginname='';
$loginname=Session('custsessname');
$custcode=Session('custsesscode');
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

  <?php
  $amenu4='';$codeitem=''; $ikey='';
  if(isset($_GET['amenu4'])){	$amenu4=$_GET['amenu4'];		}
  if(isset($_GET['codeitem'])){	$codeitem=$_GET['codeitem'];		}
  if(isset($_GET['ikey'])){	$ikey=$_GET['ikey'];		}
   ?>
   <table width="100%"class="he40"align="center"bgcolor="#483d86"border="0"><tr>
   <td width="10%"align="center" >
   <a href="{{ url('manager/home') }}" class="acss5" > meisis </a> </td >
   <td class="ft11"width="70%"align="center"style="color:#ffffff;">
   <?php     if($loginname!=''){  echo ''.$loginname.'様ログイン中';     }            ?>
 </td><td width="20%"align="right">

   @if ($ikey=='addressmk')
   <a href="{{ url('manager/profile') }}" > <button class="btncss25">戻る</button></a>
   @else
   <a href="{{ url('manager/cart') }}?codeitem=<?php echo $codeitem; ?>" >
   <button class="btncss25">戻る</button></a>
   @endif

   </td></tr></table><hr class="hr">
@error('token') <div class="alert alert-danger">{{ $message }}</div> @enderror
<!-- **************************login************************************** -->

 <table width="100%"class="he1500"border="0"cellspacing="0"><tr><td style="vertical-align:top;">

   <table align="center"width="80%"border="0"cellspacing="0">
<tr><td colspan="6"class="he30"></td></tr>
  <tr align="center">
    <td width="10%">
    <button id="sendlist"class="btncss25">指定送り先</button>
    <td width="10%">
    <button id="sendto"class="btncss25">指定変更</button>
  </td> <td width="10%">
    <button id="edit"class="btncss25">編集</button>
  </td><td width="10%">
    <button id="register"class="btncss25">新規登録</button>
  </td><td width="60%"></td> </tr></table> </br>

<table align="center" width='80%' border="0" class="ft20">
<tr><td style="vertical-align:top;"colspan="3"class="he30">　
<div id="mess1"></div><div id="mess2"></div></div>
</td></tr>
</table>



</td></tr></table>

</body>
<script type="text/javascript">
var custcode='<?php echo $custcode; ?>';
var amenu4='<?php echo $amenu4; ?>';

//var custcode='custcode';
//-------------------------------
var stdata1='zxzxzx'; var receiver='';  var post='';  var addresst='';  var phone='';
var check='';   var codeaddress='';var idkmk='';  var editmk; var delemk; var idka;
var xc; var xd;
$(function(){   read();        });
//--------------------------------------------------
//$("#sendlist").click(function(e){    e.preventDefault();  stdata1='zxzxzx'; read();  });
$("#sendlist").click(function(e){    e.preventDefault();  stdata1='zxzxzx'; read();  });
$("#sendto").click(function(e){    e.preventDefault();  stdata1='sendto'; read();  });
$("#edit").click(function(e){    e.preventDefault();  stdata1='edit'; read();  });
$("#register").click(function(e){  e.preventDefault();  stdata1='register';   read();    });

//----------------sendtomk--------------------------------
var idksend; var xb;
function funsend(ele){
idksend=ele.id;
xb = idksend.replace( /sendtomk/g , "" ) ;
codeaddress=$('#codeaddress'+xb).val();
read();
}
//---------------------edit-----------------------------
var idkedit; var xe;
function funed(ele5){
idkedit=ele5.id;
xe = idkedit.replace( /editmk/g , "" ) ;
receiver=$('#receiver'+xe).val();
post=$('#post'+xe).val();
addresst=$('#address'+xe).val();
phone=$('#phone'+xe).val();
codeaddress=$('#codeaddress'+xe).val();
read();
}
//---------------------dele----------------------------
var idkdele=''; var xt;
function funde(ele6){
idkdele=ele6.id;
xt = idkdele.replace( /delemk/g , "" ) ;
receiver='';
post='';
addresst='';
phone='';
codeaddress=$('#codeaddress'+xt).val();
read();
}
//-----------------------------------------

function funmk(elemk){
idkmk=elemk.id;
receiver=$('#receivermk').val();
post=$('#postmk').val();
addresst=$('#addresstmk').val();
phone=$('#phonemk').val();
check=$('#checkmk').val();
read();
}

//----------------------------------------
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $(".btn-submit").click(function(e){
        e.preventDefault();

  });

function read(){
        var vname1 = stdata1;
        var vname2 = custcode;
        var vname3 = receiver;
        var vname4 = post;
        var vname5 = addresst;
        var vname6 = phone;
        var vname7 = check;
        var vname8 = idkmk;
        var vname9 = codeaddress;
        $.ajax({
           type:'POST',
           url:"{{ route('manager/address2') }}",
           data:{ename1:vname1,ename2:vname2,ename3:vname3,ename4:vname4,ename5:vname5,ename6:vname6,
             ename7:vname7,ename8:vname8,ename9:vname9
           },
           success:function(data){

  var address=data['address'];
  var addt1=''; var addt1b='';
  for(var i=0;i<address.length;i++){
  if(address[i]['custcode']==data['zname2']&&address[i]['status']=='checked'){
  addt1=''
  +'<tr class="ft11"align="center"bgcolor="#fdd700">'+'<td width="10%">'+address[i]['receiver']+'</td>'
  +'<td width="10%">'+address[i]['post']+'</td><td width="60%">'+address[i]['addresst']+'</td>'
  +'<td width="20%"class="he30">'+address[i]['phone']+'</td>'
  +'</tr>';
  addt1b=addt1b+addt1;
  }}
   //------------------------------------------------------------------
  //------------初期-----sendlist------------------------------------------
　　 if(data['zname1']=='zxzxzx'){
           $('#mess1').html('<h3 align="center">指定中送り先</h3>'
           +'<table width="100%" cellspacing="1"border="0"align="center"class="ft11">'
           +'<tr align="center"bgcolor="#999999"class="he30"><td width="15%">受取人</td><td width="15%">郵便番号</td>'
           +'<td width="55%">住所</td><td width="15%">電話番号</td><tr>'
           +addt1b
           +'</table>'
         );
    }
    //------------------register------------------------------------------
    var addt5='';
    addt5='<table width="100%" border="0"align="center"cellspacing="1"class="ft11">'
    +'<tr align="center"bgcolor="#dddddd">'
    +'<td width="15%"><input type="text" name="receivermk" id="receivermk" value=""class="inputcss21"></td>'
    +'<td width="15%"><input type="text" name="postmk" id="postmk" class="inputcss21"value=""></td><td width="55%">'
    +'<input type="text" name="addresstmk" id="addresstmk" class="inputcss21"value=""></td>'
    +'<td class="he30"width="15%"><input type="text" name="phonemk" id="phonemk" class="inputcss21"value=""></td>'
    +'</tr></table>';
    //------------

    //------------------------------------------
    if(data['zname1']=='register'){
    $('#mess1').html(''
    +'<h3 align="center">新規登録</h3>'
    +'<table width="100%" cellspacing="1"border="0"align="center"class="ft11">'
    +'<tr align="center"bgcolor="#999999"class="he30"><td width="15%">受取人</td><td width="15%">郵便番号</td>'
    +'<td width="55%">住所</td><td width="15%">電話番号</td><tr></table>'
    +addt5
    +'<table width="100%" 0"border="0"><tr><td colspan="5"align="center">'
    +'<button id="registermk"onclick="funmk(this);"class="btncss25">新規登録</button></td></tr></table>'
    );

    if(data['zname3']!=null){
    $('#mess2').html('<h3 align="center">下記のように新規登録しました</h3>'
    +'<table width="100%" cellspacing="1"border="0"align="center"class="ft11">'
    +'<tr align="center"class="he30"bgcolor="#999999"><td width="10%">受取人</td><td width="10%">郵便番号</td>'
    +'<td width="55%">住所</td><td width="15%">電話番号</td><tr>'
    +'<tr bgcolor="#dddddd"class="he30"align="center"><td width="10%">'+data['zname3']+'</td>'
    +'<td width="10%">'+data['zname4']+'</td>'
    +'<td width="55%">'+data['zname5']+'</td><td width="15%">'+data['zname6']+'</td><tr>'
    +'</table>');
    }

    }
/*
$('#mess2').html(data['zname1']+data['zname2']+data['zname3']+data['zname4']
+data['zname5']+data['zname6']+data['zname7']+data['zname8']+data['zname9']
);
*/

    //------------------edit---------------------------------------
    var addt3=''; var addt3b='';  var addt3d='';
      for(var i3=0;i3<address.length;i3++){
          if(address[i3]['custcode']==custcode){
        if(address[i3]['status']=='checked'){

    addt3d=''
    +'<tr align="center"bgcolor="#66ff99"class="ft11">'+'<td width="10%">'+address[i3]['receiver']+'</td>'
    +'<td width="10%">'+address[i3]['post']+'</td><td width="60%">'+address[i3]['addresst']+'</td>'
    +'<td width="20%"height="30">'+address[i3]['phone']+'</td>'
    +'</tr>';
    }

      addt3='<table width="100%" border="0"align="center"cellspacing="1"class="ft11"><tr align="center"bgcolor="#dddddd">'
       +'<td width="10%"><input type="text" name="receiver'+i3+'" id="receiver'+i3+'" class="inputcss21"value="'+address[i3]['receiver']+'"></td>'
       +'<td width="10%"><input type="text" name="post'+i3+'" id="post'+i3+'" class="inputcss21"value="'+address[i3]['post']+'"></td><td width="45%">'
       +'<input type="text" name="address'+i3+'" id="address'+i3+'" class="inputcss21"value="'+address[i3]['addresst']+'"></td>'
       +'<td width="15%"><input type="text" name="phone'+i3+'" id="phone'+i3+'" class="inputcss21"value="'+address[i3]['phone']+'"></td>'
       +'<td width="10%"class="he30"><button id="editmk'+i3+'"onclick="funed(this);"class="btncss20">編集</button></td>'
       +'<td width="10%"><button id="delemk'+i3+'"onclick="funde(this);"class="btncss20">削除</button></td>'
        +'<input type="hidden" name="codeaddress'+i3+'" id="codeaddress'+i3+'" value="'+address[i3]['codeaddress']+'">'
       +'</tr></table>';
        addt3b=addt3b+addt3;
      }}

    if(data['zname1']=='edit'){
    $('#mess1').html(''
    +'<h3 align="center">指定中送り先</h3>'
    +'<table width="100%" cellspacing="1"border="0"align="center">'
    +'<tr align="center"class="ft11"bgcolor="#cccccc"><td width="10%">受取人</td><td width="10%">郵便番号</td>'
    +'<td width="60%"class="he30">住所</td><td width="20%">電話番号</td><tr>'
    +addt3d
    +'</table>'
    +'</br><h3 align="center">編集</h3>'
    +'<table width="100%" cellspacing="1"border="0"align="center">'
    +'<tr align="center"bgcolor="#cccccc"class="ft11"><td width="10%">受取人</td><td width="10%">郵便番号</td>'
    +'<td width="45%"class="he30">住所</td><td width="15%">電話番号</td><td width="10%">編集</td><td width="10%">削除</td><tr></table>'
    +addt3b

    );
    }

    //-----------------sentto-----------------------------------------
    var addt2=''; var addt2b='';
    for(var i2=0;i2<address.length;i2++){

     if(address[i2]['custcode']==custcode){
      addt2='<table width="100%" border="0"align="center"cellspacing="1"class="ft11"><tr align="center"bgcolor="#66ff99">'
        +'<td width="10%">'+address[i2]['receiver']+'</td>'
        +'<td width="10%">'+address[i2]['post']+'</td><td width="55%">'+address[i2]['addresst']+'</td>'
        +'<td width="15%"class="he30">'+address[i2]['phone']+'</td>'
       +'<input type="hidden" name="codeaddress'+i2+'" id="codeaddress'+i2+'" value="'+address[i2]['codeaddress']+'">'
        +'<td width="10%"><button id="sendtomk'+i2+'"onclick="funsend(this);"class="btncss20">指定</button></td>'
        +'</tr></table>';
        addt2b=addt2b+addt2;
      }
    }

    if(data['zname1']=='sendto'){
    $('#mess1').html(''
    +'<h3 align="center">指定中送り先</h3>'
    +'<table width="100%" cellspacing="1"border="0"align="center">'
    +'<tr align="center"bgcolor="#cccccc"class="ft11"><td width="10%">受取人</td><td width="10%">郵便番号</td>'
    +'<td width="60%"class="he30">住所</td><td width="20%">電話番号</td><tr>'
    +addt1
    +'</table>'
    +'</br><h3 align="center">送り先指定変更</h3>'
    +'<table width="100%" cellspacing="1"border="0"align="center"class="ft11">'
    +'<tr align="center"bgcolor="#cccccc"style="font-size:11px"><td width="10%">受取人</td><td width="10%">郵便番号</td>'
    +'<td width="55%"class="he30">住所</td><td width="15%">電話番号</td>'
    +'<td width="10%"></td>'
    +'<tr></table>'
    +addt2b

    );
    }
//----------------------------------------------------------
//-----------ok-------------------
           }
        });

    }
</script>

</html>
