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
  <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
    @error('token') <div class="alert alert-danger">{{ $message }}</div> @enderror
  <table class="he1500"width="100%" border="0"> <tr><td style="vertical-align:top;">
  <!-- ************************************************************** -->
<table border="0"> <tr><td style="vertical-align:top;"></td></tr></table>
  <div id="message"></div>
  </td></tr></table>
  </body>
  <script type="text/javascript">
    $(function(){   read();       });
    var arrdel = [];  var delekk='';
    function func(){
        arrdel.length = 0;
    		$('input:checkbox[name="checktt"]:checked').each(function() {
          arrdel.push($(this).val());
      		});
      delekk=arrdel.join('|');
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
        var vname1 = delekk;
        var vname2 = 'xxx';//alert(vname2);
        $.ajax({
           type:'POST',
           url:"{{ route('client/clientdele2') }}",
           data:{kname1:vname1, kname2:vname2},
           success:function(data){

          var dbdele=data['dbdele']; var maink1=''; var maink2='';
          for(var i=0; i<dbdele.length; i++){
            if(dbdele[i]['storeid']==data['storeid']){
            maink1='<tr align="center"bgcolor="#66cdaa">'+'<td>'+dbdele[i]['classm']
            +'<td>'+dbdele[i]['product']+'</td><td>'+dbdele[i]['numitem']+'</td><td>'
            +dbdele[i]['pricem']+'</td><td>'+dbdele[i]['codeitem']+'</td><td>'
            +'<input type="checkbox" class="che1"name="checktt" id="checktt" value="'+dbdele[i]['codeitem']+'">'
            +'</tr>'
            maink2=maink2+maink1;
          }   }
            $('#message').html('<h3 align="center">商品登録削除</h3>'
            +'<table align="center"width="80%"border="0"class="ft11">'
            +'<tr align="center"bgcolor="#cccccc"class="he30"><td>商品分類</td><td>商品名</td><td>商品型番</td>'
            +'<td>単価</td><td>商品コード</td><td></td></tr>'
            +maink2
            +'<tr><td colspan="6"align="center"class="he60"><button onclick="func(this);"class="btncss25">削除</button></td></tr>'
            +'</table>'
          );
   //-------------------------------------------------------------------------

             //-----------ok-------------------
           }
        });
        }
  </script>


  <?php
  }

   ?>
