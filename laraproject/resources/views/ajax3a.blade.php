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

<table class="tabel2"width="40%" align="center" border="0"><tr><td>
  <table width="80%" align="center" border="0"><tr><td>
    <div class="container">
        <h2 align="center">Login</h2>
        <form >
            <div class="formd"></br>
                <label class="label2">Name:</label></br>
                <input type="text" name="name" class="form-control" placeholder="Name" required=""></br>
            </div>
            <div class="formd"></br>
                <label class="label2">Password:</label></br>
                <input type="password"name="password" id="textPassword" class="form-control2" placeholder="password" required="">
             <img src="{{'images/eye1.png'}}" id="buttonEye"onclick="pushHideButton()"class="fa-eye"width="30"height="15">
            </div>

              <div class="formd"></br>
                <strong class="label2">Email:</strong></br>
                <input type="email" name="email" class="form-control" placeholder="Email" required=""></br>
            </div>

            <p class="form-group"></br>
                <button class="btn-submit">Submit</button>
            </p><p></p>
        </form>
    </div>
</td></tr></table>
</td></tr></table>
<div id="message"></div>
</body>
<script type="text/javascript">
var arrtx=[]; var txtx;
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $(".btn-submit").click(function(e){

        e.preventDefault();
        var name = $("input[name=name]").val();
        var password = $("input[name=password]").val();
        var email = $("input[name=email]").val();

        $.ajax({
           type:'POST',
           url:"{{ route('ajax3b') }}",
           data:{name:name, password:password, email:email   },
           success:function(data){

$('#message').append( data.email+'</br>'+data.name+'</br>'+data.pass);

           }
        });

    });
</script>

</html>
