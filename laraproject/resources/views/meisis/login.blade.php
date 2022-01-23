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
<script>
jQuery(function(){
//--------------pass1------------------------------------------
var pw = document.getElementById('pass1');
var pwCheck = document.getElementById('password-check');
pwCheck.addEventListener('change', function() {     if(pwCheck.checked) {
pw.setAttribute('type', 'text'); } else { pw.setAttribute('type', 'password'); }  }, false);
//--------------------------------------------------------------------------------------------
});
 </script>
<style>
.input51{ background-color:#99ffff;border:none;border-color:#99ffff;border-radius:5px;width:99%;height:40px; }
.btn11{ font-size:16px;border:none;background-color:#60e0e6;border-radius:5px;width:100%;height:60px;    }
.btn12{ border-radius:3px;border:none;color:#fff;background-color:#708090;width:160px;height:40px    }

.login5{ background-color:#99ffff;border:none;border-color:#99ffff;border-radius:5px;width:99%;height:40px;	}
.login5:focus {  		outline: solid 1px #333;	}
input[type=checkbox].che2{-webkit-appearance: none; position: relative;display: inline-block;
  background-size: contain; position: relative;width: 25px;height:15px;top:-30px; left:85%;
background-image:url({{ asset('images/eye1.png')}});
}

</style>

<body>



<hr width="40%"><table width="40%" align="center" bordercolor="#fff"cellspacing="2"border="0">
<tr><td width="50%"><a href="{{url('meisis/creat')}}"><button class="btn11">新規登録</button></a>
</td><td width="50%"><a href="{{url('meisis/forget')}}"><button class="btn11">パスワード忘れた</button></a>
</td></tr></table>

<table width="40%" align="center"bgcolor="#60e0e6"style="border-radius:5px;" border="0"><tr><td>
<table width="80%" align="center" border="0">
<tr><td width=""height="60"align="center"></br><strong>ログイン </strong> </td></tr>
<tr><td width="80%">
<p style="font-size:13px;"> ID or email <input type="text"id="email"class="input51"name="email"  ></p>
<input class="login5" type="password"id="pass1"name="pass1"value="" placeholder="" >
<input type="checkbox" class="che2"id="password-check" />

<p align="center"><span><button onclick="func50();"class="btn12">クリア</button></span>
<span align="center"><button onclick="func52();"class="btn12">ログイン</button></span></p>
</br></td></tr></table>


</td></tr></table>
<table width="80%" align="center" border="0">
<tr><td width=""height="60"align="center"><div id="message"></div> </td></tr>
</td></tr></table>


   <script>
   //-------------------------------------------------------------------------
    $(function() {    $('#passcheck').change(function(){
           if ( $(this).prop('checked') ) {  $('#pass1').attr('type','text');
    } else {   $('#pass1').attr('type','password');     } colspan=""    });   });
    //---------------------------------------------------------------------------
   </script>
</body>
<script type="text/javascript">
    var vname1; var vname2;
    function func52(){
      vname1 = $("input[name=email]").val();
      vname2 = $("input[name=pass1]").val();
      if(vname1==''||vname2==''){
  $('#message').html('<div align="center"style="font-size:13px;">空白項目があります！</div>');  }else{ read();  }

    }

    function func50(){
    var textForm = document.getElementById("email");     textForm.value = '';
    var textForm2 = document.getElementById("pass1"); textForm2.value = '';
  }
    //-------------------------------------------------------------------------
    $.ajaxSetup({
    headers: {  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')    }
    });
    //--------------------------------------------------------------
  //  $(".btn-submit").click(function(e){  e.preventDefault();   read();  });
   //----------------------------------------------------------------------
      function read(){
      //  var vname1 = $("input[name=email]").val();
      //  var vname2 = $("input[name=pass1]").val();

        $.ajax({
           type:'POST',
           url:"{{ route('/meisis/meisisajax/loginajax') }}",
           data:{kname1:vname1, kname2:vname2},
           success:function(data){
   //-------------------------------------------------------------------------
        // $('#message').append('<table border="1"><tr><td>'+data['zname1']+data['zname2']+'</td></tr><table>');
      if(data['zname3']=='passok'){
       window.location.href = "{{URL::to('meisis/meisis')}}?sear=33333";  }
    if(data['zname3']=='false1'){
    $('#message').append('IDあるいはパスワードが間違っていました。');   }

             //-----------ok-------------------
           }
        });
        }
        //-------------------------------------------------


</script>

</html>
