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
.form-control2{width:60%;height:24px;font-size:13px;border-color:#fff; border-radius:3px;
}
.formd{  display: inline-block; width:100%;font-size:13px;  }
.btn-submit{width:100px;height:30px; background-color:#483d86;color:#fff;border-radius: 3px;}
.tabel2{ border-radius:5px;border:1px solid #6699ff;background-color:#99ffff;}

.img2 {

}

</style>
<script language="javascript">
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
    </script>
<body>

         テキスト：<input type="text" id="text"><br/>
          ファイル：<input type="file" id="file"><br/>

         <button type="submit" onclick="send();">送信</button>

         <div id="main">     </div>

         <!-- JavaScripts -->
         <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
         <script src="{{ url('test.js') }}"></script>


<img src="{{ asset('storage/chen/gda2.jpg') }}" width="100" height="100">
<img src="{{ asset('storage/upload/z123.jpg') }}" width="100" height="100">
</body>
<script type="text/javascript">
function send(){

    $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
    });

    var textData = $("#text").val();
    var fileData = document.getElementById("file").files[0];
    var form = new FormData();
    form.append( "text", textData );
    form.append( "file", fileData );
    $.ajax({
        type: 'post',
        url: '{{ route('ajax8b') }}',
        data: form,
        processData : false,
        contentType : false,

        success: function(data){
            $("#main").append('xx'+data.ret+data.name);
        },
        error : function(){
            alert('通信ができない状態です。');
        }
    });
}
</script>

</html>
