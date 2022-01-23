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
@extends('layouts.add')

  @section('title', 'お問合わせ確認')

  @section('content')
    <form method="POST" action="/inquiry/finish">
      @csrf
      <table class="table-form">
        <tr>
          <th>お名前</th>
          <td>{{ $name }}</td>
        </tr>
        <tr>
          <th>メールアドレス</th>
          <td>{{ $email }}</td>
        </tr>
        <tr>
          <th>メッセージ</th>
          <td>{{ $message }}</td>
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
