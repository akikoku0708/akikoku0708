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
    $storeidp='';$codeitem='';$ikey='';
    if(isset($_GET['codeitem'])){	$codeitem=$_GET['codeitem'];		}
    if(isset($_GET['storeid'])){    $storeid= $_GET['storeid'];       }
  if(isset($_GET['ikey'])){    $ikey= $_GET['ikey'];       }

     ?>

    <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
    <table align="center" width="100%"bgcolor="#008000"><tr class="he30">
    <td width="10%" style="font-family:arial black;color:#fff;"align="center" >
    <a href="{{ url('manager/home') }}" class="ft20"style="text-decoration:none;color:#fff;">
      meisis </a> </td > <td class="ft11"width="20%"align="center"style="color:#fff;">
      <?php
      if($ikey!=''){  echo ''.$loginname.'???  ???????????????';     }else{
         echo ''.$storename.'???  ???????????????';     }
      ?>
    </td > <td width="60%"align="right">
      <?php

         if($ikey==111){
      echo '<a href="../manager/product?codeitem='.$codeitem.'&storeid='.$storeid.'"  >
        <button class="btncss24">??????</button></a>';
    }else{
      echo '<a href="manaprofile?codeitem='.$codeitem.'&storeid='.$storeid.'"  >
        <button class="btncss24">??????</button></a>';
    }

       ?>

    </td></tr></table><hr class="hr">
    <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
      @error('token') <div class="alert alert-danger">{{ $message }}</div> @enderror

    <!-- **************************login*******************#******************* -->
    <table bgcolor="#008000"width="100%"><tr><td >
    <?php
    $arrmenu=array(
    array(  '??????','manastore/manapromain'),       array(  '????????????','manastore/manaprofile'),
    array(  '????????????','client/clientproduct'),           array(  '????????????','manastore/manasales'),
    array(  '????????????','manastore/manadelivery'),  array(  '????????????','manastore/manapayment'),
    array(  '????????????','manastore/manacustom'),    array(  '????????????','manastore/manainquiry'),
    array(  '???????????????','manastore/storeprofile')    );
    for($x=0;$x<count($arrmenu);$x++){  if($storeid!=''){    ?>

   <?php   }}  ?>
      </td></tr></table></br>

    <table width="100%" align="center" border="0"><tr>
      <td align="right" >
        <?php

        if($ikey==111){
     echo '<a href="storeprofile?codeitem='.$codeitem.'&storeid='.$storeid.'&ikey='.$ikey.'"  >
       <button class="btncss25">????????????</button></a>';
       echo '<a href="storeproduct?codeitem='.$codeitem.'&storeid='.$storeid.'&ikey='.$ikey.'" class="alink" >
         <button class="btncss25">????????????</button></a>';
   }else{
   echo '<a href="storeprofile?codeitem='.$codeitem.'&storeid='.$storeid.'"  class="alink">
     <button class="btncss25">????????????</button></a>';
       echo '<a href="storeproduct?codeitem='.$codeitem.'&storeid='.$storeid.'" class="alink" >
         <button class="btncss25">????????????</button></a>';
     }
         ?>

      <button class="btncss25">????????????</button>
        </td>
      </tr></table></br>

        <table width="100%" class="he1500"border="0"> <tr><td style="vertical-align:top;">

        <?php
        $arrdb1=array();$arrdb2=array(); $ctt=0;
        $company='';$address='';   $president=''; $capital='';   $establish='';   $bank='';   $homepage='';
        if(isset($dbinfor)){
        foreach($dbinfor as $mdb){   foreach($mdb as $mdb2){ //echo $mdb2;
          $arrdb1[]=$mdb2;$ctt+=1; // echo $mdb2;
        if($ctt==14){$arrdb2[]=$arrdb1;  $arrdb1=array(); $ctt=0;    }
      } }  }
        for($k=0;$k<count($arrdb2);$k++){
          $company=$arrdb2[$k][2];  $address=$arrdb2[$k][7];   $president=$arrdb2[$k][6];
          $capital=$arrdb2[$k][5]; $establish=$arrdb2[$k][4];   $bank=$arrdb2[$k][8];   $homepage=$arrdb2[$k][9];
          $comprofile=$arrdb2[$k][3];
          $piconer=$arrdb2[$k][11];
          $picfab=$arrdb2[$k][12];
          $message=$arrdb2[$k][10];
          $storeidk=$arrdb2[$k][0];
        }

        ?>
<!-- ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->

<h2 align="center">????????????</h2>
<?php
//+++++++++++++++++++++++++   ????????????????????????  ++++++++++++++++++++++++++++++
if($message!=''){
echo '</br><table width="85%"  align="center" style="border:1px solid#cccccc;">';
echo '<tr> <td width="25%"rowspan="3" bgcolor="#cccccc"style="vertical-align:top;"> ';
echo '<h3 align="center">????????????????????????</h3>   </td><td width="75%"style="padding-left:20px;">';
echo '<img src="../storage/company/'.$storeidk.'/'.$piconer.'" style="vertical-align:top;"class="imgcss24">';
echo '</td></tr><tr><td class="he20"style="padding-left:20px;"><p class="ft11">';
echo '????????????'.$president.'</p></td></tr>';
echo '<tr><td style="padding-left:20px;"><p class="ft13"style="font-family:">'.nl2br($message).'</p>';
echo '</td> </tr></table></br>';
}
?>
<!-- ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
<?php
//++++++++++++++++++++++++++++????????????++++++++++++++++++++++++++++++++++++++++++
if($comprofile!=''){
echo '<div align="center"class="ft16">???</div></br><table width="85%"  align="center" style="border:1px solid#cccccc;">';
echo '<tr> <td width="25%" class="he200"bgcolor="#cccccc"style="vertical-align:top;"> ';
echo '<h3 align="center">????????????</h3>   </td><td width="75%"style="vertical-align:top;padding-left:20px;">';
echo '<p class="ft13">'.nl2br($comprofile).'</p>';
echo '</td> </tr></table></br>';
}
?>
<?php
//+++++++++++++++++++++++++   ????????????  ++++++++++++++++++++++++++++++
if($company!=''){
echo '<div align="center"class="ft16">???</div></br><table width="85%"  align="center" style="border:1px solid#cccccc;">';
echo '<tr> <td width="25%" class="he200"bgcolor="#cccccc"style="vertical-align:top;"> ';
echo '<h3 align="center">??????????????????</h3>   </td>';
echo '<td width="75%"style="vertical-align:top;padding-left:20px;">';
echo '
  <table width="100%"  align="" border="0" class="ft13">
  <tr align=""class="he30"><td width="20%">?????????</td><td>'.$company.'</td></tr>
  <tr align=""class="he30"><td >?????????</td><td>'.$address.'</td></tr>
  <tr align=""class="he30"><td >????????????</td><td>'.$president.'</td></tr>
  <tr align=""class="he30"><td >?????????</td><td>'.$capital.'</td></tr>
  <tr align=""class="he30"><td >????????????</td><td>'.$establish.'</td></tr>
  <tr align=""class="he30"><td >????????????</td><td>'.$bank.'</td></tr>
  <tr align=""class="he30"><td >??????????????????</td><td>'.$homepage.'</td></tr>
</table>';
echo '</td> </tr></table></br>';
}
?>
<?php
//++++++++++++++++++++++++++++????????????+++++++++++++++++++++++++++++++++++++++++
if(isset($picfab)){
echo '<div align="center"class="ft16">???</div></br><table width="85%"  align="center" style="border:1px solid#cccccc;">';
echo '<tr> <td width="25%" class="he200"bgcolor="#cccccc"style="vertical-align:top;"> ';
echo '<h3 align="center">????????????</h3>   </td>
<td width="75%"style="vertical-align:top;padding-left:20px;">';
  $picfab=explode('|',$picfab);
  foreach($picfab as $cfab){
    if($cfab!=$piconer){
echo '<img src="../storage/company/'.$storeidk.'/'.$cfab.'" style="margin:3px;"class="imgcss24">';
  }}
echo '</td> </tr></table></br>';
}
?>
    <!-- +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->

    </td></tr></table>
    <!-- ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
         </td></tr></table>
     </body>

    </html>
