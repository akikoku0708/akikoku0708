<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>お問い合わせ</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
@extends('layouts.add')
@section('title', 'お問合わせ')

@section('script')
<script>
  function onClick(e) {
    document.getElementById("contactform").submit();
  }
</script>
@endsection

@section('content')
  @error('token')
    <div class="alert alert-danger">{{ $message }}</div>
  @enderror
<table><tr><td width="400" border="1">
  <form method="POST" id="contactform" action="hello71b">
    @csrf
    <table class="table-form">
      <tr>
        <th>お名前</th>
        <td>
          <input type="text" name="name" value="{{ old('name') }}"/>
          @error('name')
            <div class="alert alert-danger">{{ $message }}</div>
          @enderror
        </td>
      </tr>
      <tr>
        <th>メールアドレス</th>
        <td>
          <input type="email" name="email" value="{{ old('email') }}"/>
          @error('email')
            <div class="alert alert-danger">{{ $message }}</div>
          @enderror
        </td>
      </tr>
      <tr>
        <th>メッセージ</th>
        <td>
          <textarea name="message">{{ old('message') }}</textarea>
          @error('message')
            <div class="alert alert-danger">{{ $message }}</div>
          @enderror
        </td>
      </tr>
    </table>
    <div class="button-area">
      <button type="button" class="go" onclick="onClick(event)">確認する</button>
    </div>
  </form>
</td></tr></table>
@endsection


</body>
</html>
