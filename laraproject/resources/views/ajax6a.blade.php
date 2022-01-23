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
  <input type="file" id="file_input" name="tmpfile[]" multiple="multiple" onchange=checkfile()>


  <!-- <input type="file" name="file1[]"id="selfile" multiple><br> -->
    <button type="submit" id="button2" style="width:100px; height:30px;" >画像登録</button>

  <div id="property"></div>

 <div id="as">     </div>
<!-- <form id="send-form" method="post" enctype="multipart/form-data">
<input type="file" id="file1" name="upfile[]"  multiple>

  <button type="submit" id="button2" style="width:100px; height:30px;" >画像登録</button>


           </form>

         -->


</body>
<script type="text/javascript">

var list = "";
function checkfile() {
  var file_name = document.getElementById("file_input").files;
  for (var i=0; i<file_name.length; i++){ list += file_name[i].name + " ,"  }
}
 $("#button2").on('click', function(event){
$('#as').append(list);
 });
 /*
var obj1 = document.getElementById("selfile");

obj1.addEventListener("change", function(evt){
  var file = evt.target.files;　
  var num  = file.length;
  var str = "";
  for ( var i = 0 ; i < num ; i++ ) {
    $('#as').append(file[i].name+'</br>');
  }
},false);

*/






/*
var obj1 = document.getElementById("selfile");
//var obj2 = document.getElementById("property");

obj1.addEventListener("change", function(evt){
  var file = evt.target.files;　//選択ファイルを配列形式で取得
  var num  = file.length;       //選択されたファイル数を格納
  var str = "";                 //ファイル情報を格納する変数

  for ( var i = 0 ; i < num ; i++ )
  {
  //  str += "[" + parseInt(i+1) + "番目のファイル]<br>";
  //  str += "ファイル名：" + file[i].name + "<br>";
    $('#as').append(file[i].name+'</br>');
  //  str += "ファイルサイズ：" + file[i].size + "byte<br>";
  //  str += "ファイルタイプ：" + file[i].type + "<br>";
  //  if ( i < num-1 ) str += "<br>";
  }

//  obj2.innerHTML = str;
//  obj2.style.backgroundColor = "#cccccc";

},false);

*/

</script>


</html>
