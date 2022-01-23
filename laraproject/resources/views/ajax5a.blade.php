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
<!-- <script language="javascript">
      function pushHideButton() {
        var txtPass = document.getElementById("textPassword");
        var btnEye = document.getElementById("buttonEye");
        if (txtPass.type === "text") {
          txtPass.type = "password";
          btnEye.className = "fa-eye";
        } else {
          txtPass.type = "text";
          btnEye.className = "fa-eye-slash";
        }
      }
    </script> -->
<body>

<table class="tabel2"width="100%" align="center" border="0"><tr><td>
  <form >
  <table width="50%" align="center" border="0"><tr><td width="90%">


  <input type="text" name="search" class="form-control" placeholder="検索" required=""></br>
</td><td width="10%"><button class="btn-submit">検索</button>
<input type="hidden" name="keyw" value="key word"required=""></br>

</td></tr></table>
</form>
</td></tr></table>
<div id="message2"></div>
<div id="message"></div>
</body>
<script type="text/javascript">

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $(".btn-submit").click(function(e){

        e.preventDefault();

        var name = $("input[name=search]").val();
        var keyw = $("input[name=keyw]").val();
        var meme; var datak; var namek; var emailk; var result;
        $.ajax({
           type:'POST',
           cache: false,
           dataType: 'json'?id=+Math.random(),
           url:"{{ route('ajax5b') }}",
           data:{name:name, email:keyw},
           success:function(data){
            datak=data['menux'];
            namek=data['name'];
            emailk=data['email'];
            namek = namek.replace(/　/g," ");
            result = namek.split(" ");
//-------------------------------------------------------------------------
     for(var i=0;i<datak.length;i++){
      meme=''+datak[i]['category']+datak[i]['classm']+datak[i]['itemk']
       +datak[i]['product']+datak[i]['itemcode']+'</br>';
       for(var k=0;k<result.length;k++){
       if (meme.indexOf(result[k]) !== -1) {   $('#message').append(meme);  }
      } }

//-----------------------ok--------------------------------
  /*        for(var i=0;i<data.length;i++){
        if(arrt[0]===data[i]['itemk'] ){
               $('#message').append(''
               +data[i]['category']+data[i]['classm']+data[i]['itemk']
               +data[i]['product']+data[i]['itemcode']+'</br>');
             }
            }
*/
             //-----------ok-------------------
           }
        });
    });
</script>

</html>
