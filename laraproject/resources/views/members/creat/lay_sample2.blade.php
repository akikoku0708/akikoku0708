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
  @extends('layouts.add3')

  @section('title','meisis')

  @section('menubar')
    @parent
    インデックスページ
  @endsection

  @section('content')
    <p>ここが本文のコンテンツ</p>
    <p>必要なだけ記述ができる</p>
  @endsection

  @section('footer')
    copyright 2020 tuyano.
  @endsection



</body>
</html>
