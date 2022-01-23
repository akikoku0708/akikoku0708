<?php
  $storeid='';  $storename='';
  $storeid=Session('storeidkk');
  $storename=Session('storenamekk');
//$storeid='T20210827131718UV';   $storename='掃除機';
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
  $codeitem=''; $numitem='';
  if(isset($_GET['codeitem'])){   $codeitem=$_GET['codeitem'];             }
  if(isset($_GET['numitem'])){   $numitem=$_GET['numitem'];             }
  //echo $numitem.'</br>';
//  echo $codeitem.'</br>';//?numitem=sojiki-at22&amenu4=i202112291219384Qw
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
  <a href="{{ url('client/clientimg') }}?numitem=<?php echo $numitem; ?>&amenu4=<?php echo $codeitem; ?>"  >
    <button class="btncss24">戻る</button></a>
  </td></tr></table><hr class="hr">
  <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
    @error('token') <div class="alert alert-danger">{{ $message }}</div> @enderror
  <table class="he1500"width="100%" border="0"> <tr><td style="vertical-align:top;">
  <!-- ************************************************************** -->

  <?php
  //if(isset($arrmain1 )){  foreach($arrmain1 as $main1){  echo $main1.'</br>';       }                    }
  //if(isset($arrmain2 )){  foreach($arrmain2 as $main2){  echo $main2.'</br>';       }                    }
  $jsonTest1=json_encode($arrmain1);
  $jsonTest2=json_encode($arrmain2);
   ?>
   <table align="center"border="0"width="80%">
  <tr bgcolor="#008000"height="40"style="color:#fff"><td align="center"> <strong>メイン画像削除選択</strong></td></tr>
  <tr><td style="vertical-align:top;"><div id="main"></div> </td></tr>
</table></br>

  <table align="center"border="0"width="80%">
 <tr bgcolor="#008000"height="40"style="color:#fff"><td align="center"> <strong>商品画像削除選択</strong></td></tr>
 <tr><td style="vertical-align:top;"><div id="main5"></div> </td></tr>
 </table>


  </td></tr></table>
  </body>
  <script type="text/javascript">

  var codeitem='<?php echo $codeitem; ?>';
  var storeid='<?php echo $storeid; ?>';
  var picmain=JSON.parse('<?php echo $jsonTest1; ?>');
  var picmain5=JSON.parse('<?php echo $jsonTest2; ?>');
  //----------------------------------------------------------
  var mbtt88=''; var mbtt88a='';  var ikey=0;
  if (picmain.length === 0){}else{
  for(var v1=0; v1<picmain.length; v1++){
    mbtt88a='<span class=""><img src="../storage/company/'+storeid+'/'+picmain[v1]+'.jpg" style="margin:5px;border-radius:5px" width="100" height="100">'
        +'<input class="che1"type="checkbox" name="cate"value="'+picmain[v1]+'"></span>';
        mbtt88=mbtt88+mbtt88a;
  }}
  $("#main").html('</br><div align="right">'
    +'<button onclick="func7();"class="btncss24">削除</button></div><hr>'+mbtt88);
    //----------------------------------------------------------
    var mbtt55=''; var mbtt55a='';
    if (picmain5.length === 0){}else{
    for(var v3=0; v3<picmain5.length; v3++){
      mbtt55a='<span class=""><img src="../storage/company/'+storeid+'/'+picmain5[v3]+'.jpg" style="margin:5px;border-radius:5px" width="100" height="100">'
          +'<input class="che1"type="checkbox" name="cate5"value="'+picmain5[v3]+'"></span>';
          mbtt55=mbtt55+mbtt55a;
    }}
    $("#main5").html('</br><div align="right">'
      +'<button onclick="func8();"class="btncss24">削除</button></div><hr>'+mbtt55);


  //----------------------------------------------
  var colors = [];
  //function func8(){   window.location.href = "{{URL::to('client/clientimg')}}";  }
  function func7(){   colors.length = 0;
  $('input:checkbox[name="cate"]:checked').each(function() {  colors.push($(this).val());	});
  ikey='x200';
  read();
  }
  function func8(){   colors.length = 0;
  $('input:checkbox[name="cate5"]:checked').each(function() {  colors.push($(this).val());	});
  ikey='x500';
  read();
  }


    //-------------------------------------------------------------------------
    $.ajaxSetup({
    headers: {  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')    }
    });
    //--------------------------------------------------------------
    $(".btn-submit").click(function(e){  e.preventDefault();   read();  });
   //----------------------------------------------------------------------
      function read(){
        var vname1 = colors;
        var vname2 = Math.round(Math.random()*100);
        var vname3 = codeitem;
        var vname5 = ikey;
        $.ajax({
           type:'POST',
           url:"{{ route('client/clientimgdele2') }}",
           data:{kname1:vname1, kname2:vname2, kname3:vname3, kname5:vname5},
           success:function(data){

      var mbtt3=''; var mbtt3a='';
      for(var v1=0; v1<data.zname5.length; v1++){
      mbtt3a='<span class=""><img src="../storage/company/'+storeid+'/'+data.zname5[v1]+'.jpg" style="margin:5px;border-radius:5px" width="100" height="100">'
      +'<input class="che1"type="checkbox" name="cate"value="'+picmain[v1]+'"></span>';
      mbtt3=mbtt3+mbtt3a;
      }
      $("#main").html('</br><div align="right">'
      +'<button onclick="func7();"class="btncss24">削除</button></div><hr>'+mbtt3);
     //-------------------------------------------------------------------------
     var mbtt7=''; var mbtt7a='';
     for(var v7=0; v7<data.zname7.length; v7++){
     mbtt7a='<span class=""><img src="../storage/company/'+storeid+'/'+data.zname7[v7]+'.jpg" style="margin:5px;border-radius:5px" width="100" height="100">'
     +'<input class="che1"type="checkbox" name="cate"value="'+picmain5[v7]+'"></span>';
     mbtt7=mbtt7+mbtt7a;
     }
     $("#main5").html('</br><div align="right">'
     +'<button onclick="func7();"class="btncss24">削除</button></div><hr>'+mbtt7);
    //-------------------------------------------------------------------------



             //-----------ok-------------------
           }
        });
        }
  </script>


  <?php
  }

   ?>
