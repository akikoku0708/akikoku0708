<?php
  $storeid='';  $storename='';
  $storeid=Session('storeidkk');
  $storename=Session('storenamekk');
echo $storeid;
  if($storeid==''){
    // +++++++++++++++++++++++++++++++++++++++++++++++++++++++++
  ?>


  <script>
  window.location.href = "{{URL::to('members/signin')}}";
  </script>
  <?php
  }else{
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
    <script src="{{ asset('/js/jquery-1.11.2.js') }}"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}" />
</head>
<style>

</style>


<body>
  @extends('layouts.add')
  <?php
  $amenu4='';$amenu45=''; $strid='';
  if(isset($_GET['amenu4'])){   $amenu4=$_GET['amenu4'];             }
  if(isset($_GET['strid'])){   $strid=$_GET['strid'];             }
  $codeitem='i202112291219384Qw';
  $numitem= $amenu4;
   ?>
   <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
   <table align="center" width="100%"bgcolor="#008000"><tr class="he30">
   <td width="10%" style="font-family:arial black;color:#fff;"align="center" >
   <a href="{{ url('manager/home') }}" class="ft20"style="text-decoration:none;color:#fff;">
     meisis </a> </td > <td class="ft11"width="20%"align="center"style="color:#fff;">
     <?php
       if($storeid!=''){  echo ''.$storename.'様  ログイン中';     }
     ?>
   </td > <td width="60%"align="right">
   <a href="{{ url('client/clientproduct') }}"  >  <button class="btncss24">戻る</button></a>
   </td></tr></table><hr class="hr">
   <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
     @error('token') <div class="alert alert-danger">{{ $message }}</div> @enderror

   <table class="he1500"width="100%" border="0"> <tr><td style="vertical-align:top;">
   <!-- ************************************************************** -->

   <?php

 $arrturem=array();  $arrturep=array();  $arrmain=array();
 if(isset($arrma)){
foreach($arrma as $rrma){ echo $rrma;    }
      // $arrmain=explode('|',$arrma);

  }
 if(isset($arrtu)){  $arrturem=explode('|',$arrtu);      }
 $jsonTest1=json_encode($arrmain);
 $jsonTest2=json_encode($arrturem);
 //==========================================================================
  ?>

   <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
   <div id="main1"></div>
   <table width="90%"align="center"border="0"style="">
     <tr><td colspan="2"align="center"><h4>商品画像登録</h4></td></tr>
     <tr class="ft13"><td class="wt50"><strong>商品名:</strong></td><td class="he20"><strong><?php echo $storename;  ?></strong></td></tr>
     <tr class="ft13"><td class="wt50"><strong>型番:</strong></td><td class="he20"><strong><?php echo $numitem;   ?></strong></td></tr>
     </table>
         <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
       <table width="90%"align="center"border="0"style=""><tr><td align="center">
       <table width="100%"align="center"bgcolor="#66ff99"border="0"cellspacing="0"style="">
       <tr class="ft13"><td align="center"class="he30"><strong>商品メイン画像登録（5枚まで）</strong>
       </td></tr></table> </td></tr></table>
       <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~商品メイン画像~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
     <table width="90%"align="center"border="0"style="">
     <tr><td style="vertical-align:top">
     <table width="100%"align="center"border="0"bgcolor="#8fbc8f"class="he200"cellspacing="0"style="">
     <tr><td class="he20"colspan="2"align="center"></td></tr>
     <input type="hidden" id="text" value="<?php echo $numitem; ?>">
     <input type="hidden" id="imgkey" value="imgkey">
     <tr><td width="25%" class="he100"align="center"><div><label for="images" class="lab2"style=""></td><td>
     <input type="file" id="images" name="images[]" onchange="$('#fake_text_box1').val($(this).val())" style="display:none" multiple></span></label><div>
     <label for="images" class="he20"style="width:90%; vertical-align:central">
     <input type="text" id="fake_text_box1"value="" readonly onClick="$('#images').click();"placeholder="押して画像選択"class="inputcss11"style=" " ></label></div></div>
     </td></tr>
     <tr><td class="he60"colspan="2"align="center">
     <button type="submit" id="button2" class="btncss25">画像登録</button></td></tr>
     </table>
   <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
   </td><td width="50%"style="vertical-align:top">
   <table width="100%"align="center"border="0"bgcolor="#8fbc8f"class="he200"cellspacing="0">
     <tr align=""><td class="he100"style="padding-left:8px;vertical-align:top"><div id="main"></div></td></tr>
   </table>
   </td></tr></table></br>

  <!-- ================5===============商品紹介画像（色・デザインなど；９枚まで）======================================     -->

<table width="90%"align="center"border="0"style=""><tr><td align="center">
<table width="100%"align="center"bgcolor="#66ff99"border="0"cellspacing="0"style="">
<tr class="ft13"><td align="center"class="he30"><strong>商品色・デザインなど（9枚まで）</strong>
</td></tr></table> </td></tr></table>
  <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
  <table width="90%"align="center"border="0"style="">
  <tr><td style="vertical-align:top">
  <table width="100%"align="center"class="he200"border="0"bgcolor="#8fbc8f"cellspacing="0"style="">
  <tr><td class="he20"colspan="2"align="center"></td></tr>
  <input type="hidden" id="text5" value="<?php echo $amenu4; ?>">
  <input type="hidden" id="imgkey5" value="imgkey5">
  <tr><td width="25%" class="he60"align="center"><div><label for="images5" class="lab2"></td><td>
  <input type="file" id="images5" name="images5[]" onchange="$('#fake_text_box5').val($(this).val())" placeholder=""style="display:none;border:none;" multiple></span></label><div>
  <label for="images5" class="he20"style="width:90%; vertical-align:central">
  <input type="text" id="fake_text_box5"value="" readonly onClick="$('#images5').click();"placeholder="押して画像選択"class="inputcss11"style="" ></label></div></div>
  </td></tr>
  <tr><td class="he80"colspan="2"align="center">
  <button type="submit" id="button5" class="btncss25" >画像登録</button></td></tr>
  </table>
<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
</td><td width="50%"style="vertical-align:top">

<table width="100%"align="center"border="0"bgcolor="#8fbc8f"class="he200"cellspacing="0"style="">
<tr><td class="he20"align="center"></td></tr>
<tr align=""><td class="he100"style="padding-left:8px;vertical-align:top"><div id="main5"></div></td></tr>
<tr><td align="right"><a href="{{ url('client/clientimgdele1') }}?ikey=imgkey5&strid=<?php echo $strid; ?>&amenu4=<?php echo $amenu4; ?>" >
  <button class="btncss25">画像削除</button></a></td></tr>
</table>
</td></tr></table>
<!-- =====================================================================     -->

  </td></tr></table>
  </body>
  </html>





  <script type="text/javascript">

  var codeitem='<?php echo $codeitem; ?>';
  var storeid='<?php echo $storeid; ?>';
  var picmain=JSON.parse('<?php echo $jsonTest1; ?>');
  var picturem=JSON.parse('<?php echo $jsonTest2; ?>');
  //-------------------------------------------------------------------
  var textData = '';  var ikey=0;
  var TotalImages= '';
  var images= '';
  var formData= new FormData();
  //---------------------------------------------------------------------------
  $("#button2").on('click', function(event){
    textData = $("#text").val();
    TotalImages= $('#images')[0].files.length;
    images= $('#images')[0];
    ikey='228';
    read();
  });
  //-------------------------------------------------------------------------------------
  $("#button5").on('click', function(event){
    textData = $("#text5").val();
    TotalImages= $('#images5')[0].files.length;
    images= $('#images5')[0];
    ikey='558';
    read();
  });
  //----------------------------------------------------------
function read(){
  for (var i= 0; i < TotalImages; i++) { formData.append('images' + i, images.files[i]);   }
  formData.append('TotalImages', TotalImages);
  formData.append( "text", textData );
  formData.append( "codeitem", codeitem );
  formData.append( "ikey", ikey );
//  formData.append( "ikeytt", ikeytt );
 //formData.append('Totalcolor', colors);
//-------------------------------------------------------
$.ajaxSetup({  headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')  }  });
//-----------------------------------------------------
     $.ajax({
              url: "{{ route('client/clientimg2') }}",
              method: 'post',
              enctype: 'multipart/form-data',
              cache: false,
              data: formData,
              contentType: false,
              processData: false,
              dataType: 'JSON',
              async: true,
              success: function(data){
//-------------------------------------------------------------
$("#main").append(data.ikey);
$("#main").append(data.text9);
$("#main").append(data.codeitem);
//------------------------------------------------------------------------
var textForm5 = document.getElementById("images5");
textForm5.value = '';
var textForm6 = document.getElementById("fake_text_box5");
textForm6.value = '';
//----------------------------------------------------------
  var textForm = document.getElementById("images");
  textForm.value = '';
  var textForm2 = document.getElementById("fake_text_box1");
  textForm2.value = '';
//-----------------------------------------------------------
//----------------------------ok------------------------------------
              },
              headers: {
                  'Content-Type': undefined,
              },
              xhr: function() {
                  myXhr= $.ajaxSettings.xhr();
                  return myXhr;
              },
          }); //ajax

}

  });

  </script>

  <?php
  }

   ?>
