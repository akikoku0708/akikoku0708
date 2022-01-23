<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  これはトップだよ！
  @if(isset($usersx))
@foreach($usersx as $user)
<li>{{$user['name']}} [{{$user['mail']}}]</li>
@endforeach
@endif



</body>

</html>
