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
  <a href="{{ url('client/clientproduct') }}"  ><button class="btncss24">戻る</button></a>
  </td></tr></table><hr class="hr">
    @error('token') <div class="alert alert-danger">{{ $message }}</div> @enderror
  <!-- **************************login************************************** -->
  <table class="he1500"width="100%" border="0"> <tr><td style="vertical-align:top;">
  <!-- =====================================================================     -->

  <?php
  $arrdb1=array();  $arrdb2=array();$arrdb3=array();
  if(isset($_GET['amenu4'])){	$amenu4=$_GET['amenu4'];		}
  //--------------------------------------------------------------------------
  $ctt=0;
  if(isset($dbedit)){
  foreach($dbedit as $mdb){   foreach($mdb as $mdb2){ //echo $mdb2;
    $arrdb1[]=$mdb2;$ctt+=1;//echo $mdb2;
  if($ctt==19){$arrdb2[]=$arrdb1;  $arrdb1=array(); $ctt=0;    }  } }
  }
  //==========================================================================
  $arrsize=array();$arrcolor=array();$arrspec=array();$arrspec2=array();
  $menut1='';$menut2='';$menut3='';$menut4='';$menut5='';$menut6='';$menut8='';
  echo '<table width="100%"align="center" bordercolor="#fff"border="1"cellspacing="0">';
  echo '<tr><td width="50%"style="vertical-align:top">';
    //-------------------------------------------------------------
  echo '<h3 align="center">商品情報登録</h3>';
  echo '<table width="100%" align="center"bordercolor="#9cc" cellspacing="0" border="1" class="ft11">';
  for($k=0;$k<count($arrdb2);$k++){
    if($arrdb2[$k][7]==$amenu4){
  $menut1=$arrdb2[$k][0]; $menut2=$arrdb2[$k][1]; $menut3=$arrdb2[$k][2];
  $menut4=$arrdb2[$k][3]; $menut5=$arrdb2[$k][4]; $menut6=$arrdb2[$k][5];
  $menut7=$arrdb2[$k][6];$menut8=$arrdb2[$k][7];
  echo '<tr class="he24"><td class="ft11" width="30%">カテゴリ</td><td width="70%">'.$arrdb2[$k][0].' </td></tr>';
  echo '<tr class="he24"><td class="ft11" >商品大分類</td><td>'.$arrdb2[$k][1].'</td></tr>';
  echo '<tr class="he24"><td class="ft11" >商品分類</td><td>'.$arrdb2[$k][2].'</td></tr>';
  echo '<tr class="he24"><td class="ft11" >商品名</td><td>'.$arrdb2[$k][3].'</td></tr>';
  echo '<tr class="he24"><td class="ft11" >商品コード</td><td>'.$arrdb2[$k][4].'</td></tr>';
  echo '<tr class="he24"><td class="ft11" >商品型番</td><td>'.$arrdb2[$k][7].'</td></tr>';
  echo '<tr class="he24"><td class="ft11" >ブランド</td><td><input type="text" class="inputcss21"style="background-color:#eeeeee;"name="brand" value='.$arrdb2[$k][8].'></td></tr>';
  echo '<tr class="he24"><td class="ft11" >商品特徴</td><td><input type="text" class="inputcss21"style="background-color:#eee;"name="feather" value='.$arrdb2[$k][10].' ></td></tr>';
  echo '<tr class="he24"><td class="ft11" >メーカ</td><td><input type="text" class="inputcss21"style="background-color:#eee;"name="maker" value='.$arrdb2[$k][9].'></td></tr>';
  echo '<tr class="he24"><td class="ft11" >商品重さ</td><td><input type="text" class="inputcss21"style="background-color:#eee;"name="weight" value='.$arrdb2[$k][13].'></td></tr>';
  echo '<tr class="he24"><td class="ft11" >Janコード</td><td><input type="text" class="inputcss21"style="background-color:#eee;"name="jancode" value='.$arrdb2[$k][16].'></td></tr>';
  echo '<tr class="he24"><td class="ft11" >商品単価(円)</td><td><input type="text" class="inputcss21"style="background-color:#eee;"name="price" value='.$arrdb2[$k][12].'></td></tr>';
  echo '<tr class="he24"><td class="ft11" >商品在庫</td><td><input type="text" class="inputcss21"style="background-color:#eee;"name="stock" value='.$arrdb2[$k][11].'></td></tr>';
  $arrsize=explode('|',$arrdb2[$k][14]);    //echo $arrdb2[$k][15];
  $arrcolor=explode('|',$arrdb2[$k][15]);
  $arrspec=explode('_',$arrdb2[$k][17]);
  }}

  echo '<tr class="he24"><td class="ft11"id="sizek" >サイズ(<span class="spn1">追加</span>)</td>
  <td id="sizekt">';
  if(count($arrsize)>0){
  for($k1=0;$k1<count($arrsize);$k1++){
    echo '<input type="text" class="inputcss21"style="margin:1px;background-color:#ddd;width:23%;"name="sizex'.$k1.'" value="'.$arrsize[$k1].'">';
  }}
  echo '</td></tr>';

  echo '<tr class="he24"><td class="ft11" id="colork" >色種類(<span class="spn1">追加</span>)</td>
  <td id="colorkt">';
if(count($arrcolor)>0){
  for($k2=0;$k2<count($arrcolor);$k2++){
  echo '<input type="text" class="inputcss21"style="margin:1px;background-color:#ddd;width:23%;"name="colorx'.$k2.'" value="'.$arrcolor[$k2].'">';
 }  }

echo '</td></tr>';


echo '<tr class="he24"><td class="ft11" id="plus"colspan="2"><strong>商品スペック</strong>(<span class="spn1">追加</span>)</td></tr>';
echo '<tr class="he24"align="center"class="ft11"style="color:#fff;background-color:#555"><td>項目</td><td>スペック </td></tr>';
echo '<tr class="he24"><td align="center"class="ft11" colspan="2"id="spec55">';
  if(isset($arrspec)){
  for($k3=0;$k3<count($arrspec);$k3++){
  if(isset($arrspec[0])&&isset($arrspec[1])){
  $arrspec2=explode('|',$arrspec[$k3]);
echo '<input type="text" class="inputcss21"style="margin:1px;background-color:#ddd;width:28%;"name="specxa'.$k3.'" value='.$arrspec2[0]. '>';
echo '<input type="text" class="inputcss21"style="margin:1px;background-color:#ddd;width:68%"name="specxb'.$k3.'" value='.$arrspec2[1].'>';
}}}
  echo '</td></tr>';
  echo '</table>';
  echo '<p align="center"><button id="submit"class="btncss25">登録</button></p>';
  ?>
  </td><td width="50%"style="vertical-align:top">
  <div id="as66"></div>

  </td></tr></table>
<!-- ============================================================= -->
  </td></tr></table>
  </body>
  </html>

<script type="text/javascript">

var arrsp1=[];  var arrsp2=[];
var arrsi1=[];  var arrsi2='';
var arrco1=[];  var arrco2=[];
//------------------------spec---------------------------------------
var k=0;var kc=0; var ks=0;
$(function () {
    $('#plus').click(function(){  read(); });
//--------------------------color--------------------------------------
  $('#colork').click(function(){ colork(); });
//--------------------------------------------------------------------
   $('#sizek').click(function(){  sizek(); });
//-----------------------size-----------------------------------------
function sizek(){  ks +=1;
  $('#sizekt').append(''
      +'<input type="text"name="sizea'+ks+'" placeholder="L0xW0xH0mm"class="inputcss21"style="margin:1px;background-color:#ddd;width:23%;"/>'
  );
}
//------------------------------color----------------------------------
function colork(){  kc +=1;
  $('#colorkt').append(''
      +'<input type="text"name="colora'+kc+'" placeholder="color"class="inputcss21"style="margin:1px;background-color:#ddd;width:23%;" />'
  );
}
//---------------------------spec---------------------------
function read(){  k +=1;
  $('#spec55').append(''
    +'<input type="text" name="speca'+k+'" placeholder="parament"class="inputcss21"style="margin:1px;background-color:#ddd;width:28%;"/>'
    +'<input type="text" name="specb'+k+'" placeholder="specification"class="inputcss21"style="margin:1px;background-color:#ddd;width:68%;"/>'
  );
}
//-------------------------------------------------------------
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $("#submit").click(function(e){
        e.preventDefault();
        //--------------------------size------------------------------
    var arrsize1=[];  var arrsize2=[]; var sizeaa='';var sizeax='';
    for(var et3=0;et3<20;et3++){ sizeax=$("input[name=sizex"+et3+"]").val();
    if(sizeax==null||sizeax==""){}else{  arrsize1.push(sizeax);  sizeax='';   } }
        for(var t3=0;t3<20;t3++){ sizeaa=$("input[name=sizea"+t3+"]").val();
        if(sizeaa==null){}else{   arrsize1.push(sizeaa);  sizeaa='';      } }
        arrsize1=arrsize1.filter(Boolean);
        arrsize2=arrsize1.join('|');
    //--------------------------color------------------------------
    var arrcolor1=[];  var arrcolor2=[]; var coloraa='';var colorax='';
    for(var v2=0;v2<20;v2++){ colorax=$("input[name=colorx"+v2+"]").val();
    if(colorax==null||colorax==""){}else{  arrcolor1.push(colorax);  colorax='';   } }

    for(var t2=0;t2<20;t2++){ coloraa=$("input[name=colora"+t2+"]").val();
    if(coloraa==null){}else{  arrcolor1.push(coloraa);  coloraa='';       }}
    arrcolor1=arrcolor1.filter(Boolean);
    arrcolor2=arrcolor1.join(' | ');
    //--------------------spec------------------------------------
    var arrtt=[]; var arrtt2=[];var specaa=''; var specbb='';var specxa=''; var specxb='';
    for(var et=0;et<30;et++){  specxa=$("input[name=specxa"+et+"]").val();
                        specxb=$("input[name=specxb"+et+"]").val();
    if(specxb==null||specxa==null){ }else{ arrtt.push(specxa+"|"+specxb);  specxa='';specxb='';  }  }
    for(var t=0;t<30;t++){  specaa=$("input[name=speca"+t+"]").val();
                        specbb=$("input[name=specb"+t+"]").val();
    if(specbb==null||specaa==null){ }else{ arrtt.push(specaa+"|"+specbb);  specaa='';specbb='';  }  }
    arrtt=arrtt.filter(Boolean);
    arrtt2=arrtt.join('_');
    //-----------------------------------------------------------------------
    var vmenu1='<?php echo $menut1; ?>';
    var vmenu2='<?php echo $menut2; ?>';
    var vmenu3='<?php echo $menut3; ?>';
    var vmenu4='<?php echo $menut4; ?>';
    var vmenu5='<?php echo $menut8; ?>';
    var vmenu6='<?php echo $menut5 ?>';
    var vedit1 = $("input[name=brand]").val();
    var vedit2 = $("input[name=feather]").val();
   var vedit3 = $("input[name=maker]").val();
    var vedit4 = $("input[name=price]").val();
    var vedit5 = $("input[name=weight]").val();
    var vedit6 = $("input[name=jancode]").val();
    var vedit7 = $("input[name=stock]").val();
    var vedit8 = arrcolor2;
   var vedit9 = arrsize2;
     var vedit10 =arrtt2;
//alert(vedit8);
        $.ajax({
           type:'POST',
           url:"{{ route('client/ajaxedit6b') }}",
           data:{
              name1:vedit1,name2:vedit2,name3:vedit3,name4:vedit4,name5:vedit5,
             name6:vedit6,name7:vedit7,name8:vedit8,name9:vedit9,name10:vedit10,
             name11:vmenu1,name12:vmenu2,name13:vmenu3,name14:vmenu4,name15:vmenu5,
             name16:vmenu6
           },
           success:function(data){
$('#as66').html(data['editv1']+data['editv2']);

$('#as66').html(''
+'<table width="96%"align="center" border="0">'
+'<tr><td align="center"><h3>登録結果</h3></td></tr>'
+'</table>'
+'<table width="96%"align="center"class="ft11" border="0" cellspacing="1" >'
+'<tr class="ft11"bgcolor="#deb887"><td class="he24"width="30%">カテゴリ </td><td width="70%">'+data['editv11']+'</td></tr>'
+'<tr class="ft11"bgcolor="#deb887"><td class="he24">商品大分類 </td><td >'+data['editv12']+'</td></tr>'
+'<tr class="ft11"bgcolor="#deb887"><td class="he24">商品分類 </td><td >'+data['editv13']+'</td></tr>'
+'<tr class="ft11"bgcolor="#deb887"><td class="he24">商品名 </td><td >'+data['editv14']+'</td></tr>'
+'<tr class="ft11"bgcolor="#deb887"><td class="he24">商品コード  </td><td >'+data['editv16']+'</td></tr>'
+'<tr class="ft11"bgcolor="#deb887"><td class="he24">商品型番 </td><td >'+data['editv15']+'</td></tr>'
+'<tr class="ft11"bgcolor="#deb887"><td class="he24">ブランド </td><td >'+data['editv1']+'</td></tr>'
+'<tr class="ft11"bgcolor="#deb887"><td class="he24">商品特徴</td><td >'+data['editv2']+'</td></tr>'
+'<tr class="ft11"bgcolor="#deb887"><td class="he24">メーカー </td><td >'+data['editv3']+'</td></tr>'
+'<tr class="ft11"bgcolor="#deb887"><td class="he24">商品重さ</td><td >'+data['editv5']+'</td></tr>'
+'<tr class="ft11"bgcolor="#deb887"><td class="he24">Janコード </td><td >'+data['editv6']+'</td></tr>'
+'<tr class="ft11"bgcolor="#deb887"><td class="he24">商品単価（円）  </td><td >'+data['editv4']+'</td></tr>'
+'<tr class="ft11"bgcolor="#deb887"><td class="he24">在庫数量 </td><td >'+data['editv7']+'</td></tr>'
+'<tr class="ft11"bgcolor="#deb887"><td class="he24">サイズ </td><td >'+data['editv9']+'</td></tr>'
+'<tr class="ft11"bgcolor="#deb887"><td class="he24">色種類 </td><td >'+data['editv8']+'</td></tr>'
+'</table>');

$('#as66').append(''
+'<table width="96%"align="center"class="ft11" border="0" cellspacing="0" >'
+'<tr class="he24"><td><strong>商品スペック</strong></td></tr>'
+'</table>'
+'<table width="96%"align="center"class="ft11" border="0" cellspacing="1" >'
+'<tr class="ft11"style="background-color:#555555;color:#fff;"align="center">'
+'<td width="30%"class="he24">項目 </td><td width="70%">スペック</td></tr>'
+'</table>'
);

//----------------------------------------
arrsp1=data['editv10'];
arrsp1=arrsp1.split('_');
if (arrsp1.length === 0){}else{
for(var v=0; v<arrsp1.length; v++){
arrsp2=arrsp1[v]; arrsp2=arrsp2.split('|');
if(arrsp2[0]==""||arrsp2[1]==""){   }else{
$('#as66').append(''
+'<table width="96%"align="center"class="ft11" border="0" cellspacing="1" >'
+'<tr class="ft11"bgcolor="#deb887"><td width="30%"class="he24">'+arrsp2[0]+'</td><td width="70%">'+arrsp2[1]+'</td></tr>'
+'</table>'
);
}}}

//------------------------------ok---------------------------------------------
           }
        });

    });

    });

</script>



<?php
}

 ?>
