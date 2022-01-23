<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Ajax</title>
        <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

 <script>

</script>
    </head>
    <body>

  <h2>88888Hello World from blade22222222222!</h2>
@extends('layouts.add3')

  @section('title', 'お問合わせ確認')

  @section('content')
    <form method="POST" action="/customs/creat3">
      @csrf
      <table class="table-form">
        <tr>
          <th>メールアドレス</th>
          <td>{{ $email }}</td>
          <input type="hidden" name="email" value="{{ $email }}"/>
        </tr>


        <tr>
          <th>お名前</th>
          <td>{{ $name }}</td>
          <input type="hidden" name="name" value="{{ $name }}"/>

        </tr>

        <tr>
          <th>メッセージ</th>
          <td>{{ $password }}</td>
          <input type="hidden" name="password" value="{{ $password }}"/>
        </tr>
        <tr>
          <th>メッセージ</th>
          <td>{{ $code2 }}</td>
          <input type="hidden" name="password" value="{{ $code2 }}"/>
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
