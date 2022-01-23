<?php
  $storeid='';  $storename='';
  $storeid=Session('storeidkk');
  $storename=Session('storenamekk');
  $storeid='T20210827131718UV';   $storename='掃除機';

  if($storeid==''){
    // +++++++++++++++++++++++++++++++++++++++++++++++++++++++++
  ?>
  <script>  window.location.href = "{{URL::to('members/signin')}}";  </script>
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
      <meta name="csrf-token" content="{{ csrf_token() }}" />

  </head>

  <style>

  </style>
  <body>
    @extends('layouts.add')
    <?php
    $numitem='';  $strid=''; $codeitem='i202112291219384Qw';
    if(isset($_GET['amenu4'])){   $numitem=$_GET['amenu4'];             }
    if(isset($_GET['strid'])){   $strid=$_GET['strid'];             }
    $numitem='sojiki-at22';

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
      <!-- <input type="hidden" id="imgkey" value="imgkey"> -->
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
      <tr align=""><td class="he100"style="padding-left:8px;vertical-align:top"><div id="main2"></div></td></tr>
    </table>
    </td></tr></table></br>





    <!-- テキスト：<input type="text" id="text"><br/>
     ファイル：<input type="file" name="images[]"id="images" multiple><br/>
  <button type="submit" id="button2" style="width:100px; height:30px;" >画像登録</button> -->

    <!-- <div id="main">     </div> -->
  <!-- <img src="{{ asset('storage/chen/gda2.jpg') }}" width="100" height="100"> -->

  </body>


  <script type="text/javascript">
  var textData = '';
  var TotalImages= ''; var ikey2=0;
  //var images= '';
  var formData= new FormData();
  var codeitem='<?php echo $codeitem; ?>';
  var storeid='<?php echo $storeid; ?>';
  //-----------------------------------------------------------------------
   $(function(){  ikey2='2280';  read();     });
  //---------------------------------------------------------------------------
  $("#button2").on('click', function(event){
    textData = $("#text").val();
    TotalImages= $('#images')[0].files.length;
    //images= $('#images')[0];
    ikey2='2281';
    read();
  });
  //---------------------------------------------------------------------
  var colors = [];  //var ttk='';
  function func2(){  ikey2='2282';  read();                }
  function func3(){  ikey2='2280';  read();                }
  function func5(){
    colors.length = 0;
    $('input:checkbox[name="cate"]:checked').each(function() {  colors.push($(this).val()); 		});
    colors=colors.join('|');
    //alert(colors);
    ikey2='2285';  read();
   }
  //-------------------------------------------------------------------------------------
  $.ajaxSetup({  headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')  }    });
  //--------------------------------------------------------------------------------------
  function read(){
  //----------------------------------------------------------
    for (var i= 0; i < TotalImages; i++) { formData.append('images' + i, images.files[i]);   }
    formData.append('TotalImages', TotalImages);
    formData.append( "text", textData );
    formData.append( "ikey2", ikey2 );
    formData.append( "codeitem", codeitem );
    formData.append('Totalcolor', colors);
    //------------------------------------------------------------------------------
     $.ajax({
              url:"{{ route('client/clientajax/clientpic1ajax') }}",
              method: 'post',
              enctype: 'multipart/form-data',
              cache: false,
              data: formData,
              contentType: false,
              processData: false,
              dataType: 'JSON',
              async: true,
              success: function(data){
    $("#main2").append(''+data.ikey2+'枚画像を登録しました</br>');
//------------2280---------------------------------------------------------
      if(data.ikey2==2280){var mbtt80='';  var mbtt80a='';
      if (data.name.length === 0){}else{
       for(var v=0; v<data.name.length; v++){
        mbtt80a='<span ><img src="../storage/company/'+data.name[v]+'.jpg" style="border-radius:5px;margin:5px;"width="100" height="100"></span';
         mbtt80=mbtt80+''+mbtt80a;
     }}
    $("#main2").html('</br><div align="right">'
    +'<a href="clientimgdele1"><button onclick="func2();"class="btncss25">編集</button></a></div><hr>'+mbtt80);
      }
    //---------2281-------------------------------------------------------
    /*
    if(data.ikey2==2281){
      var mbtt81='';  var mbtt81a='';
               if (data.name.length === 0){}else{
                for(var v1=0; v1<data.name.length; v1++){
                 mbtt81a='<img src="../storage/company/'+data.name[v1]+'.jpg" style="border-radius:5px;margin:5px;"width="100" height="100">';
                  mbtt81=mbtt81+mbtt81a;
             }}
  $("#main2").html('</br><div align="right">'
  +'<a href="clientimgdele1"><button class="btncss25">編集</button></a></div><hr>'+mbtt81);
  //----------------------------------------------------------
    var textForm = document.getElementById("images");
    textForm.value = '';
    var textForm2 = document.getElementById("fake_text_box1");
    textForm2.value = '';
  //-----------------------------------------------------------
}

/*
//-------------2282---------メイン画像---削除準備--------------------------------------------
if(data.ikey2=='2282'){
    var mbtt82=''; var mbtt82a='';
    if (data.name.length === 0){}else{
    for(var v2=0; v2<data.name.length; v2++){
      if(data.name[v2]!=''){
    mbtt82a='<span class=""><img src="../storage/company/'+data.name[v2]+'.jpg" style="border-radius:5px;margin:5px;"width="100" height="100">'
    +'<input class="che1"type="checkbox" name="cate"value="'+data.name[v2]+'"></span>';
    mbtt82=mbtt82+mbtt82a;
    }}}
    $("#main2").html('</br><div align="right">'
    +'<button onclick="func3();"class="btncss25">戻る11</button>'+'  '
    +'<button onclick="func5();"class="btncss25">削除22</button></div><hr>'+mbtt82);
 }
//-------------------------------------------------------------
//----------------------2285------メイン画像---削除-----------------------------------------------------
var mbtt85=''; var mbtt85a='';
 if(data.ikey2=='2285'){
   if (data.name.length === 0){}else{
   for(var v3=0; v3<data.name.length; v3++){
   if(data.name[v3]!=''){

     mbtt85a='<span class=""><img src="../storage/company/'+data.name[v3]+'.jpg" style="border-radius:5px;margin:5px;"width="100" height="100">'
         +'<input class="che1"type="checkbox" name="cate"value="'+data.name[v3]+'"></span>';
         mbtt85=mbtt85+mbtt85a;
     }}}
  $("#main2").html('</br><div align="right">'
  +'<button onclick="func3();"class="btncss25">戻る33</button>'+'  '
  +'<button onclick="func5();"class="btncss25">削除55</button></div><hr>'+mbtt85);
   }

*/





/*
if(data.ikey2==2283){
//------------------------------------------------------------------------
var xztextForm5 = document.getElementById("images5");
xztextForm5.value = '';
var cvtextForm6 = document.getElementById("fake_text_box5");
cvtextForm6.value = '';
}
*/



          //------------------------------------ok------------------------------------
          },  headers: { 'Content-Type': undefined,  },   xhr: function() {
          myXhr= $.ajaxSettings.xhr();  return myXhr;  },    });
    }
  </script>

  </html>



<?php
}

 ?>
