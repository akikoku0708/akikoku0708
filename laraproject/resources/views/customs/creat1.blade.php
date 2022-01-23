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

pwCheck.addEventListener('change', function() {
    if(pwCheck.checked) {
        pw.setAttribute('type', 'text');
    } else {
        pw.setAttribute('type', 'password');
    }
}, false);

});
 </script>
 <script>
 jQuery(function(){
 //--------------password-------------------------------------------
 var pw2 = document.getElementById('password2');
 var pwCheck2 = document.getElementById('password-check2');

 pwCheck2.addEventListener('change', function() {
     if(pwCheck2.checked) {
         pw2.setAttribute('type', 'text');
     } else {
         pw2.setAttribute('type', 'password');
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

<table class="tb_creat01"border="0" >
  <tr><td style="vertical-align:center">

  @error('token')
    <div class="div_creat06">{{ $message }}</div>
  @enderror

<table class="tb_creat02" align="center"border="0"><tr><td>

<table class="tb_creat03" align="center"border="0">
<tr><td class="td_creat05b"></td><td colspan="2"> </td><td> </td></tr>

  <form method="POST" id="contactform" action="/customs/creat2">
    @csrf
    <tr><td align="center"colspan="4" class="td_creat05"><strong>Registration</strong></td></tr>
    <tr><td class="td_creat05a"></td><td colspan="2">
        @if(isset( $arr50 ))
<input type="email" name="email" class="in_creat209"value="{{$arr50[1]}}" placeholder=" email"/>
@elseif (old('email')=="")
<input type="email" name="email" class="in_creat09"value="" placeholder=" email"/>
 @else
 <input type="email" name="email" class="in_creat209"value="{{ old('email') }}" placeholder=" email"/>
  @endif
  @error('email')
      <div class="div_creat206">{{ $message }}</div>
    @enderror
  </td><td class="td_creat05b"></td></tr>

    <tr><td></td><td colspan="2">
        <input  type="text"name="name"class="in_creat09"value="{{ old('name') }}" placeholder="name" >
        @error('name')
          <div class="div_creat06">{{ $message }}</div>
        @enderror
      </td><td> </td></tr>




      <tr><td></td><td colspan="2">
          <input class="login5" type="password"id="password"name="password"value="{{ old('password') }}" placeholder="Password">
          @error('password')
            <div class="div_creat06"class="in_creat209">{{ $message }}</div>
          @enderror
      </td><td> <input type="checkbox" class="che2"id="password-check" /></td></tr>

      <tr><td></td><td colspan="2">
          <input class="login5" type="password"id="password2"name="password2"value="{{ old('password2') }}" placeholder="Confirm password" >
          @error('password2')
            <div class="div_creat06"class="in_creat209">{{ $message }}</div>
          @enderror
      </td><td> <input type="checkbox" class="che3"id="password-check2" /></td></tr>

        <tr><td></td><td colspan="2">
            <input  type="text"name="code2"class="in_creat09"value="{{ old('code2') }}" placeholder="Confirm code" >

            @error('code2')
              <div class="div_creat06">{{ $message }}</div>
            @enderror
          </td><td> </td></tr>


<tr><td class="td_creat05b"></td><td colspan="2"> </td><td> </td></tr>

<tr><td colspan="4"align="center">
    <button type="button" class="bt_creat07"onclick="onClick(event)"><strong>Send</strong></button>
</td></tr>

  </form>
</table>

<table class="tb_creat04"align="center"border="0">
<tr><td align="center">
<a href="{{ url('customs/creat0') }}" class="a_creat08"><h3> Back to creat </h3></a>
</td></tr></table>


</td></tr></table>

</td></tr></table>

@endsection


</body>
</html>
