<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="{{ asset('/js/jquery-1.11.2.js') }}"></script>
    <title>お問い合わせ</title>

</head>
<script>
jQuery(function(){
//--------------password-------------------------------------------
var pw = document.getElementById('password');
var pwCheck = document.getElementById('password-check');
//var Check = document.getElementById('che1');

pwCheck.addEventListener('change', function() {
    if(pwCheck.checked) {
        pw.setAttribute('type', 'text');
    } else {
        pw.setAttribute('type', 'password');
    }
}, false);

});
 </script>
<body>
@extends('layouts.add3')



@section('script')
<script>
  function onClick(e) {
    document.getElementById("contactform").submit();
  }
</script>
@endsection

@section('content')

<table class="tb_creat01"border="0">
  <tr><td style="vertical-align:center">

  @error('token')
    <div class="div_creat06">{{ $message }}</div>
  @enderror


  @if(isset( $arr13 ))
  <hr class="hr2"><table align="center" style="font-size:11px;"border="0">
  <tr><td align="center">{{$arr13[0]}}</td></tr>
  <!-- <tr><td align="center">{{$arr13[1]}}</td></tr>
  <tr><td align="center">{{$arr13[2]}}</td></tr> -->
  </table>

@elseif(isset( $arr15 ))


  <!-- <hr class="hr2"><table style="font-size:11px;"align="center"border="0">
    <tr><td align="center"> {{$arr51[0]}}</td></tr>
  <tr><td align="center"> {!! nl2br(e($arr51[1] )) !!}</td></tr>
  <tr><td align="center"> {!! nl2br(e($arr51[2] )) !!}</td></tr>
</table> -->
@endif




  <table class="tb_creat02"align="center"border="0">
<tr><td>

<table class="tb_creat03"align="center"border="0">

  <form method="POST" id="contactform" action="/members/signin2">
    @csrf

  <tr><td align="center"colspan="4" class="td_creat05"><strong>Sign in</strong></td></tr>
<tr><td class="td_creat05a"></td><td colspan="2">
  <input type="email" class="login5"name="email" value="{{ \Cookie::get('emailcookies') }}  "placeholder=" email"/>
  @error('email')
    <div class="div_creat06">{{ $message }}</div>
  @enderror
</td><td class="td_creat05b"></td></tr>


<tr><td></td><td colspan="2">

    <input class="login5" type="password"id="password"name="password"value="{{ \Cookie::get('logcookies') }}" placeholder="Password" style="border-radius:5px;color:#333;border:none;background-color:#fff; height:40px;width:99%">
    @error('password')
      <div class="div_creat06">{{ $message }}</div>
    @enderror
</td><td> <input type="checkbox" class="che2"id="password-check" /></td></tr>

<tr><td></td><td align="right"class="td_creat05c">Save mail and password</td>
  <td class="td_creat05b">
<input type="hidden" name="che1" value="111" checked>
<input type="checkbox" name="che1" value="checkbox"  class="che1" id="che1">
@error('che1')
  <div class="div_creat06">{{ $message }}</div>
@enderror
  </td><td></td></tr>
<tr><td colspan="4"align="center">
    <button type="button" class="bt_creat07" onclick="onClick(event)"><strong>Send</strong></button>
</td></tr>

  </form>
</table>

<table class="tb_creat04"width="100%"height="70"align="center"border="0">
<tr><td align="center"><a href="{{ url('members/creat0') }}" class="a_creat08">Creat an acount</a></br>
<a href="{{ url('members/sforget0') }}"class="a_creat08">Forget password</a>
</td></tr></table>

</td></tr></table>
</td></tr></table>

@endsection


</body>
</html>
