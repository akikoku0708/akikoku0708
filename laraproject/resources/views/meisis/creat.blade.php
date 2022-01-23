


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
.form-group{ display: inline-block; text-align: center;
  width:100%;font-size:13px;
}
.form-control{width:99%;height:24px;font-size:13px;border-color:#fff; border-radius:3px;
}
/* .form-control2{width:60%;height:24px;font-size:13px;border-color:#fff; border-radius:3px;
} */
.formd{  display: inline-block; width:100%;font-size:13px;  }
.btn-submit{width:60px;height:30px; background-color:#483d86;color:#fff;border-radius: 3px;}
.tabel2{ height:100px;border-radius:5px;border:1px solid #6699ff;background-color:#99ffff;}
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

<table width="100%" align="center" border="0">
<tr><td ><div id="message"></div> </td></tr>
</table>
<table width="100%" align="center" border="0">
<tr><td align="center"><div id="message2"></div> </td></tr>
</table>



</body>
<script type="text/javascript">

    var ikey=0;
    var reg = /^[A-Za-z0-9]{1}[A-Za-z0-9_.-]*@{1}[A-Za-z0-9_.-]{1,}.[A-Za-z0-9]{1,}$/;
    $(function(){ ikey='151';  read();         });

    var vname1='';var vname2=null;var vname3='';var vname5='';vname6='';vname7='';　var chek='220';
    function func50(){  ikey='151';

    read();
  }
    function func51(){   ikey='152';
        vname2 = $("input[name=email]").val();
        if(vname2==''){$('#mes1').html('<div align="center"style="font-size:13px;">空白項目があります！</div>');
        }else{
          if (reg.test(vname2)) {    read();     } else {
            $('#mes1').html('<div align="center"style="font-size:13px;">メールアドレスが間違っています。</div>');     }
        }
    }
    function func52(){  ikey='153';
      vname3 = $("input[name=namek]").val();
      vname5 = $("input[name=pass1]").val();
      vname6 = $("input[name=pass2]").val();
      vname7 = $("input[name=codek]").val();

if(vname3==''||vname5==''||vname6==''||vname7==''){
  $('#mes2').html('<div align="center"style="font-size:13px;">空白項目があります！</div>');      }else{
  if(vname5==vname6){read();  }else{
$('#mes2').html('<div align="center"style="font-size:13px;">パスワードが違います。</div>');
  }  }  }
  function func55(){
    window.location.href = "{{URL::to('meisis/login')}}?sear=33333";
  }
  function func57(){  window.location.href = "{{URL::to('meisis/forget')}}?sear=33333"; }
function func59(){ var textForm = document.getElementById("email");     textForm.value = '';}
    //-------------------------------------------------------------------------
    $.ajaxSetup({
    headers: {  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')    }
    });
   //----------------------------------------------------------------------
      function read(){
        $.ajax({
           type:'POST',
           url:"{{ route('/meisis/meisisajax/creatajax') }}",
           data:{kname1:ikey, kname2:vname2,kname3:vname3, kname5:vname5,kname6:vname6, kname7:vname7 },
           success:function(data){
   //-------------------------------------------------------------------------
   var mail='';if(data['zname2']==null){mail='';}else{ mail=' '+data['zname2'];   }
   if(data['zname1']=='151'){
$('#message').html(''
+'<hr width="40%"><table width="40%" align="center" bordercolor="#fff"cellspacing="2"border="0">'
+'<tr><td width="50%"><a onclick="func55();"><button class="btn11">ログイン</button></a>'
+'</td><td width="50%"><a onclick="func57();"><button class="btn11">パスワード忘れた</button></a>'
+'</td></tr></table>'

+'<table width="40%" bgcolor="#60e0e6"align="center" style="border-radius:5px;"cellspacing="0"border="0">'
+'<tr><td height="30"align="right">'
+'<table width="80%" align="center" border="0">'
+'<tr><td width=""height="60"align="center"><strong>新規登録 </strong> </td></tr>'
+'<tr><td width="80%"><label id="mes1"></label>'
+'<p style="font-size:13px;"> ID or Mail <input class="input51"type="text" id="email"name="email" value=""></p></br>'
+'<p align="center"><span><button onclick="func59();"class="btn12">クリア</button></span>'
+'&nbsp<span align="center"><button onclick="func51();"class="btn12">登録</button></span></p>'
 +'</td></tr></table>'
 +'</td></tr></table></br>'
 );
}



if(data['zname1']=='152'){
if(data['zname8']=='88888'){
  $('#message2').html('このメールアドレスは既に登録されていました。');
}else{
//  if(data['zname2']==null){}else{
$('#message').html(''
+'<hr width="40%"><table width="40%" align="center" bordercolor="#fff"cellspacing="2"border="0">'
+'<tr><td width="50%"><a onclick="func55();"><button class="btn11">ログイン</button></a>'
+'</td><td width="50%"><a onclick="func57();"><button class="btn11">パスワード忘れた</button></a>'
+'</td></tr></table>'

+'<table width="40%" bgcolor="#60e0e6"align="center" style="border-radius:5px;"cellspacing="0"border="0">'
+'<tr ><td width="50％">'
+'<table width="100%" align="center" border="0">'
+'<tr><td colspan="3"width=""height="60"align="center"></br><strong>新規詳細登録 </strong> </br></td></tr>'
+'<tr><td width=""height="15"> </td>'+'<td style="font-size:13px;"> &nbsp</td>'+'<td width=""> </td></tr>'
+'<tr><td width="7%"height="24"> </td>'+'<td width="88%"style="font-size:13px;">名　　　前   </td>'+'<td width="5%"> </td></tr>'
+'<tr><td width=""height="24"></td>'
+'<td width=""> <input class="input51"type="text" name="namek"  ></td>'
+'<td width=""> </td></tr>'
+'<tr><td width=""height="24"> </td>'+'<td style="font-size:13px;">パスワード   </td>'+'<td width=""> </td></tr>'

+'<tr><td width=""height="24"> </td>'
+'<td width=""> <input class="login5" type="password"id="pass1"name="pass1"value="" placeholder="" ></td>'
+'<td width=""><input type="checkbox" onclick="func11();"class="che2"id="password-check" /> </td></tr>'

+'<tr><td width=""height="24"> </td>'+'<td style="font-size:13px;">パスワード確認  </td>'+'<td width=""> </td></tr>'
+'<tr><td width=""height="24"> </td>'
+'<td width=""> <input class="login5" type="password"id="pass2"name="pass2"value="" placeholder="" ></td>'
+'<td width=""><input type="checkbox" style="line-height:10px;"onclick="func12();"class="che2"id="password-check2" /></td></tr>'

+'<tr><td width=""height="24"> </td>'+'<td style="font-size:13px;">登録コード  </td>'+'<td width=""> </td></tr>'
+'<tr><td width=""height="24"> </td>'
+'<td width=""> <input class="input51"type="text" name="codek"  ></td>'
+'<td width=""> </td></tr>'
+'<tr><td width=""height="24"> </td>'+'<td style="font-size:13px;">'+mail+'</td>'+'<td width=""> </td></tr>'
+'<tr><td width=""height="24"> </td>'+'<td style="font-size:13px;"> &nbsp</td>'+'<td width=""> </td></tr>'
+'<tr><td width=""height="24"> </td>'
+'<td align="center"><span><button onclick="func50();"class="btn12">キャンセル</button></span> '
+'&nbsp<span align="center"><button onclick="func52();"class="btn12">実行</button></span></td>'
+'<td width=""> </td></tr>'
+'<tr><td width=""height="15"> </td>'+'<td style="font-size:13px;"> &nbsp</td>'+'<td width=""> </td></tr>'
+'</table>'

+'</td></tr></table>'
);
$('#message2').html('');
}}
//-----------------------------------------------------------------
if(data['zname8']=='6666'){   if(data['zname1']=='153'){
  window.location.href = "{{URL::to('meisis/login')}}?sear=33333";
}}
//-------------------------------------------------------------------
//if(data['zname8']=='8888'){$('#message').append(data['zname2']);            }

//------------------------------------



             //-----------ok-------------------
           }
        });
        }
</script>

</html>
