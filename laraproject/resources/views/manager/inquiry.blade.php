
<?php
$loginname='';
$loginname=Session('custsessname');
$custcode=Session('custsesscode');
//if($logink==''){
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

    <title>Ecapply</title>

</head>
<style type="text/css">
/*
.wt300{width:300px;}  .wt160{width:160px;}  .wt80{width:80px;}

.he1500{height:1500px;}  .he30{height:30px;}  .he24{height:24px;}  .he80{height:80px;}
.ft11{font-size:11px;}  .ft13{font-size:13px;}  .ft16{font-size:16px;}  .ft20{font-size:20px;}

.btncss25{width:80px;height:24px;font-size:11px; color:#ffffff;border-radius:3px;background-color:#483d86;margin-right:4px;border:none;      }
.btncss25:hover {    background-color: #f5deb3;  color:#483d86;  }
.btncss20{width:60px;height:20px;font-size:11px; color:#ffffff;border-radius:3px;background-color:#483d86;margin-right:4px;border:none;      }
.btncss20:hover {    background-color: #006400;  color:#ffffff;  }
.imgcss20{width:40px;  height:40px;border-radius: 3px;    }
.acss5{ text-decoration:none;color:#ffffff;font-size:20px;font-weight:900;font-family:arial black;}
.alink{text-decoration:none;}
*/
</style>


<!-- **************************login************************************** -->
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

   <table width="100%" align="center" cellspacing="0"border="0"><tr align="right"><td  >
    <a href="{{ url('manager/mypage') }}"class="alink"><button id=""class="btncss25">注文状況</button></a>
    <a href="{{ url('manager/payment') }}"class="alink"><button id=""class="btncss25">支払状況</button></a>
    <a href="{{ url('manager/instock') }}"class="alink"><button id=""class="btncss25">購入履歴</button></a>
    <a href="{{ url('manager/inquiry') }}"class="alink"><button id=""class="btncss25">問い合わせ</button>
   <a href="{{ url('manager/profile') }}"class="alink"><button id="buttona4"class="btncss25">プロファイル</button></a>
    </td></tr></table><hr>
 <!-- ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^ -->
   <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
   <h3 align="center">お問い合わせ</h3>
   <?php
   /*
   $arrsa1=array();  $arrsa2=array(); $cat=0; $ckt=0;
   $arrsa5=array();  $arrsa6=array(); $cat5=0;
   $arrcust=array();
//----------------------------------------------------------------
if(isset($orderlist)){  foreach($orderlist as $ales1){
  foreach($ales1 as $ales2){    $arrsa1[]=$ales2; $cat +=1;
if($cat==28){$arrsa2[]=$arrsa1;  $arrsa1=array(); $cat=0;    }  } }}
//-----------------------------------------------------------------------

echo '<table width="90%"align="center"border="1"cellspacing="0"class="font11">';
echo '<tr align="center"bgcolor="#cccccc"class="he30"><td>No</td><td>注文番号</td><td>商品名</td><td>型番</td><td>単価</td><td>数量</td>
<td>金額</td><td>購入先</td><td>出荷され日</td><td>入荷番号</td><td>画像</td> <td></td>   </tr>';

for($k=0;$k<count($arrsa2);$k++){
 if($arrsa2[$k][11]==$loginid){
  if($arrsa2[$k][12]==$custcode){$ckt +=1;
      echo '<tr align="center"class="he30"><td>'.$ckt.'</td><td>'.$arrsa2[$k][1].'</td><td>'.$arrsa2[$k][2].'</td>
      <td>'.$arrsa2[$k][3].'</td><td>'.$arrsa2[$k][4].'</td><td>'.$arrsa2[$k][5].'</td><td>'.$arrsa2[$k][6].'</td>
      <td>'.$arrsa2[$k][13].'</td><td>'.$arrsa2[$k][22].'</td><td>'.$arrsa2[$k][27].'</td>
      <td><img src="../storage/upload/'.$arrsa2[$k][9].'/'.$arrsa2[$k][18].'" class="imgcss20"></td>
      <td>';
      ?>    <a href="{{ url('manager/product') }}?codeitem=<?php echo $arrsa2[$k][14]; ?>" >
          <button class="btncss20">再注文</button></a>
    <?php
    echo '</td></tr>';
    }}}
    echo '</table>';
    */
    ?>






</td></tr></table>
    </body>
</html>
