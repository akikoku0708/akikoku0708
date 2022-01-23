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
.input51{ background-color:#99ffff;border:none;border-color:#99ffff;border-radius:5px;width:100%;height:40px;    }
.btn11{ font-size:16px;border:none;background-color:#60e0e6;border-radius:5px;width:100%;height:60px;    }
.btn12{ border-radius:3px;border:none;color:#fff;background-color:#708090;width:160px;height:40px    }
.login5{ background-color:#99ffff;border:none;border-color:#99ffff;border-radius:5px;width:99%;height:40px;	}
.login5:focus {  		outline: solid 1px #333;	}
input[type=checkbox].che2{-webkit-appearance: none; position: relative;display: inline-block;
  background-size: contain; position: relative;width: 25px;height:15px;top:2px; left:-50px;
background-image:url({{ asset('images/eye1.png')}});
}

</style>
<script>
//-------------------pass1----------------------------------
  function func11(){
    var pw = document.getElementById('pass1');
    var pwCheck = document.getElementById('password-check');
    pwCheck.addEventListener('change', function() {     if(pwCheck.checked) {
    pw.setAttribute('type', 'text'); } else { pw.setAttribute('type', 'password'); }  }, false);
}
//---------------------pass2-----------------------------------
function func12(){
  var pw = document.getElementById('pass2');
  var pwCheck = document.getElementById('password-check2');
  pwCheck.addEventListener('change', function() {     if(pwCheck.checked) {
  pw.setAttribute('type', 'text'); } else { pw.setAttribute('type', 'password'); }  }, false);
}
 </script>
<body>

  <hr width="40%"><table width="40%" align="center" bordercolor="#fff"cellspacing="2"border="0">
  <tr><td width="50%"><a href="{{url('meisis/creat')}}"><button class="btn11">新規登録</button></a>
  </td><td width="50%"><a href="{{url('meisis/login')}}"><button class="btn11">ログイン</button></a>
  </td></tr></table>

  <table width="80%" align="center" border="0">
  <tr><td width=""height="60"align="center"><div id="message"></div> </td></tr>
  </td></tr></table>
  <table width="80%" align="center" border="0">
  <tr><td width=""height="60"align="center"><div id="message2"></div> </td></tr>
  </td></tr></table>




</body>
<script type="text/javascript">
    var ikey='11'; var vname1='';var vname2='';var vname3='';var vname5='';var vname6='';
    //---------------------------------------------------------
    $(function(){  ikey='161';   read();     });
    //-----------------------------------------------------------
    function func62(){ ikey='162';
      vname2 = $("input[name=email]").val(); //alert(vname2);
      read();
    }
    //---------------------------------------------------------
    function func65(){ ikey='165';
      vname3 = $("input[name=pass1]").val();
      vname5 = $("input[name=pass2]").val();
      vname6 = $("input[name=code]").val();
      if(vname3!=vname5){ $('#message2').html('パスワード入力が間違っています。');
      if(vname6==''){$('#message2').html('確認コード入力していない。');   }
    　}else{  read();      }
      }
    function func60(){ var textForm = document.getElementById("email"); textForm.value = '';  }
    function func63(){       ikey='161';   read();    }
    //-------------------------------------------------------------------------
    $.ajaxSetup({
    headers: {  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')    }
    });
    //--------------------------------------------------------------
    $(".btn-submit").click(function(e){  e.preventDefault();   read();  });
   //----------------------------------------------------------------------
      function read(){

        $.ajax({
           type:'POST',
           url:"{{ route('/meisis/meisisajax/forgetajax') }}",
           data:{kname1:ikey, kname2:vname2, kname3:vname3, kname5:vname5, kname6:vname6},
           success:function(data){
   //-----------------------------初期-161-------------------------------------------
        if(data['zname1']=='161'){
          $('#message').html(''
          +'<table width="50%" align="center"bgcolor="#60e0e6"style="border-radius:5px;" border="0"><tr><td>'
          +'<table width="80%" align="center" border="0">'
          +'<tr><td width=""height="60"align="center"></br><strong>パスワード再設定 </strong> </td></tr>'
          +'<tr><td width="80%">'
          +'<p style="font-size:13px;"> ID or email <input id="email"class="input51"type="text" name="email"  ></p>'
          +'<p align="center"><span><button onclick="func60();"class="btn12">クリア</button></span>'
          +'&nbsp<span align="center"><button onclick="func62();"class="btn12">再設定</button></span></p>'
          +'</br></td></tr></table>'
          +'</td></tr></table>'
          );
        }
        //------------------------Mail　確認した------------------------------------

        if(data['zname1']=='162'){

          $('#message').html(''
          +'<table width="50%" bgcolor="#60e0e6"align="center" style="border-radius:5px;"cellspacing="0"border="0">'
          +'<tr ><td width="50％">'
          +'<table width="100%" align="center" border="0">'
          +'<tr><td colspan="3"width=""height="60"align="center"></br><strong>パスワード再設定 </strong> </br></td></tr>'
          +'<tr><td width=""height="15"> </td>'+'<td style="font-size:13px;"> &nbsp</td>'+'<td width=""> </td></tr>'
          +'<tr><td width="7%"height="24"> </td>'+'<td style="font-size:13px;">パスワード   </td>'+'<td width=""> </td></tr>'

          +'<tr><td width="7%"height="24"> </td>'
          +'<td width="88%"> <input class="login5" type="password"id="pass1"name="pass1"value="" placeholder="" ></td>'
          +'<td width="5%"><input type="checkbox" onclick="func11();"class="che2"id="password-check" /> </td></tr>'

          +'<tr><td width=""height="24"> </td>'+'<td style="font-size:13px;">パスワード確認  </td>'+'<td width=""> </td></tr>'
          +'<tr><td width=""height="24"> </td>'
          +'<td width=""> <input class="login5" type="password"id="pass2"name="pass2"value="" placeholder="" ></td>'
          +'<td width=""><input type="checkbox" style="line-height:10px;"onclick="func12();"class="che2"id="password-check2" /></td></tr>'

          +'<tr><td width=""height="24"> </td>'+'<td style="font-size:13px;">登録コード  </td>'+'<td width=""> </td></tr>'
          +'<tr><td width=""height="24"> </td>'
          +'<td width=""> <input class="input51"type="text" name="code"  ></td>'
          +'<td width=""> </td></tr>'
          +'<tr><td width=""height="24"> </td>'+'<td style="font-size:13px;"> &nbsp</td>'+'<td width=""> </td></tr>'
          +'<tr><td width=""height="24"> </td>'
          +'<td align="center"><span><button onclick="func63();"class="btn12">キャンセル</button></span> '
          +'&nbsp<span align="center"><button onclick="func65();"class="btn12">実行</button></span></td>'
          +'<td width=""> </td></tr>'
          +'<tr><td width=""height="15"> </td>'+'<td style="font-size:13px;"> &nbsp</td>'+'<td width=""> </td></tr>'
          +'</table>'

          +'</td></tr></table>'
          );

    }

if(data['zname1']=='165'){
  if(data['zname8']=='xx165'){
  //  $('#message2').html('<table border="1"><tr><td>'+data['zname8']+data['zname5']+'</td></tr><table>');
  }else{  window.location.href = "{{URL::to('meisis/login')}}?sear=33333";      }


}



             //-----------ok-------------------
           }
        });
        }
</script>

</html>
