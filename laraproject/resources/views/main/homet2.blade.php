<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  これはトップだよ！
  @if(isset($var))

  {{ $var[0] }}
    {{ $var[1]}}
  @endif

    @if(isset($users))
  @foreach($users as $user)
  <li>{{$user['name']}} [{{$user['mail']}}]</li>
  @endforeach
  @endif
  
{{\Cookie::get('testcookie')}}
<!-- {{session('kudamono')}} -->
</body>

</html>
