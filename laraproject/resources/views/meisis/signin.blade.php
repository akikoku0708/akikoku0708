
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

</style>

<body>

<style>
.popup {  display: none;  height: 100vh;  width: 100%;  background: black;  opacity: 0.7;
  position: fixed;  top: 0;  left: 0;
}
.content {  background: #fff;  padding: 30px;  width: 30%;}
.show {  display: flex;  justify-content: center;  align-items: center;     }

.input51{ background-color:#66ff99;border:none;border-color:#99ffff;border-radius:5px;width:90%;height:40px;    }
</style>
 <script>
 $(function(){
 $("button").on("click", function() {   $(".popup").addClass("show").fadeIn(); });
 $("#close").on("click", function() {   $(".popup").fadeOut(); });
  $(".btn-submit").on("click", function() {   $(".popup").fadeOut(); });
 });

 </script>



 <p align="center" ><button style="width:160px;height:40px">ログイン</button></p>
 <div class="popup">
   <div class="content">
<!-- ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^ -->

     <table width="90%" align="center" border="0"><tr><td width="60%">
   <form >
   <p align=""> ID or Mail <input class="input51"type="text" name="keyw" value=""required=""style="" ></p>
     <p align=""> Password <input class="input51"type="text" name="search"  required=""style=""></p></br>
      <input class="input51"type="hidden" name="ikey51" value="8888" required=""style="">
    <p align="center"><span><button id="close"style="width:160px;height:40px">キャンセル</button></span>
   <span align="center"><button class="btn-submit"style="width:160px;height:40px">ログイン</button></span></p>
   </form>
   </td></tr></table>
<!-- ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^ -->

   </div>
 </div>


 <table align="center"border="2"><tr><td><div id="message">xxxxx</div></td></tr></table>



</td></tr></table>
</body>
<script type="text/javascript">

    var ikey='';
    function func51(){
    vname1 = $("input[name=search2]").val();
    vname2 = $("input[name=keyw2]").val();
    ikey = $("input[name=ikey52]").val();
    read();      }
    //-------------------------------------------------------------------------
    $.ajaxSetup({
    headers: {  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')    }
    });
    //--------------------------------------------------------------
     var vname1='';var vname2='';var vname3='';var vname4='';var vname5='';var vname6='';
    $(".btn-submit").click(function(e){  e.preventDefault();
      vname1 = $("input[name=search]").val();
      vname2 = $("input[name=keyw]").val();
      ikey = $("input[name=ikey51]").val();
      read();
    });

   //----------------------------------------------------------------------

      function read(){
      alert(vname1+vname2+ikey);
        $.ajax({
           type:'POST',
           url:"{{ route('/meisis/signinajax') }}",
           data:{kname1:vname1, kname2:vname2, kname3:ikey},
           success:function(data){
   //-------------------------------------------------------------------------

      if(data['zname3']=='8888'){
        $('#message').append('333333<table width="90%" align="center" border="0"><tr><td width="60%"><form >'
      +'<p align=""> ID22 or Mail <input class="input51"type="text" name="keyw2" value=""required=""style="" ></p>'
        +'<p align=""> Password22 <input class="input51"type="text" name="search2"  required=""style=""></p></br>'
        +' <input class="input51"type="hidden" name="ikey52" value="8852" required=""style="">'
       +'<p align="center"><span><button id="close"style="width:160px;height:40px">キャンセル</button></span>'
    +'  <span align="center"><button onclick="func51();"style="width:160px;height:40px">ログイン</button></span></p></form>'
      +'</td></tr></table>'
      );

      }



      $('#message').append(data['zname1']+data['zname2']);


      //$('#message').append('<table border="1"><tr><td>'+data['zname1']+data['zname2']+data['zname3']+'</td></tr><table>');


             //-----------ok-------------------
           }
        });
        }
</script>

</html>
