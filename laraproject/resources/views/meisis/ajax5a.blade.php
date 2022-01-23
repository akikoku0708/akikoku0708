


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
</style>

<body>


<table width="40%" bgcolor="#60e0e6"align="center" border="0">
<tr><td width="60%"><div id="message"></div> </td></tr>
</table>
<div id="message2"></div>


</body>
<script type="text/javascript">

    var ikey=0;
    $(function(){ ikey='151';  read();         });

    var vname1='';var vname2=null;var vname3='';var vname5='';vname6='';vname7='';
    function func50(){  ikey='151'; read();     }
    function func51(){   ikey='152';
    vname2 = $("input[name=email]").val();
    if(vname2==''){$('#mes1').html('<div align="center"style="font-size:13px;">空白項目があります！</div>');}else{     read();     }
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
    //-------------------------------------------------------------------------
    $.ajaxSetup({
    headers: {  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')    }
    });
    //--------------------------------------------------------------
  //  $(".btn-submit").click(function(e){  e.preventDefault();   read();  });
   //----------------------------------------------------------------------
      function read(){
        $.ajax({
           type:'POST',
           url:"{{ route('/meisis/ajax5b') }}",
           data:{kname1:ikey, kname2:vname2,kname3:vname3, kname5:vname5,kname6:vname6, kname7:vname7 },
           success:function(data){
   //-------------------------------------------------------------------------
   var mail='';if(data['zname2']==null){mail='';}else{ mail='mail: '+data['zname2'];   }
   if(data['zname1']=='151'){
$('#message').html('<table width="80%" align="center" border="0">'
+'<tr><td width=""height="60"align="center"></br><strong>新規登録 </strong> </td></tr>'
+'<tr><td width="80%"><label id="mes1"></label>'
+'<p style="font-size:13px;"> ID or Mail <input class="input51"type="text" name="email" value=""></p></br>'
+'<p align="center"><span><button id="close"style="color:#fff;background-color:#708090;width:160px;height:40px">キャンセル</button></span>'
+'  <span align="center"><button onclick="func51();"style="color:#fff;background-color:#708090;width:160px;height:40px">ログイン</button></span></p>'
 +'</td></tr></table>'
 );
}
if(data['zname1']=='152'){
  if(data['zname2']==null){}else{
$('#message').html('<table width="80%" align="center" border="0">'
+'<tr><td width=""height="60"align="center"></br><strong>新規詳細登録 </strong> </td></tr>'
+'<tr><td width="80%">'
+'<p style="font-size:13px;">'+mail+'</p><label id="mes2"></label>'
+'<p style="font-size:13px;"> 名　　　前 <input class="input51"type="text" name="namek"  ></p>'
+'<p style="font-size:13px;"> パスワード <input class="input51"type="text" name="pass1"  ></p>'
+'<p style="font-size:13px;"> パスワード確認 <input class="input51"type="text" name="pass2"  ></p>'
+'<p style="font-size:13px;"> 登録コード <input class="input51"type="text" name="codek"  ></p></br>'
 +'<p align="center"><span><button onclick="func50();"style="color:#fff;background-color:#708090;width:160px;height:40px">キャンセル</button></span>'
+'  <span align="center"><button onclick="func52();"style="color:#fff;background-color:#708090;width:160px;height:40px">ログイン</button></span></p>'
+'</td></tr></table>'
);
}}
if(data['zname1']=='153'){
  $('#message').html(data['zname2']+data['zname3']+data['zname5']+data['zname6']+data['zname7']+data['zname8']);
}
             //-----------ok-------------------
           }
        });
        }
</script>

</html>
