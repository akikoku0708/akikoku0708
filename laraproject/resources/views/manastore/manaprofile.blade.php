<?php
  $storeid='';  $storename='';
  $storeid=Session('storeidkk');
  $storename=Session('storenamekk');

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

    <!-- **************************login*******************#******************* -->
    <table width="100%" class="he1500"bgcolor="#99fff;"border="0">
      <tr><td style="vertical-align:top;">

<!-- ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
<table bgcolor="#008000"width="100%"><tr><td >
<?php
$arrmenu=array(
array(  '管理','manastore/manapromain'),       array(  '店舗情報','manastore/manaprofile'),
array(  '商品登録','client/clientproduct'),           array(  '受注関連','manastore/manasales'),
array(  '出荷関連','manastore/manadelivery'),  array(  '入金支払','manastore/manapayment'),
array(  '顧客情報','manastore/manacustom'),    array(  'お問合せ','manastore/manainquiry'),
array(  '出店ホーム','manastore/storeprofile')    );
for($x=0;$x<count($arrmenu);$x++){     ?>
<a href="{{ url( $arrmenu[$x][1]) }}"><button class="btncss24"><?php echo $arrmenu[$x][0]; ?></button></a>
<?php   }  ?>
</td></tr></table>
<!-- ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
<?php
if(isset($_GET['storeid'])){ $storeid= $_GET['storeid'];          }
 ?>
    <h3 align="center">会社案内</h3>

  <table width="100%" align="center" border="0"><tr>
    <td align="right" >
      <?php
      $ikey='';$codeitem='';
      if($ikey==111){
   echo '<a href="storeprofile?codeitem='.$codeitem.'&storeid='.$storeid.'&ikey='.$ikey.'"  >
     <button class="btncss25">会社概要</button></a>';
     echo '<a href="storeproduct?codeitem='.$codeitem.'&storeid='.$storeid.'&ikey='.$ikey.'" class="alink" >
       <button class="btncss25">商品一覧</button></a>';
 }else{
 echo '<a href="storeprofile?codeitem='.$codeitem.'&storeid='.$storeid.'"  class="alink">
   <button class="btncss25">会社概要</button></a>';
     echo '<a href="storeproduct?codeitem='.$codeitem.'&storeid='.$storeid.'" class="alink" >
       <button class="btncss25">商品一覧</button></a>';
   }
       ?>
       <button class="btncss25">決済配送</button>
      </td>
    </tr></table>
<?php
$arrdb1=array();$arrdb2=array(); $ctt=0;
$company='';$address='';   $president=''; $capital='';   $establish='';   $bank='';   $homepage='';
if(isset($infork2)){
foreach($infork2 as $mdb){   foreach($mdb as $mdb2){ //echo $mdb2;
  $arrdb1[]=$mdb2;$ctt+=1; // echo $mdb2;
if($ctt==14){$arrdb2[]=$arrdb1;  $arrdb1=array(); $ctt=0;    }
} }  }
for($k=0;$k<count($arrdb2);$k++){
  if($arrdb2[$k][0]==$storeid){
  $company=$arrdb2[$k][2];  $address=$arrdb2[$k][7];   $president=$arrdb2[$k][6];
  $capital=$arrdb2[$k][5]; $establish=$arrdb2[$k][4];   $bank=$arrdb2[$k][8];   $homepage=$arrdb2[$k][9];
  $comprofile=$arrdb2[$k][3];
  $piconer=$arrdb2[$k][11];
  $picfab=$arrdb2[$k][12];
  $message=$arrdb2[$k][10];
  $storeidk=$arrdb2[$k][0];
}}
 ?>



  </br><table width="90%"  align="center" border="1"cellspacing="0"><tr>
    <td style="vertical-align:top;"width="50%" >
    <table width="90%"  align="center" border="0" class="ft11">
    <tr ><td colspan="2"  class="ft16"class="he60"><h3 align="center">会社概要登録</h3></td></tr>
    <tr bgcolor="#cccccc"align="center"class="he30"><td width="30%">会社名</td><td><input type="text"name="company"value="<?php echo $company; ?>"class="inputcss21" ></td></tr>
    <tr bgcolor="#cccccc"align="center"class="he30"><td>所在地</td><td><input type="text"name="address"value="<?php echo $address; ?>"class="inputcss21" ></td></tr>
    <tr bgcolor="#cccccc"align="center"class="he30"><td>代表者名</td><td><input type="text"name="president"value="<?php echo $president; ?>"class="inputcss21" ></td></tr>
    <tr bgcolor="#cccccc"align="center"class="he30"><td>資本金</td><td><input type="text"name="capital"value="<?php echo $capital; ?>"class="inputcss21" ></td></tr>
    <tr bgcolor="#cccccc"align="center"class="he30"><td>設立年月</td><td><input type="text"name="establish"value="<?php echo $establish; ?>"class="inputcss21" >　</td></tr>
    <tr bgcolor="#cccccc"align="center"class="he30"><td>取引銀行</td><td><input type="text"name="bank"value="<?php echo $bank; ?>"class="inputcss21" ></td></tr>
    <tr bgcolor="#cccccc"align="center"class="he30"><td>ホームページ</td><td><input type="text"name="homepage"value="<?php echo $homepage; ?>"class="inputcss21" >　</td></tr>
<tr ><td colspan="2" align="center" class="he60"><button id="button21"class="btncss25">登録</button></td></tr>
  </table>
</td><td style="vertical-align:top;">
<div id="main7"> </div>

</td></tr></table></br>

<table width="90%"  align="center" border="0" class="ft11">
<tr class="ft16"align="center"><td colspan="2" class="he30"><strong>会社概要</strong></td></tr>
<tr class="ft13"align="center"bgcolor="#999999"><td  class="he30"><strong>登録内容入力</strong></td><td><strong>登録表示</strong></td></tr>
<tr> <td><textarea type="text"name="comprofile"class="he200"style="width:99%;vertical-align:top;" ><?php echo $comprofile; ?></textarea></td>
  <td align=""bgcolor="#dddddd"width="50%"style="vertical-align:top;"><div id="main33"> </div></td>
</tr>
<tr ><td align="center" class="he30"><button id="btnprofile"class="btncss25">登録</button></td><td></td></tr>
<tr ><td colspan="2" align="center" class="he60"><hr></td></tr>
    </table>
     <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
   <h3 align="center">代表者画像選択 </h3><hr width="90%">
  <table width="90%"align="center"border="0"cellspacing="0">
    <tr><td width="10%"align=""class="he30" align="center">
<button type="submit" id="button6" class="btncss25">代表者画像</button></br></br></br>
  <button type="submit" id="button10" class="btncss25">閉じる</button>
    </td><td width="60%"align="center"style="vertical-align:top;">
<div id="main6"> </div> </td>
</td><td width="20%"align="center"><div id="main9"> </div></td>
  </tr>
</table><hr width="90%">

        <table width="90%"  align="center" border="0" class="ft11">
        <tr class="ft16"><td colspan="2" class="he30"><strong>代表者メッセージ</strong></td></tr>
        <tr class="ft13"align="center"bgcolor="#999999"><td  class="he30"><strong>メッセージ入力</strong></td><td><strong>メッセージ表示</strong></td></tr>
        <tr> <td><textarea type="text"name="message"class="he200"style="width:99%;vertical-align:top;" ><?php echo $message; ?></textarea></td>
          <td align=""bgcolor="#cccccc"width="50%"style="vertical-align:top;"><div id="main11"> </div></td>
        </tr>
        <tr ><td align="center"class="he30"><button id="btnmess"class="btncss25">登録</button></td><td></td></tr>
        <tr ><td colspan="2" align="center" class="he60"><hr></td></tr>
            </table>
             <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
           <table width="90%"align="center"border="0"style=""><tr><td align="center">
           <table width="100%"align="center"bgcolor="#66ff99"border="0"cellspacing="0"style="">
           <tr class="ft13"><td align="center"class="he30"><strong>会社案内画像登録（5枚まで）</strong>
           </td></tr></table> </td></tr></table>
           <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~商品メイン画像~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
         <table width="90%"align="center"border="1"cellspacing="0"bordercolor="#cccccc">
         <tr><td style="vertical-align:top"width="40%">
         <table width="100%"align="center"border="0"bgcolor="#8fbc8f"class="he200"cellspacing="0"style="">
         <tr><td class="he20"colspan="2"align="center"></td></tr>
         <input type="hidden" id="text" value="xzax">
             <tr><td width="25%" class="he100"align="center"><div><label for="images" class="lab2"style=""></td><td>
         <input type="file" id="images" name="images[]" onchange="$('#fake_text_box1').val($(this).val())" style="display:none" multiple></span></label><div>
         <label for="images" class="he20"style="width:90%; vertical-align:central">
         <input type="text" id="fake_text_box1"value="" readonly onClick="$('#images').click();"placeholder="押して画像選択"class="inputcss11"style=" " ></label></div></div>
         </td></tr>
         <tr><td class="he60"colspan="2"align="center">
         <button type="submit" id="button2" class="btncss25">画像登録</button></td></tr>
         </table>
       <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
     </td><td style="vertical-align:top">
        <table width="100%"align="center"border="0"style="">
        <tr><td style="padding-left:10px;vertical-align:top"class="he600">
      <div id="main">  </div></td></tr></table>
    </td></tr></table>
 <!-- ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
      </td></tr></table>
  </body>

  <script type="text/javascript">
  var ikey=111; var arrdel = [];  var idele=''; var idkk9=''; var infork='';
  var vna1='';var vna2='';var vna3='';var vna4='';var vna5='';var vna6='';var vna7='';
  var messagek='';    var comprofile='';
//--------------------------------------------------------------------
$("#btnprofile").on('click', function(event){ ikey=2177;
  comprofile = $("textarea[name=comprofile").val();
    read();
 });
 //--------------------------------------------------
  $("#btnmess").on('click', function(event){ ikey=2155;
    messagek = $("textarea[name=message").val();
      read();
   });
   //--------------------------------------------------
    $("#button21").on('click', function(event){
      vna1 = $("input[name=company").val();
      vna2 = $("input[name=address").val();
      vna3 = $("input[name=president").val();
      vna4 = $("input[name=capital").val();
      vna5 = $("input[name=establish").val();
      vna6 = $("input[name=bank").val();
      vna7 = $("input[name=homepage").val();

      if(vna1==''||vna2==''||vna3==''||vna4==''||vna5==''||vna6==''||vna7==''){
        ikey=2133;
      }else{  ikey=2121;
        infork=vna1+'|'+vna2+'|'+vna3+'|'+vna4+'|'+vna5+'|'+vna6+'|'+vna7;
      }
      read();
     });

  $("#button10").on('click', function(event){  ikey=2020;    read();  });
  $("#button6").on('click', function(event){  ikey=666;    read();  });

 $("#button2").on('click', function(event){  ikey=222;    read();  });
   function func1(){   ikey=111;     read();         }
   function func3(){    ikey=333;      read();         }
   function func9(ele9){   idkk9=ele9.id; ikey=999;
     read();         }
 //------------------------------------------
  function func(){      ikey=444;     arrdel.length = 0;
 		$('input:checkbox[name="checktt"]:checked').each(function() {
       arrdel.push($(this).val());
   		});
      idele=arrdel.join('|');
      read();
 }
 //--------------------------------------------------------------------
 func1();
  function read(){

      $.ajaxSetup({
              headers: {
                  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              }
      });

  //----------------------------------------------------------
  var textData = $("#text").val();
  var formData= new FormData();
   var TotalImages= $('#images')[0].files.length;
   var images= $('#images')[0];

  for (var i= 0; i < TotalImages; i++) {  formData.append('images' + i, images.files[i]);  }
        formData.append('TotalImages', TotalImages);
        formData.append( "text", textData );
        formData.append( "ikey", ikey );
        formData.append( "idele", idele );
        formData.append( "idkk", idkk9 );
        formData.append( "infork", infork );
        formData.append( "messagek", messagek );
        formData.append( "comprofile", comprofile );
      //  messagek
     $.ajax({
              url: "{{ route('manastore/manastoreajax/manaprofileajax') }}",
              method: 'post',
              enctype: 'multipart/form-data',
              cache: false,
              data: formData,
              contentType: false,
              processData: false,
              dataType: 'JSON',
              async: true,
              success: function(data){
      //----------------------商品画像-------------------------------------------------
  var main1=''; var main2=''; var main3=''; var main4='';
  var main5=''; var main6=''; var main7=''; var main8='';
  var storeid=data['storeid'];
   if (data.name.length === 0){}else{
    for(var v=0; v<data.name.length; v++){
      main1=''+'<img src="../storage/company/'+storeid+'/'+data.name[v]+'" class="imgcss19">';
      main2=main2+main1;
    }}
    //----------------------------------------
    if(data['ikey']==111){
    $("#main").html(''
    +'<p align="right"><button id="button3" onclick="func3();"class="btncss25">画像削除</button></p><hr>'
    +main2);
    $("#main9").html('<img src="../storage/company/'+storeid+'/'+data['idkk']+'" class="imgcss24"></span>');
    }
   //----------------------------------------
  if (data.name.length === 0){}else{
  for(var v3=0; v3<data.name.length; v3++){
  main5='<span class="spancss20"><img src="../storage/company/'+storeid+'/'+data.name[v3]+'" class="imgcss19">'
        +'<input type="checkbox"name="checktt"value="'+data.name[v3]+'"class="che1" ></span>';
  main6=main6+main5;
 }}
    if(data['ikey']==333){
    $("#main").html('<button id="button2" onclick="func1();"class="btncss25">画像表示</button><hr>'
    +'<p align="right"><button onclick="func();"class="btncss24">削除確定</button></p>'
    +main6+''
);
    }
//-----------------------------------------------------------------------
if (data.name.length === 0){}else{
for(var v4=0; v4<data.name.length; v4++){
main7='<span class="spancss20"><img src="../storage/company/'+storeid+'/'+data.name[v4]+'" class="imgcss19">'
      +'<input type="checkbox"name="checktt"value="'+data.name[v4]+'"class="che1" ></span>';
main8=main8+main7;
}}
  if(data['ikey']==444){
  $("#main").html('<button id="button2" onclick="func1();"class="btncss25">画像表示</button><hr>'
  +'<p align="right"><button onclick="func();" class="btncss24">削除確定</button></p>'+main6);
  }
//------------------------------------------------------------------------------
  if (data.name2.length === 0){}else{
  for(var v2=0; v2<data.name2.length; v2++){
  main3='<img src="../storage/company/'+storeid+'/'+data.name2[v2]+'" class="imgcss19">';
  main4=main4+main3;
  }}
  if(data['ikey']==222){
   $("#main").html('<p align="right"><button id="button3" onclick="func3();"class="btncss25">画像削除</button></p><hr>'
  +main4);
  }
  if(data['ikey']==2020){
   $("#main6").html('');
  }
   //----------------------------------------------------------
  var textForm = document.getElementById("images");
  textForm.value = '';
  var textForm2 = document.getElementById("fake_text_box1");
  textForm2.value = '';
　//---------------------------代表者画像--------------------------------------------------------
var main9a=''; var main9b='';
if (data.name.length === 0){}else{
 for(var v9=0; v9<data.name.length; v9++){
   main9b=''+'<span id="'+data.name[v9]+'"onclick="func9(this);"><img src="../storage/company/'+storeid+'/'+data.name[v9]+'" class="imgcss19"></span>';
   main9a=main9a+main9b;
 }}
//----------------------------------------
if(data['ikey']==666){
$("#main6").html(''
+main9a);
}

if(data['ikey']==999){
$("#main9").html('<img src="../storage/company/'+storeid+'/'+data['idkk']+'" class="imgcss24"></span>');
$("#main").html(''
+'<p align="right"><button id="button3" onclick="func3();"class="btncss25">画像削除</button></p><hr>'
+main2);
}
//------------------------------------------------------------------------
if(data['ikey']==2177){
  $("#main33").html(data['comprofile']);
}
//-------------------------------------------------------------------------
var info3=data['infork3']; var main10a='';  var main10b='';
for(var z=0;z<info3.length;z++){
  if(info3[z]['storeid']==data['storeid']){
main10a=''
+'<tr class="he24"><td>会社名</td><td>'+info3[z]['company']+'</td></tr>'
+'<tr class="he24"><td>所在地</td><td>'+info3[z]['addresst']+'</td></tr>'
+'<tr class="he24"><td>代表者</td><td>'+info3[z]['president']+'</td></tr>'
+'<tr class="he24"><td>資本金</td><td>'+info3[z]['capital']+'</td></tr>'
+'<tr class="he24"><td>創立日</td><td>'+info3[z]['establish']+'</td></tr>'
+'<tr class="he24"><td>取引銀行</td><td>'+info3[z]['bank']+'</td></tr>'
+'<tr class="he24"><td>ホームページ</td><td>'+info3[z]['homepage']+'</td></tr>';
}}

if(data['ikey']==2121){$("#main7").html('<h3 align="center">会社概要</h3>'
+'<table align="center"width="90%"class="ft11"border="1"bordercolor="#9cc"cellspacing="0">'
+main10a
+'</table>');

}

if(data['ikey']==2133){$("#main7").html('</br><p align="center"class="ft11">また入力していない欄がありますので、御確認下さい。</p>');}
if(data['ikey']==2155){
$("#main11").html(data['messagek']);

}

  //------------------------ok-------------------------------------------
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
  </script>


  </html>

<?php
}

 ?>
