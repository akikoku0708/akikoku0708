<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Ajax</title>

        <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script src="{{ asset('/js/jquery-1.11.2.js') }}"></script>
 <script>

</script>
    </head>
    <body>

  <h2>88888Hello World from blade22222222222!</h2>
@extends('layouts.add3')

  @section('title', 'お問合わせ確認')

  @section('content')
    <form method="POST" action="/customs/sforget3">
      @csrf
      <table class="table-form">
        <!-- <tr>
          <th>お名前</th>
          <td>{{ $name }}</td>
          <input type="hidden" name="name" value="{{ $name }}"/>

        </tr> -->
        <tr>
          <th>メールアドレス</th>
          <td>{{ $email }}</td>
          <input type="hidden" name="email" value="{{ $email }}"/>
        </tr>
        <tr>
          <th>メッセージ</th>
          <td>{{ $message }}</td>
          <input type="hidden" name="message" value="{{ $message }}"/>
        </tr>
      </table>
      <div class="button-area">
        <button type="button" class="back" onclick="javascript:window.history.back(-1);return false;">戻る</button>
        <button type="submit" class="go">送信する</button>
      </div>
    </form>
  @endsection




    </body>
</html>
