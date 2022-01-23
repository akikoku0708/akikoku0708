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

</style>

<body>

  <table width="80%" align="center" border="0">
  <tr><td width=""height="60"align="center"></br><strong>MESISI </strong> </td></tr>
</td></tr></table>
<!-- <table width="40%" align="center"bgcolor="#669988" border="0"><tr><td>
<table width="80%" align="center" border="0">
<tr><td width=""height="60"align="center"></br><strong>MESISI </strong> </td></tr>
<tr><td width="80%">
<p style="font-size:13px;"> ID or email <input class="input51"type="text" name="email"  ></p>
<p style="font-size:13px;"> Password <input class="input51"type="text" name="pass1"  ></p>
<p align="center"><span><button onclick="func50();"style="color:#fff;background-color:#708090;width:160px;height:40px">キャンセル</button></span>
<span align="center"><button onclick="func52();"style="color:#fff;background-color:#708090;width:160px;height:40px">ログイン</button></span></p>
</br></td></tr></table>
</td></tr></table> -->








<div id="message"></div>
</body>
<script type="text/javascript">
    var vname1; var vname2;
    function func52(){
      vname1 = $("input[name=email]").val();
      vname2 = $("input[name=pass1]").val();
      read();
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
        $('#message').html('<table border="1"><tr><td>'
        +data['zname1']+data['zname2']+'</td></tr><table>');


             //-----------ok-------------------
           }
        });
        }
</script>

</html>
