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

    <title>Ecapply</title>

</head>
<style type="text/css">

</style>


<!-- **************************login************************************** -->
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
   <table width="100%" align="center" cellspacing="0"border="0"><tr align="right"><td  >
    <a href="{{ url('manager/mypage') }}"class="alink"><button id=""class="btncss25">注文状況</button></a>
    <a href="{{ url('manager/payment') }}"class="alink"><button id=""class="btncss25">支払状況</button></a>
    <a href="{{ url('manager/instock') }}"class="alink"><button id=""class="btncss25">購入履歴</button></a>
    <a href="{{ url('manager/inquiry') }}"class="alink"><button id=""class="btncss25">問い合わせ</button>
    <a href="{{ url('manager/address') }}?ikey=addressmk" class="alink"><button id=""class="btncss25">送り先</button>
   <a href="{{ url('manager/profile') }}"class="alink"><button id="buttona4"class="btncss25">プロファイル</button></a>
    </td></tr></table><hr>
 <!-- ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^ -->
  <table width="100%"class="he1500"border="0"cellspacing="0"><tr><td style="vertical-align:top;">
   <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
   <h3 align="center">プロファイル</h3>

<!-- +++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
<table width="90%" align="center" border="0"><tr><td align="center">

    <table width="90%" align="center" border="0">
    <tr><td width="90%">    <div id="message"></div>  </td></tr>
      <tr><td width="90%"class="he30"align="center"> <h4> 変更</h4>  </td></tr>
    <tr><td width="90%"align="center"class="he30"> 　
      <button id="namek"onclick="func1(this);"class="btncss25">名前変更</button>
      <button id="passk"onclick="func2(this);"class="btncss25">パスワード</button>
      <button id="mailk"onclick="func3(this);"class="btncss25">メールアド</button>
    </td></tr>
      <tr><td width="90%"class="he30">  &nbsp; </td></tr>
    </table>

<div id="message2"></div>
<div id="message3"></div>
<div id="message4"></div>
<div id="message5"></div>

</td></tr></table>

<!-- +++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
</td></tr></table>
    </body>
</html>

<script type="text/javascript">
   $(function(){    read();   });
   //--------------------------------------------
   var idkk1='';  var idkk2=''; var idkk3='';var namek='';var passk='';var mailk='';
 function func1(ele1){   idkk1=ele1.id;   read();     }
 function func2(ele2){   idkk2=ele2.id;   read();     }
 function func3(ele3){   idkk3=ele3.id;   read();    }
  function func5(ele5){   //idkk3=ele3.id;
      namek = $("input[name=namek]").val();
      passk = $("input[name=passk]").val();
      mailk = $("input[name=mailk]").val();
     read();

   }

    //-------------------------------------------------------------------------
    $.ajaxSetup({
    headers: {  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')    }
    });
    //--------------------------------------------------------------
    $(".btn-submit").click(function(e){  e.preventDefault();   read();  });
   //----------------------------------------------------------------------
      function read(){
        var vname1 =idkk1;
        var vname2 =idkk2;
        var vname3 =idkk3;
        var vname4 =namek;
        var vname5 =passk;
        var vname6 =mailk;

        $.ajax({
           type:'POST',
           url:"{{ route('/manager/ajaxform1/profileajax') }}",
           data:{kname1:vname1, kname2:vname2, kname3:vname3 ,kname4:vname4, kname5:vname5, kname6:vname6
           },
           success:function(data){
   //-------------------------------------------------------------------
     var custa=data['custa']; var main1=''; var main2=''; var arrt=[]
     var nameh; var passh; var emailh;
     for(var i=0;i<custa.length;i++){
       nameh=custa[i]['name']; passh=custa[i]['password']; emailh=custa[i]['email'];
       if(custa[i]['custcode']==data['custcode']){
      main1=''
      +'<tr class="he30"align="center"bgcolor="#cccccc"><td width="30%">顧客コード：</td><td>'+custa[i]['custcode']+'</td></tr>'
      +'<tr class="he30"align="center"bgcolor="#cccccc"><td>名前：</td><td>'+custa[i]['name']+'</td></tr>'
      +'<tr class="he30"align="center"bgcolor="#cccccc"><td>メール：</td><td>'+custa[i]['email']+'</td></tr>'
      main2=main2+main1;
     }
   }
       $('#message').html('<table width="60%"align="center"border="0"class="ft11"cellspacing="1">'
       +main2
       +'</table>'
     );
     var cmt=0;
     if(data['zname1']=='namek'){ cmt +=1;
       $('#message2').html('<table width="50%" class="ft11"align="center" border="0"><tr align="center"bgcolor="#cccccc"><td width="30%">'
       +'名前</td><td><input type="text"name="namek"id="namek"value="'+nameh+'" class="inputcss21"></td></tr></table>');
     }
     if(data['zname2']=='passk'){ cmt +=1;
       $('#message3').html('<table width="50%" class="ft11"align="center" border="0"><tr align="center"bgcolor="#cccccc"><td width="30%">'
       +'パスワード</td><td><input type="password"name="passk"id="passk"value="'+passh+'" class="inputcss21"></td></tr></table>' );
     }
    if(data['zname3']=='mailk'){  cmt +=1;
         $('#message4').html('<table width="50%" class="ft11"align="center" border="0"><tr align="center"bgcolor="#cccccc"><td width="30%">'
         +'メールアドレス</td><td><input type="text"name="mailk"id="mailk"value="'+emailh+'" class="inputcss21"></td></tr></table>');
    }
    if(cmt>0){
      $('#message5').html('<button onclick="func5(this);"class="btncss25">変更決定</button>'    );
    }
   //-------------------------------------------------------------------------

             //-----------ok-------------------
           }
        });
        }
</script>
