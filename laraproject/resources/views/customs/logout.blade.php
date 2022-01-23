
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


<!-- **************************login************************************** -->
<table width="100%"height="600"border="0"bgcolor="#99fff"cellspacing="0">
  <tr><td style="vertical-align:top">

  </br></br><table align="center" border="0" cellspacing="0"bgcolor="66ff99"width="50%"border="0">
     <tr><td height="200"align="center"><strong>ログアウトしました。</strong>
  </td></tr></table>
  <?php

$manakeyword='';$home='';$home2='';$product='';$amenu4='';
if(isset($_GET['manakeyword'])){	$manakeyword=$_GET['manakeyword'];		}
//echo $manakeyword;
$arrtt=array();
if($manakeyword!=''){
  $arrtt=explode('_',$manakeyword);
$home=$arrtt[0];
$home2=$arrtt[1];
  $product=$arrtt[2];
  $amenu4=$arrtt[4];
//  echo $home.$home2.$product.$amenu4;
}
   ?>

<script>
var home='';var home2='';var product='';
 home='<?php echo $home; ?>';
 home2='<?php echo $home2; ?>';
 product='<?php echo $product; ?>';
 amenu4='<?php echo $amenu4; ?>';
//alert(home2);

//window.location.href = "{{URL::to('manager/home')}}?";

if(home2=='home2'){
   window.location.href = "{{URL::to('manager/home2')}}?submenu3="+amenu4+"";
}

/*

if(home=='home'){
  window.location.href = "{{URL::to('manager/home')}}?";
}


if(product=='product'){
  window.location.href = "{{URL::to('manager/product')}}?amenu4="+amenu4+"";
}
*/

</script>
</td></tr></table>
</body>
</html>
