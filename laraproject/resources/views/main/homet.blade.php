
<?php

 $sessionk='';
 $sessionk=Session::get('logmkk');

if($sessionk==12345){   echo $sessionk;
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>

</head>

<body>
@extends('layouts.add')



@section('script')
<script>
  function onClick(e) {
    document.getElementById("contactform").submit();
  }
</script>
@endsection
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
<!-- TTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTT -->
<table class="tb_creat01"border="0">
  <tr><td style="vertical-align:top;">
    <table align="center"border="0">
   <tr><td >
     @if(Session::get('logmkk') )
    {{ session('logmkk') }}
     @else


    @endif

    @if(Session::get('emailkk') )
    {{ Session::get('emailkk')   }}

    @else
    @endif
   </td></tr></table>


   @if(isset( $arrt))
  <table width="400"border="0">

  <tr><td align=""class="hei">{{$arrt[0]}}</td></tr>
  <tr><td align=""class="hei">{{$arrt[1]}}</td></tr>
  <tr><td align=""class="hei"><hr></td></tr>
  <tr><td>
    このメッセージはmeisisの会員がログインした際に自動的に送られます。
    このメールに心当たりのない場合は  meisis@applyex.com までご連絡下さい。
  </td></tr>
  <tr><td align=""class="hei"><hr></td></tr>
  <tr><td align=""class="hei"></td></tr>
  <tr><td class="hei">meisis運営事務局より</td></tr>

  </table>
@endif

   <!-- @if(isset( $arr55 ))
   <table width="400"border="0">
   <tr><td align=""class="hei">{{$arr55[2]}}</td></tr>
   <tr><td align=""class="hei">{{$arr55[0]}}</td></tr>
   <tr><td align=""class="hei">{{$arr55[1]}}</td></tr>
   <tr><td align=""class="hei"><hr></td></tr>
   <tr><td>
     このメッセージはmeisisの会員がログインした際に自動的に送られます。
     このメールに心当たりのない場合は  meisis@applyex.com までご連絡下さい。
   </td></tr>
   <tr><td align=""class="hei"><hr></td></tr>
   <tr><td align=""class="hei"></td></tr>
   <tr><td class="hei">meisis運営事務局より</td></tr>

   </table>
@endif  -->
 <!-- @if(isset( $arrsign ))
<table width="400"border="0">
<tr><td align=""class="hei">{{$arrsign[2]}}</td></tr>
<tr><td align=""class="hei">{{$arrsign[0]}}</td></tr>
<tr><td align=""class="hei">{{$arrsign[1]}}</td></tr>
<tr><td align=""class="hei"><hr></td></tr>
<tr><td>
  このメッセージはmeisisの会員がログインした際に自動的に送られます。
  このメールに心当たりのない場合は  meisis@applyex.com までご連絡下さい。
</td></tr>
<tr><td align=""class="hei"><hr></td></tr>
<tr><td align=""class="hei"></td></tr>
<tr><td class="hei">meisis運営事務局より</td></tr>

</table>
@endif -->


   <table class="tb_creat02"align="center"border="0">
   <tr><td ><h1 align="center">{{'メインページ'}}</h1>


   </td></tr></table>



</td></tr></table>








@endsection


</body>
</html>

<?php
 }else{   echo '3333333';       }

?>
