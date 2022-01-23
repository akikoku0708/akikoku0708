<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" type="text/css" href="{{ asset('/css/nmenu3.css') }}">
<script src="{{ asset('/js/jquery-1.11.2.js') }}"></script>
<script src="{{ asset('/js/nmenu.js') }}"></script>
    <title>Home</title>

</head>
<style>
.btncss1{width:60%;height:70px;font-size:16px;


}

</style>
<script>


</script>
<body>
@extends('layouts.add')



@section('title', 'meisis')
 @section('content')

 <table width="98%"height="40"align="center"border="0"><tr>
 <td class="td_add04"width="30%">      @yield('title')   </td >
 <td width="40%"align="center">
   @if(Session::get('logname') ){{ Session::get('logname') }}
   @else {{'ゲストさん'}} @endif
   </td ><td style="font-size:12px;"align="right" width="30%">
     @if(Session::get('logname') )
     <a href="{{ url('main/logout') }}" class="a_add03">ログアウト</a>
     @else
  <a href="{{ url('members/logink') }}" class="a_add03">ログイン</a>
@endif

</td></tr></table><hr class="hr">
  @error('token') <div class="alert alert-danger">{{ $message }}</div> @enderror

  <!-- **************************login************************************** -->
   <table width="100%"height="1500"border="0"cellspacing="0"><tr><td style="vertical-align:top;">


     <table align="center"width="80%"border="1"cellspacing="0"bgcolor="#ffdab9"bordercolor="#fff">
    <tr align="center"height="100">
      <td width="25%"><a href="{{ url('manager/home') }}">
        <button class="btncss1">購入者</br>ログイン</button></a></td>
      <td width="25%"><a href="{{ url('members/signin') }}">
        <button class="btncss1">店舗作業</br>ログイン</button></a></td>
      <td width="25%"><a href="{{ url('manastore/sitemana1') }}">
        <button class="btncss1">サイト管理者</br>ログイン</button></a></td>
      <td width="25%">
        <!-- <a href="{{ url('') }}"> <button class="btncss1">運送会社</br>ログイン</button></a> -->
      </td>
    </tr>

    </table>


<?php
/*
$pcname='';$sessionid='';
if(isset($arrcart)){$pcname=$arrcart[0];$sessionid=$arrcart[1];
  //echo $arrcart[0].$arrcart[1];
}

     $arrtt1=array();$arrtt2=array();$data5=array();$cnt2=0;
     //-------------------------------------------------------
     if(isset($cart1)){
     foreach($cart1 as $mkk){   foreach($mkk as $mkk2){
       $arrtt1[]=$mkk2;  $cnt2+=1;
     if($cnt2==20){$data5[]=$arrtt1;  $arrtt1=array(); $cnt2=0;    }  } }
     }

     for($c=0;$c<count($data5);$c++){



if($data5[$c][15]==$pcname){//echo $data5[$c][15];
echo '<table align="center"width="90%"bordercolor="#9cc"border="0"cellspacing="0">
<tr align="center"><td bgcolor="#ccc"width="20%">'.$data5[$c][9].'</td><td width="80%">

 <table align="center"width="100%"border="1"cellspacing="0"bgcolor="#ffdab9"bordercolor="#fff">
<tr height="40"style="font-size:16px;"><td width="50%"colspan="2"><strong>'.$data5[$c][3].'</strong></td><td width="50%"colspan="2"><strong>単価：'.$data5[$c][5].'円（税込み）</strong></td></tr>
<tr align=""height="40"style="font-size:13px;"><td width="50%"colspan="2">色：'.$data5[$c][10].'</td> <td width="50%"colspan="2">数量：'.$data5[$c][6].'</td></tr>
<tr align=""height="40"style="font-size:13px;"><td width="50%"colspan="2">サイズ：'.$data5[$c][11].'</td><td width="50%"colspan="2">在庫：'.$data5[$c][19].'</td></tr>
<tr height="40"><td align="center"><span >削除</span></td><td align="center"><span>保留</span></td> <td width="50%"colspan="2"style="font-size:16px;"><strong>小計：'.$data5[$c][5]*$data5[$c][6].' 円（税込み）</strong></td></tr>
</table>
  </td></tr>
</table></br>';
}
     }
*/

?>









</td></tr></table>








@endsection


</body>
</html>
