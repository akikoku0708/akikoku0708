<?php
  $storeid='';  $storename='';
  $storeid=Session('storeidkk');
  $storename=Session('storenamekk');

  //if($storeid==''){
    // +++++++++++++++++++++++++++++++++++++++++++++++++++++++++
  ?>



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
.btn21{ align: right;  }


</style>

<body>
  @extends('layouts.add')
  <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
  <table align="center" width="100%"bgcolor="#008000"><tr class="he30">
  <td width="10%" style="font-family:arial black;color:#fff;"align="center" >
  <a href="{{ url('manager/home') }}" class="ft20"style="text-decoration:none;color:#fff;">
    meisis </a> </td > <td class="ft11"width="20%"align="center"style="color:#fff;">
    <?php
      if($storeid!=''){  echo ''.$storename.'様  ログイン中';     }
    ?>
  </td > <td width="60%"align="right">
  <a href="{{ url('manager/home') }}"  >  <button class="btncss24">戻る</button></a>
  </td></tr></table><hr class="hr">
  <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
    @error('token') <div class="alert alert-danger">{{ $message }}</div> @enderror

  <!-- **************************login*******************#******************* -->
  <table width="100%" class="he1500"bgcolor="#99fff;"border="0">
    <tr><td style="vertical-align:top;">

  <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~１１１１~~~~~~~~~~~~~~~~~~~~~~~ -->
<table width="90%"align="center"border="0"style=""><tr><td align="center">
<table width="100%"align="center"bgcolor="#66ff99"border="0"cellspacing="0"style="">
<tr class="ft13"><td align="center"class="he30"><strong>広告①画像登録</strong>
</td></tr></table> </td></tr></table>


<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~広告①画像登録~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
<table width="90%"align="center"border="0"cellspacing="0"bordercolor="#cccccc">
<tr><td style="vertical-align:top"width="30%"bgcolor="#8fbc8f">
<table width="100%"align="center"border="0"class="he200"cellspacing="0"style="">
<tr><td class="he20"colspan="2"align="center"></td></tr>
<input type="hidden" id="text" value="xzax">
  <tr><td width="25%" class="he100"align="center"><div><label for="images" class="lab2"style=""></td><td>
<input type="file" id="images" name="images[]" onchange="$('#fake_text_box1').val($(this).val())" style="display:none" multiple></span></label><div>
<label for="images" class="he20"style="width:90%; vertical-align:central">
<input type="text" id="fake_text_box1"value="" readonly onClick="$('#images').click();"placeholder="押して画像選択"class="inputcss11"style=" " ></label></div></div>
</td></tr>
<tr><td class="he60"colspan="2"align="center">
<button type="submit" id="button81" class="btncss25">画像登録</button></td></tr>
</table>
<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
 </td><td style="vertical-align:top">
 <table width="100%"align="center"border="0"style="">
 <tr><td style="padding-left:10px;vertical-align:top"class="he100">
<div id="main">  </div></td></tr></table>
</td></tr></table>

<!-- +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~222~~~~~~~~~~~~~~~~~~~~~~~ -->
<table width="90%"align="center"border="0"style=""><tr><td align="center">
<table width="100%"align="center"bgcolor="#66ff99"border="0"cellspacing="0"style="">
<tr class="ft13"><td align="center"class="he30"><strong>広告②画像登録</strong>
</td></tr></table> </td></tr></table>


<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~広告①画像登録~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
<table width="90%"align="center"border="0"cellspacing="0"bordercolor="#cccccc">
<tr><td style="vertical-align:top"width="30%"bgcolor="#8fbc8f">
<table width="100%"align="center"border="0"class="he200"cellspacing="0"style="">
<tr><td class="he20"colspan="2"align="center"></td></tr>
<input type="hidden" id="text82" value="xzax">
 <tr><td width="25%" class="he100"align="center"><div><label for="images" class="lab2"style=""></td><td>
<input type="file" id="images82" name="images82[]" onchange="$('#fake_text_box82').val($(this).val())" style="display:none" multiple></span></label><div>
<label for="images82" class="he20"style="width:90%; vertical-align:central">
<input type="text" id="fake_text_box82"value="" readonly onClick="$('#images82').click();"placeholder="押して画像選択"class="inputcss11"style=" " ></label></div></div>
</td></tr>
<tr><td class="he60"colspan="2"align="center">
<button type="submit" id="button82" class="btncss25">画像登録</button></td></tr>
</table>
<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
 </td><td style="vertical-align:top">
<table width="100%"align="center"border="0"style="">
<tr><td style="padding-left:10px;vertical-align:top"class="he100">
<div id="main82">  </div></td></tr></table>
</td></tr></table>


<!-- +++++++++++++++++++++++++++++++++++++++333++++++++++++++++++++ -->
<table width="90%"align="center"border="0"style=""><tr><td align="center">
<table width="100%"align="center"bgcolor="#66ff99"border="0"cellspacing="0"style="">
<tr class="ft13"><td align="center"class="he30"><strong>広告③画像登録</strong>
</td></tr></table> </td></tr></table>
<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~広告③画像登録~~~~~333~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
 <table width="90%"align="center"border="0"cellspacing="0"bordercolor="#cccccc">
<tr><td style="vertical-align:top"width="30%"bgcolor="#8fbc8f">
<table width="100%"align="center"border="0"class="he200"cellspacing="0"style="">
<tr><td class="he20"colspan="2"align="center"></td></tr>
<input type="hidden" id="text83" value="xzax83">
  <tr><td width="25%" class="he100"align="center"><div><label for="images83" class="lab2"style=""></td><td>
<input type="file" id="images83" name="images83[]" onchange="$('#fake_text_box83').val($(this).val())" style="display:none" multiple></span></label><div>
<label for="images83" class="he20"style="width:90%; vertical-align:central">
<input type="text" id="fake_text_box83"value="" readonly onClick="$('#images83').click();"placeholder="押して画像選択"class="inputcss11"style=" " ></label></div></div>
</td></tr>
<tr><td class="he60"colspan="2"align="center">
<button type="submit" id="button83" class="btncss25">画像登録</button></td></tr>
</table>
<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
  </td><td style="vertical-align:top">
 <table width="100%"align="center"border="0"style="">
 <tr><td style="padding-left:10px;vertical-align:top"class="he100">
<div id="main83">  </div></td></tr></table>
</td></tr></table>

<!-- +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->


<input type="hidden" name="imageszz[]"id="imageszz"value="xxxxxx">
<input type="hidden" name="textzz"id="textzz"value="xxxxx">

</td></tr></table>
</body>
<script type="text/javascript">

var ikey=0;var idele=""; var arrdel=[];
var textData='';    var TotalImages='';     var  formData= new FormData();var images='';
//---------------------------------------------------------------------------
$("#button81").on('click', function(event){  ikey=81;
  textData = $("#text").val();
  TotalImages= $('#images')[0].files.length;
  images= $('#images')[0];
  read();
  });
//------------------------------------------------------------------------------------
$("#button82").on('click', function(event){  ikey=82;
  textData = $("#text82").val();
  TotalImages= $('#images82')[0].files.length;
  images= $('#images82')[0];
  read();
  });
//------------------------------------------------------------------------------------
$("#button83").on('click', function(event){  ikey=83;
  textData = $("#text83").val();
  TotalImages= $('#images83')[0].files.length;
  images= $('#images83')[0];
  read();
  });
//----------------------------------------------------------------------------

function func53(){  ikey=53;  textData ='';  TotalImages= '';  images= '';  read();}
function func54(){  ikey=54;  textData ='';  TotalImages= '';  images= ''; idele=""; read();}
function func55(){  ikey=55;  textData ='';  TotalImages= '';  images= '';  read();}
//----------------------------------------------------------------------------
function func53back(){  ikey=43;  textData ='';  TotalImages= '';  images= '';  read();}
function func54back(){  ikey=44;  textData ='';  TotalImages= '';  images= ''; idele=""; read();}
function func55back(){  ikey=45;  textData ='';  TotalImages= '';  images= '';  read();}
//----------------------------------------------------------------------------
function func53de(){  ikey=53;   arrdel.length = 0;
  $('input:checkbox[name="checktt3"]:checked').each(function() {
     arrdel.push($(this).val());
    });
    idele=arrdel.join('|'); //alert(idele);
    read();
  }
  function func54de(){  ikey=54;   arrdel.length = 0;
    $('input:checkbox[name="checktt4"]:checked').each(function() {
       arrdel.push($(this).val());
      });
      idele=arrdel.join('|');// alert(idele);
      read();
    }
function func55de(){   ikey=55;
$('input:checkbox[name="checktt5"]:checked').each(function() {
   arrdel.push($(this).val());
  });
  idele=arrdel.join('|'); //alert(idele);
  read();

}
//----------------------------------------------------------------------------
$(function(){  read();   });
//-----------------------------------------------------------------------------------
$.ajaxSetup({  headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')  }   });

function read(){


for (var i= 0; i < TotalImages; i++) { formData.append('images' + i, images.files[i]);    }
  formData.append('TotalImages', TotalImages);
  formData.append( "text", textData );
  formData.append( "ikey", ikey );
  formData.append( "idele", idele );
  //----------------------------------------------------

            //alert(ikey );
//--------------------------------------------------
  //
   $.ajax({
            url: "{{ route('/manastore/manastoreajax/sitemana1ajax') }}",
            method: 'post',
            enctype: 'multipart/form-data',
            cache: false,
            data: formData,
            contentType: false,
            processData: false,
            dataType: 'JSON',
            async: true,
            success: function(data){
//-----------------------------------------------------------------------------

//============================================================================

var arrcm3=data['arrcm3']; var maincm3=''; var maincm3b='';   read53();
function read53(){ maincm3=''; maincm3b='';
for(var t=0; t<arrcm3.length;t++){
  main3mb= '<img src="../storage/img_cm3/'+arrcm3[t]+'" style="margin:3px;width:200px;height:40px; border-radius:3px;">';
  maincm3=maincm3+main3mb;    }
$("#main").html( '<div align="right"><button onclick="func53();"class="btncss25">編集削除</button></div>'
+'<hr>'+maincm3);
}
//---------------------------------------------------------------------------
var arrcm4=data['arrcm4']; var maincm4=''; var maincm4b='';     read54();
function read54(){    maincm4=''; maincm4b='';
for(var t4=0; t4<arrcm4.length;t4++){
  main4mb= '<img src="../storage/img_cm4/'+arrcm4[t4]+'" class="imgcss19">';
  maincm4=maincm4+main4mb;    }
$("#main82").html( '<div align="right"><button onclick="func54();"class="btncss25">編集削除</button></div>'+'<hr>'+maincm4   );
}
//---------------------------------------------------------------------------
var arrcm5=data['arrcm5']; var maincm5=''; var maincm5b='';     read55();
function read55(){maincm5=''; maincm5b='';
for(var t5=0; t5<arrcm5.length;t5++){
  main5mb= '<img src="../storage/img_cm5/'+arrcm5[t5]+'" class="imgcss19">';
  maincm5=maincm5+main5mb;    }
$("#main83").html('<div align="right"><button onclick="func55();"class="btncss25">編集削除</button></div>'+'<hr>'+ maincm5   );
}
//---------------------------------------------------------------------------
//~~++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
  var maincmde3=''; var maincmde3b='';
  if(data['ikey']==53){
  for(var tz=0; tz<arrcm3.length;tz++){
  mainde3mb='<span class="spancss20"><img src="../storage/img_cm3/'+arrcm3[tz]+'" class="imgcss19">'
                  +'<input type="checkbox"name="checktt3"value="'+arrcm3[tz]+'"class="che1" ></span>';
  maincmde3=maincmde3+mainde3mb;
  $("#main").html( ''+'<table width="100%"border="0"><tr><td>'
  +'<button onclick="func53back();"class="btncss25">戻る</button>'
  +'</td><td width="50%"align="right">'
  +'<button onclick="func53de();"class="btncss25">削除確定</button>'+'</td></tr>'
  +'<tr><td colspan="2" style="line-height:5px;"><hr></td></tr>'
  +'<tr><td colspan="2" height="100"style="vertical-align:top">'+maincmde3+'</td></tr>'+'</table>'
  );    }}
//----------------------------------------------------------------------------
if(data['ikey']==43){  read53();    }
//+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
var maincmde4=''; var maincmde4b='';
if(data['ikey']==54){
for(var tz4=0; tz4<arrcm4.length;tz4++){
mainde4mb='<span class="spancss20"><img src="../storage/img_cm4/'+arrcm4[tz4]+'" class="imgcss19">'
                +'<input type="checkbox"name="checktt4"value="'+arrcm4[tz4]+'"class="che1" ></span>';
maincmde4=maincmde4+mainde4mb;
$("#main82").html( ''+'<table width="100%"border="0"><tr><td>'
+'<button onclick="func54back();"class="btncss25">戻る</button>'
+'</td><td width="50%"align="right">'
+'<button onclick="func54de();"class="btncss25">削除確定</button>'+'</td></tr>'
+'<tr><td colspan="2" style="line-height:5px;"><hr></td></tr>'
+'<tr><td colspan="2" height="100"style="vertical-align:top">'+maincmde4+'</td></tr>'+'</table>'
);    }}
//----------------------------------------------------------------------------
if(data['ikey']==44){  read54(); }
//+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
var maincmde5=''; var maincmde5b='';
if(data['ikey']==55){     for(var tz5=0; tz5<arrcm5.length;tz5++){
mainde5mb='<span class="spancss20"><img src="../storage/img_cm5/'+arrcm5[tz5]+'" class="imgcss19">'
          +'<input type="checkbox"name="checktt5"value="'+arrcm5[tz5]+'"class="che1" ></span>';
          maincmde5=maincmde5+mainde5mb;
$("#main83").html( ''+'<table width="100%"border="0"><tr><td>'
+'<button onclick="func55back();"class="btncss25">戻る</button>'
+'</td><td width="50%"align="right">'
+'<button onclick="func55de();"class="btncss25">削除確定</button>'+'</td></tr>'
+'<tr><td colspan="2" style="line-height:5px;"><hr></td></tr>'
+'<tr><td colspan="2" height="100"style="vertical-align:top">'+maincmde5+'</td></tr>'+'</table>'
);    }}
//----------------------------------------------------------------------------
if(data['ikey']==45){   read55();   }
//+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
if(data['ikey']==83){     var textForm83 = document.getElementById("images83");
var textForm83b = document.getElementById("fake_text_box83");
textForm83.value = '';    textForm83b.value = '';       }
//------------------------------------------------------------------
if(data['ikey']==82){     var textForm82 = document.getElementById("images82");
var textForm82b = document.getElementById("fake_text_box82");
textForm82.value = '';    textForm82b.value = '';       }
//------------------------------------------------------------------
if(data['ikey']==81){     var textForm = document.getElementById("images");
var textFormb = document.getElementById("fake_text_box1");
textForm.value = '';    textFormb.value = '';       }
//------------------------------------------------------------------



//----------------------------ok ------------------------------------------
          },   headers: { 'Content-Type': undefined,   },
          xhr: function() {    myXhr= $.ajaxSettings.xhr();   return myXhr;   },      });
//-------------------------------------------------------------------------------------------
}


</script>



</html>
