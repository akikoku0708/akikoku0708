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
  <!-- **************************login************************************** -->
  <table class="he1500" width="100%"bgcolor="#99fff;"border="0">
    <tr><td style="vertical-align:top;">
      <?php
      $submenu1='';$submenu2='';$submenu3='';$prkcode='';$itemcode='';$itemk='';
      if(isset($_GET['prkcode'])){	$itemcode=$_GET['prkcode'];	}
      //-------------------------------------------------------
      $arrtt1=array();$data5=array();$cnt2=0;
      if(isset($ajax21)){
      foreach($ajax21 as $mkk){   foreach($mkk as $mkk2){
        $arrtt1[]=$mkk2;$cnt2+=1;
      if($cnt2==5){$data5[]=$arrtt1;  $arrtt1=array(); $cnt2=0;    }  } }
      }
      for($i = 0 ; $i < count($data5) ; $i++){
      //$itemcodek=$data5[$i][2];
      if($data5[$i][4]==$itemcode){
      $categoryt=$data5[$i][0];
      $classmt=$data5[$i][1];
      $itemkt=$data5[$i][2];
      $productt=$data5[$i][3];

      }}

      ?>
<table width="100%" border="0" cellspacing="0"align="center">
<tr><td width="50%"style="vertical-align:top" >
  <p align="center"><strong>商品新規登録</strong></p>
<form >
<table width="90%" border="1" cellspacing="0" bordercolor="#fff" align="center">
<tr class="ft11"bgcolor="#cccccc"><td class="he30"width="25%" align="center"> カテゴリ </td><td><?php echo $categoryt; ?> </td></tr>
<tr class="ft11"bgcolor="#cccccc"><td class="he30"width="25%" align="center"> 商品大分類 </td><td><?php echo $classmt; ?> </td></tr>
<tr class="ft11"bgcolor="#cccccc"><td class="he30"width="25%" align="center"> 商品分類 </td><td><?php echo $itemkt; ?> </td></tr>
<tr class="ft11"bgcolor="#cccccc"><td class="he30"width="25%" align="center"> 商品コード </td><td><?php echo $itemcode; ?> </td></tr>
<tr class="ft11"bgcolor="#cccccc"><td class="he30"align="center">商品名 </td><td> <?php echo $productt; ?></td></tr>
<tr class="ft11"bgcolor="#cccccc"><td align="center">型番 </td><td> <input type="text" name="search" class="inputcss21" placeholder="Item" required=""> </td></tr>
<input type="hidden" name="keyw1" value="<?php echo $categoryt; ?>"required="">
<input type="hidden" name="keyw2" value="<?php echo $classmt; ?>"required="">
<input type="hidden" name="keyw3" value="<?php echo $itemkt; ?>"required="">
<input type="hidden" name="keyw4" value="<?php echo $productt; ?>"required="">
<input type="hidden" name="keyw5" value="<?php echo $itemcode; ?>"required="">
</table>
  <p align="center"><button id="btn-submit"class="btncss25">登録</button></p>
</form>

</td><td  bgcolor="#eeeeee" class="ft11"style=" vertical-align:top;">
<table width="90%" border="0"  align="center">
<tr><td ><div id="as6"></div></td></tr>
</table>

</td></tr></table>





</td></tr></table>



</body>
</html>
<script type="text/javascript">

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $("#btn-submit").click(function(e){

        e.preventDefault();
        var keyw0 = $("input[name=search]").val();
        var keyw1 = $("input[name=keyw1]").val();
        var keyw2 = $("input[name=keyw2]").val();
        var keyw3 = $("input[name=keyw3]").val();
        var keyw4 = $("input[name=keyw4]").val();
        var keyw5 = $("input[name=keyw5]").val();

        $.ajax({
           type:'POST',
           url:"{{ route('client/ajax51b') }}",
           data:{namet0:keyw0, namet1:keyw1 , namet2:keyw2  , namet3:keyw3,
             namet4:keyw4  , namet5:keyw5           },
         success:function(data){
            $('#as6').append(data['namex5']);

        if(data['mdb2']=="kkkk"){
          $('#as6').html(''
          +'</br><table width="90%"align="center"class="ft11" border="0" cellspacing="0" >'
         +'<tr><td class="he100"align="center">この型番は既に使用されていた。</td></tr>'
         +'</table>');
        }else{
                $('#as6').html(
                +'</br><table width="90%" border="1" class="ft11" align="center">'
                +'<tr><td colspan="2">&nbsp; </td></tr>'
                +'<tr><td colspan="2"class="ft13"><strong>新規登録</strong> </td></tr>'
                +'<tr><td>商品コード:  </td><td>'+data['namex5']+'</td></tr>'
                +'<tr><td>商品の型番:  </td><td>'+data['namex0']+'</td></tr>'
                +'<tr><td colspan="2">&nbsp; </td></tr>'
                +'<tr><td colspan="2"><a href="{{ url('client/clientedit6a') }}?amenu4='
                +data['namex0']+'&itemcode='+data['namex5']+'"><button class="btncss26">続けて登録</button></a></td></tr>'+'</table>'
           );
         }
             //-----------ok-------------------
           }
        });
    });
</script>


<?php
}

 ?>
