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

   <table width="100%"height="30"bgcolor="#483d86"align="center"border="0"><tr>
   <td width="20%"style="padding-left:10px;font-size:20px;color:#ffffff;">
     <strong>meisis</strong>
   </td >
   <td width="80%"align="center">

 </td></tr></table><hr class="hr">
@error('token') <div class="alert alert-danger">{{ $message }}</div> @enderror

<!-- **************************login************************************** -->
<table width="100%"height="500"border="0">
  <tr><td style="vertical-align:top">
<?php
$arrmana=array(); $topage0='';$topage1='';$topage2='';
$home='';
$home2='';
$product='';
$cart='';
$codeitem='';

if(isset($arrsign)){
$arrmana=explode('_',$arrsign[6]);
$home=$arrmana[0];
$home2=$arrmana[1];
$product=$arrmana[2];
$cart=$arrmana[3];
$codeitem=$arrmana[4];

}

 ?>
</br></br><table align="center" height="200"border="0"width="40%">
<tr><td align="center"style="background-color:#483d86;color:#ffffff;border-radius:5px">
<strong>ログイン成功しました。</strong>
</td></tr></table>

<script>

  var codeitem='<?php echo $codeitem; ?>';
  var product='<?php echo $product; ?>';
  var home='<?php echo $home; ?>';
  var home2='<?php echo $home2; ?>';
  var cart='<?php echo $cart; ?>';


if(cart=='cart'){
   window.location.href = "{{URL::to('manager/cart')}}?codeitem="+codeitem+"";
}
if(product=='product'){
   window.location.href = "{{URL::to('manager/product')}}?codeitem="+codeitem+"";
}
if(home2=='home2'){
   window.location.href = "{{URL::to('manager/home3')}}?submenu3="+codeitem+"";
}
if(home=='home'){
   window.location.href = "{{URL::to('manager/home')}}";
}
if(codeitem=='xxxxx'){
   window.location.href = "{{URL::to('manager/home')}}";
}


</script>
</td></tr></table>
</body>
</html>
