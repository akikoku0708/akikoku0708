
<?php
$loginname='';
$loginname=Session('custsessname');
$custcode=Session('custsesscode');
  // +++++++++++++++++++++++++++++++++++++++++++++++++++++++++
?>



<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


<script src="{{ asset('/js/jquery-1.11.2.js') }}"></script>

  <script src="https://code.jquery.com/jquery-3.0.0.min.js"></script>

    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <title>Home</title>

</head>
<style type="text/css">

</style>



<body>
  @extends('layouts.add')
  <table width="100%"class="he40"align="center"bgcolor="#483d86"border="0"><tr>
  <td width="10%"align="center" >
  <a href="{{ url('manager/home') }}" class="acss5" > meisis </a> </td >
  <td class="ft11"width="70%"align="center"style="color:#ffffff;">
  <?php     if($loginname!=''){  echo ''.$loginname.'様ログイン中';     }            ?>
</td><td width="20%"align="right"><a href="{{ url('manager/home') }}" >
  <button class="btncss25">HOME</button></a>
  </td></tr></table><hr class="hr">
@error('token') <div class="alert alert-danger">{{ $message }}</div> @enderror

<!-- **************************login************************************** -->
 <table width="100%"class="he1500"border="0"cellspacing="0"><tr><td style="vertical-align:top;">
   <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
   <table width="80%" align="center" border="0"class="he30">
   <tr><td align="right">

     <a href="{{ url('manager/payment') }}">
    <button id="buttona0"class="btncss25">後で支払</button></a>
   </td></tr></table>

   <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->

<?php



//------------------------------------------------------
$arrsa1=array();  $arrsa2=array(); $cat=0;
//----------------------------------------------------------------
if(isset($paywait)){
foreach($paywait as $ales1){   foreach($ales1 as $ales2){
    $arrsa1[]=$ales2; $cat +=1; //echo $ales2;
if($cat==7){$arrsa2[]=$arrsa1;  $arrsa1=array(); $cat=0;    }  } }
}

 ?>
 @if(isset( $text1))
 <table width="50%"align="center"border="0"class="ft11">
 <tr><td><h3 align="center">支払</h3></td></tr>
 <tr><td><?php echo $text4; ?></td></tr>
 <tr><td class="ft20"><?php echo $text3; ?></td></tr>
 </table>

 <table width="50%"align="center"border="0"class="ft11">
 <tr class="he30"align="center"bgcolor="#999999"><td>金額</td></tr>
 <tr class="he60"align="center"bgcolor="#cccccc"class="ft16"><td><?php echo $text2; ?>円</td></tr>
 <tr class="he30"align="center"> <td colspan="2">
   <a href="{{ url('testpage.php') }}?amount=<?php echo $text2; ?>&paycode=<?php echo $text1; ?>" >
   <button class="btncss25">支払進む</button> </a></td></tr>
 </table>
@endif




   <!-- <a href="{{ url('testpage.php') }}?amount=<?php echo $text2; ?>&paycode=<?php echo $text1; ?>" > -->







</td></tr></table>
    </body>
</html>
