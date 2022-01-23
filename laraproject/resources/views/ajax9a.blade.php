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

</style>
<body>

  テキスト：<input type="text" id="text"><br/>
   ファイル：<input type="file" name="images[]"id="images" multiple><br/>
<button type="submit" id="button2" style="width:100px; height:30px;" >画像登録</button>

  <div id="main">     </div>
<img src="{{ asset('storage/chen/gda2.jpg') }}" width="100" height="100"> 

</body>


<script type="text/javascript">
var textData = '';
var TotalImages= '';
var images= '';
var formData= new FormData();
//-----------------------------------------------------------------------
//$(function(){  read();     });
//---------------------------------------------------------------------------
$("#button2").on('click', function(event){
  textData = $("#text").val();
  TotalImages= $('#images')[0].files.length;
  images= $('#images')[0];
  read();
});
//-------------------------------------------------------------------------------------
$.ajaxSetup({  headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')  }    });
//--------------------------------------------------------------------------------------
function read(){
//----------------------------------------------------------
  for (var i= 0; i < TotalImages; i++) { formData.append('images' + i, images.files[i]);   }
  formData.append('TotalImages', TotalImages);
  formData.append( "text", textData );
  //------------------------------------------------------------------------------
   $.ajax({
            url: "{{ route('ajax9b') }}",
            method: 'post',
            enctype: 'multipart/form-data',
            cache: false,
            data: formData,
            contentType: false,
            processData: false,
            dataType: 'JSON',
            async: true,
            success: function(data){
  $("#main").append(''+data.ret+'枚画像を登録しました</br>');
             if (data.name.length === 0){}else{
              for(var v=0; v<data.name.length; v++){

$("#main").append('<img src="../storage/company/'+data.name[v]+'.jpg" width="100" height="100">');
           }}
        //------------------------------------ok------------------------------------
        },  headers: { 'Content-Type': undefined,  },   xhr: function() {
        myXhr= $.ajaxSettings.xhr();  return myXhr;  },    });
  }
</script>

</html>
