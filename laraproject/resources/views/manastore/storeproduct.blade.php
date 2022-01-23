<?php
  $storeid='';  $storename='';
  $storeid=Session('storeidkk');
  $storename=Session('storenamekk');
  ?>
  <?php
    $loginname='';
    $loginname=Session('custsessname');
    $custcode=Session('custsesscode');
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
      <script src="{{ asset('/js/nmenu.js') }}"></script>
      <script src="{{ asset('/js/main2k2.js') }}"></script>
      <script src="{{ asset('/js/jsbtnmenu.js') }}"></script>
      <meta name="csrf-token" content="{{ csrf_token() }}" />
  </head>

  <style>




 </style>
  <SCRIPT>
  $(function () {
    $('div').click(function() {  $(this).next('ul').slideToggle('fast');  });
    $('li').click(function(e) {   $(this).children('ul').slideToggle('fast');
      e.stopPropagation();  });
  });
  </SCRIPT>
  <STYLE type="text/css">
  ul { display: none; list-style: none; padding: 0px; line-height:1px; margin-top:0px; margin-bottom:0px;}
  ul ul{   padding: 1px; line-height:1px;   }
  li {   list-style: none;   padding-left: 10px; line-height:25px;}
  li li{     padding-top: 5px;line-height:18px;	}
  </STYLE>
  <body>
    @extends('layouts.add')
    <?php
    $storeidp='';$codeitem=''; $ikey='';$storeid2='';$storeid='';
    if(isset($_GET['codeitem'])){	$codeitem=$_GET['codeitem'];		}
    if(isset($_GET['storeid'])){    $storeid= $_GET['storeid'];       }
    if(isset($_GET['storeid2'])){    $storeid2= $_GET['storeid2'];   $ikey=111;    }
    if(isset($_GET['ikey'])){    $ikey= $_GET['ikey'];       }
    if($storeid2!=''){   $storeid=$storeid2;       }else{     }
     ?>
    <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
    <table align="center" width="100%"bgcolor="#008000"><tr class="he30">
    <td width="10%" style="font-family:arial black;color:#fff;"align="center" >
    <a href="{{ url('manager/home') }}" class="ft20"style="text-decoration:none;color:#fff;">
      meisis </a> </td > <td class="ft11"width="20%"align="center"style="color:#fff;">
      <?php
      if($ikey!=''){  if($loginname!=''){  echo ''.$loginname.'様  ログイン中'; }
      }else{         echo ''.$storename.'様  ログイン中';     }
      ?>
    </td > <td width="60%"align="right">
    <?php
       if($ikey!=''){
    echo '<a href="../manager/product?codeitem='.$codeitem.'&storeid='.$storeid.'"  >
      <button class="btncss24">戻る</button></a>';
      }else{
    echo '<a href="manaprofile?codeitem='.$codeitem.'&storeid='.$storeid.'"  >
      <button class="btncss24">戻る</button></a>';
      }
     ?>
    </td></tr></table><hr class="hr">
    <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
      @error('token') <div class="alert alert-danger">{{ $message }}</div> @enderror

    <!-- **************************login*******************#******************* -->
    <!-- ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
    <table bgcolor="#008000"width="100%"><tr><td >
    <?php
    $arrmenu=array(
    array(  '管理','manastore/manapromain'),       array(  '店舗情報','manastore/manaprofile'),
    array(  '商品登録','client/clientproduct'),           array(  '受注関連','manastore/manasales'),
    array(  '出荷関連','manastore/manadelivery'),  array(  '入金支払','manastore/manapayment'),
    array(  '顧客情報','manastore/manacustom'),    array(  'お問合せ','manastore/manainquiry'),
    array(  '出店ホーム','manastore/storeprofile')    );
    for($x=0;$x<count($arrmenu);$x++){  if($storeidp==''){    ?>

   <?php   }}  ?>
    </td></tr></table></br>
    <table width="100%" align="center" border="0"><tr>
      <td align="right" >
    <?php
    if($ikey==111){
     echo '<a href="storeprofile?codeitem='.$codeitem.'&storeid='.$storeid.'&ikey='.$ikey.'" class="alink" >
      <button class="btncss25">会社概要</button></a>';
     echo '<a href="storeproduct?codeitem='.$codeitem.'&storeid='.$storeid.'&ikey='.$ikey.'" class="alink" >
         <button class="btncss25">商品一覧</button></a>';
       }else{
     echo '<a href="storeprofile?codeitem='.$codeitem.'&storeid='.$storeid.'" class="alink" >
       <button class="btncss25">会社概要</button></a>';
       echo '<a href="storeproduct?codeitem='.$codeitem.'&storeid='.$storeid.'" class="alink" >
         <button class="btncss25">商品一覧</button></a>';
     }
     ?>
    <button class="btncss25">決済配送</button>
    </td> </tr></table>
    <table width="100%" class="he1500"bgcolor="#99fff;"border="0"> <tr><td style="vertical-align:top;">
    <?php
    $arrdb1=array();$data5=array(); $ctt=0;
    $company='';$address='';   $president=''; $capital='';   $establish='';   $bank='';   $homepage='';
    if(isset($items51)){    foreach($items51 as $mdb){
      foreach($mdb as $mdb2){    $arrdb1[]=$mdb2;$ctt+=1;
        if($ctt==15){$data5[]=$arrdb1;  $arrdb1=array(); $ctt=0;    }
      } }  }
      //------------------------------------------------------------------------
      $datak1=array();  $datak=array();$arrt=array();$arrbb1=array();$data5b=array();
      for($iz = 0 ; $iz < count($data5) ; $iz++){
        if($data5[$iz][5]==$storeid){
      $data5b[]=array($data5[$iz][0],$data5[$iz][1],$data5[$iz][2],$data5[$iz][13],$data5[$iz][5],$data5[$iz][6]);
      }}
       //--------------------------------------------------------------------------------------------------
      for($i = 0 ; $i < count($data5b) ; $i++){
      for($j = 0; $j < count($data5b[$i]); $j++){ 		$datak[]=$data5b[$i][0];  }  }
       $unique = array_unique($datak);
   foreach($unique as $datakk){	if($datakk!=''){$arrt[]=$datakk;	}	}
   echo '<table width="100%"align="center"border="1"cellspacing="0"bordercolor="#ffffff"style="border-color:#fff;">
       <tr class="he1500"><td style="vertical-align:top"class="wt240">';
       //^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^
       echo '<p align="center" class="ft13"><strong>商品メニュー</strong></p>';
       echo '<table class="wt240"border="0"class="ft11" cellspacing="0"style=" border-color:#99ffff;"><tr><td  >';
       for($j2 = 0 ; $j2 < count($arrt) ; $j2++){  //35
       echo '<div  style="padding:0px; margin:0px"">';
       echo '<a class="amenu1"onclick="func2(this);"style="background-color:#d3d3d3;" >&nbsp;'.$arrt[$j2].'</a></br>';
       echo '</div>';
       //========================================================
       for($j3 = 0 ; $j3 < count($data5b) ; $j3++){   //22
       //----------------------------------------------------
       if($arrt[$j2]==$data5b[$j3][0]){  	$arrbb1[]=$data5b[$j3][1];   	}	 }  		//22
       //--------------------------------------------
       $unique3 = array_unique($arrbb1);
       echo '<ul>';		//21
       foreach($unique3 as $datakk3){  //34
       echo '<li>';
       if($datakk3!=''){ //33
       echo '<a class="amenu2"style="background-color:#d2b48c;">&nbsp;・'.$datakk3.'</a></br>';
       for($j6 = 0 ; $j6 < count($data5b) ; $j6++){  //32
       if(	$datakk3==$data5b[$j6][1]	){		//31
       echo '<ul><li>';//21
       echo '<div id="'.$data5b[$j6][2].'"class="amenu1"onclick="func(this);"style="background-color:#eee8aa;">&nbsp;・'.$data5b[$j6][2].'</div></br>';
       echo '</li></ul>';	//21
       		}		}	} //33
       echo '</li>';
       					} //34
       echo '</ul>';	//21
       //===================================================
       $arrbb1=array();
       }//35
       echo '</br>';
       echo '</td></tr></table>';
       //-------------------------------------
       echo '<table width="100%"><tr class="he600"><td>';
       echo '</td></tr></table>';
       //+++++++++++++++++++++++++++商品表示+++++++++++++++++++++++++++++++
       echo '</td><td style="vertical-align:top">';
       echo '<div id="display1"></div> <div id="message"></div>';
       echo '</table>';
       echo '</td></tr></table>';
       ?>
<script>
var storeid='<?php echo $storeid; ?>';
var idkk=''; var ikey=111;
function func(ele){ ikey=222;  idkk=ele.id;  read();  }
function func2(ele2){ ikey=111;  idkk='';  read();  }
//-----------------------------------------------------------
$(function(){  read();         });
//-------------------------------------------------------------------------
$.ajaxSetup({
headers: {  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')    }
});
//--------------------------------------------------------------
$(".btn-submit").click(function(e){  e.preventDefault();   read();  });
//----------------------------------------------------------------------
  function read(){
    var vname1 = ikey;
    var vname2 = idkk;
    $.ajax({
       type:'POST',
       url:"{{ route('/manastore/manastoreajax/storeproductajax') }}",
       data:{kname1:vname1, kname2:vname2},
       success:function(data){
    var items51=data['items51']; var main1a='';  var main1b='';    var arrkk=[];
    //-----------------------------------------------------------
 for(var i2=0;i2<items51.length;i2++){  arrkk.push(items51[i2]['itemk']); }
 //------------------------------------------------
arrkk = arrkk.filter(function(ele , pos){     return arrkk.indexOf(ele) == pos;  })
 //---------------------------------------
 if(data['zname1']==111){
   for(var i=0;i<items51.length;i++){
      for(var i5=0;i5<arrkk.length;i5++){
        if(arrkk[i5]==items51[i]['itemk']){
        if(items51[i]['storeid']==storeid){ //cnt +=1;
  var feat5=items51[i]['featherm'].slice( 0, 10 );
   main1a='<a href="{{ url('manager/product') }}?codeitem='+items51[i]['codeitem']+'">'
  +'<span class="spancss25">'
  +'<div class="divcss20"align="right">'+items51[i]['itemk']+'</div>'
  +'<div class="divcss20"><strong>'+'商品名：'+items51[i]['product']+'</strong></div>'
  +'<div align="center"><img src="../storage/upload/'+storeid+'/'+items51[i]['picmain']+'" class="imgcss24"></div>'
  +'<div class="he20"></div>'
  +'<div class="divcss20"align="center"><strong>'+feat5+'</strong></div>'
  +'<div class="divcss20">' +'店舗名：'+items51[i]['storename']+'</div>'
  +'<div class="divcss20">'+'型番：'+items51[i]['numitem']+'</div><div class="divcss20">'
  +'単価：'+items51[i]['pricem']+'　円</div>'
  +'</span></a>';
  main1b=main1b+main1a;
 }}}}
  $('#message').html('<h3 align="">■ 商品一覧</h3>'+main1b);
}
//-------------------------------------------------------------------------
var main3a='';  var main3b='';
if(data['zname1']==222){
   for(var i3=0;i3<items51.length;i3++){
if(data['zname2']==items51[i3]['itemk']){
if(items51[i3]['storeid']==storeid){
  var feat3=items51[i3]['featherm'].slice( 0, 10 );
main3a='<a href="{{ url('manager/product') }}?codeitem='+items51[i3]['codeitem']+'">'
+'<span class="spancss25">'
+'<div class="divcss20"align="right">'+items51[i3]['itemk']+'</div>'
+'<div class="divcss20"><strong>'+'商品名：'+items51[i3]['product']+'</strong></div>'
+'<div align="center"><img src="../storage/upload/'+storeid+'/'+items51[i3]['picmain']+'" class="imgcss24"></div>'
+'<div class="he20"></div>'
+'<div class="divcss20"align="center"><strong>'+feat3+'</strong></div>'
+'<div class="divcss20">' +'店舗名：'+items51[i3]['storename']+'</div>'
+'<div class="divcss20">'+'型番：'+items51[i3]['numitem']+'</div><div class="divcss20">'
+'単価：'+items51[i3]['pricem']+'　円</div>'
+'</span></a>';
main3b=main3b+main3a;

}}}
    $('#message').html('<h3 align="">■ 商品一覧</h3>'+main3b);
}
         //-----------ok-------------------
       }
    });
    }

</script>















    <!-- ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
         </td></tr></table>
     </body>

    </html>
