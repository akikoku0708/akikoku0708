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

   <!-- <table width="100%"class="he40"align="center"bgcolor="#483d86"border="0"><tr>
   <td width="10%"align="center" >
    <a href="{{ url('manager/home') }}" class="acss5" > meisis </a> </td >
</td><td width="80%"align="right">
  <a href="{{ url('manager/mypage') }}" >
  <button class="btncss5">マイページ</button></a>
<a href="{{ url('manager/home') }}" >
<button class="btncss5">HOME</button></a>
</td></tr></table><hr class="hr"> -->
@error('token') <div class="alert alert-danger">{{ $message }}</div> @enderror

<!-- **************************login************************************** -->
 <table width="100%"class="he1500"border="0"cellspacing="0"><tr><td style="vertical-align:top;">

   <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->


<?php
$payline='';$arrkk=array();$amount='';$paycode='';
if(isset($_GET['payline'])){ $payline=$_GET['payline'];
$arrkk=explode('_',$payline);
$paycode=$arrkk[0];
$productn=$arrkk[1];
$amount=$arrkk[2];
 }

 $paycode='py20211012150845h0';
 $productn='productx';
 $amount='18888';

 ?>
</br>
<div id="message"></div>
</td></tr></table>
    </body>
</html>


<script type="text/javascript">
var paycode='';
var amount='';
var transactionId='';
paycode='<?php echo $paycode; ?>';
amount='<?php echo $amount; ?>';
productn='<?php echo $productn; ?>';

    $(function() {
      read();
    });
    //-------------------------------------------------------------------------
    $.ajaxSetup({
    headers: {  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')    }
    });
    //--------------------------------------------------------------
    $(".btn-submit").click(function(e){  e.preventDefault();   read();  });
   //----------------------------------------------------------------------
      function read(){

        var vname1 = paycode;
        var vname2 = amount;
        var vname3 = productn;

        $.ajax({
           type:'POST',
           url:"{{ route('manager/paylineajax') }}",
           data:{kname1:vname1, kname2:vname2,kname3:vname3  },
           success:function(data){
   //-------------------------------------------------------------------------
         $('#message').html('<table border="1"><tr><td>'
         +data['zname1']+'</br>'+data['zname2']+'</br>'+data['zname3']+'</br>'+'</td></tr><table>');


             //-----------ok-------------------
           }
        });
        }
</script>


<script>

//window.location.href = "{{URL::to('manager/mypage')}}";

</script>
