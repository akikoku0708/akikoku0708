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
.tabel2{ height:40px;border-radius:5px;border:1px solid #6699ff;background-color:#99ffff;}

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
  <table width="50%" align="center" border="0"><tr><td width="90%">
  <input type="text" name="search" class="form-control" placeholder="検索" required=""></br>
</td><td width="10%"><button class="btn-submit">検索</button>
<input type="hidden" name="keyw" value="key word"required=""></br>

</td></tr></table>

</td></tr></table>
<table width="100%" align="center" border="0"><tr><td width="20%">


</td><td width="80%">
    <div id="message2"></div>
</td></tr></table>

  <div id="message"></div>

</body>
<?php
$fnamed1=array();
$dpath="../storage/app/public/home_top";
$dir = $dpath ;
if( is_dir( $dir ) && $handle = opendir( $dir ) ) {
    while( ($file2 = readdir($handle)) !== false ) {
      if( filetype( $path = $dir .'/'. $file2 ) == "file" ) {
      $fnamed1[]=$file2;
    } }}
$jsonTest=json_encode($fnamed1);
 ?>

<img id="mypic" src="" width="400" height="300">
<script>

$('#za').hover(function(){  stopTimer();    },function(){   startTimer();      });

var imgtk=JSON.parse('<?php echo $jsonTest; ?>');
var countk=imgtk.length-1;
var num = -1;
slideshow_timer();
//------------------------------------------------------------


//------------------------------------------------------------

    function slideshow_timer(){
    if (num >= countk){ num = 0;   }else { num ++;  }
     document.getElementById("mypic").src='../storage/home_top/'+imgtk[num];
    setTimeout("slideshow_timer()",5000);
    }


</script>

</html>
