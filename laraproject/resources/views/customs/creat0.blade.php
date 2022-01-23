<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="{{ asset('/js/jquery-1.11.2.js') }}"></script>
    <title>meisis</title>

</head>


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

<table class="tb_creat02"align="center"border="0"><tr><td>
<table class="tb_creat03"align="center"border="0">
<form method="POST" id="contactform" action="/customs/creat1">
    @csrf
<tr><td align="center"colspan="4" class="td_creat05"><strong>Creat an acount</strong></td></tr>
<tr><td class="td_creat05a"></td><td colspan="2">
  <input type="email" name="email" value="{{ old('email') }}" class="in_creat09"placeholder=" email"/>
  @error('email')
    <div class="div_creat06">{{ $message }}</div>
  @enderror
</td><td class="td_creat05b"></td></tr>

<tr><td colspan="4"align="center">
    <button type="button" class="bt_creat07"onclick="onClick(event)"><strong>Send</strong></button>
</td></tr>

  </form>
</table>

<table class="tb_creat04"align="center"border="0">
<tr><td align="center">
<a href="{{ url('customs/signin') }}"class="a_creat08" >Login an acount</a></br>
<a href="{{ url('customs/sforget0') }}" class="a_creat08">Forget password</a>
</td></tr></table>


</td></tr></table>

</td></tr></table>

@endsection





</body>
</html>
