<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <!-- CSS And JavaScript -->

<?php
/*

<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
<link rel="stylesheet" href="//cdn.rawgit.com/necolas/normalize.css/master/normalize.css">
<link rel="stylesheet" href="//cdn.rawgit.com/milligram/milligram/master/dist/milligram.min.css">

*/
 ?>
  <title>My First Page</title>
</head>
<body>
<p><a href="{{ url('hello3') }}?asd=389"><button>testtest</button></a>xxxx</p>
  <h2>22222222222222222222222225555555555</h2>
  <p>{{date("Y/m/d H:i:s")}}</p>
  <table align="center" width="80%"border="1">
  @foreach ($datas as $rent)

    <tr><td width="20%"> {{ $rent->id}}      </td>
    <td width="10%"> {{ $rent->userid}}  </td>
    <td width="10%"> {{ $rent->password }}  </td>
    <td width="20%">   {{ $rent->name }}       </td>
    <td width="20%">   {{ $rent->email }}       </td></tr>
  @endforeach
  </table>

<?php
/*

<table align="center" width="80%"border="1">
@foreach ($datas as $rent)

  <tr><td width="20%"> {{ $rent->id}}      </td>
  <td width="30%"> {{ $rent->userid}}  </td>
  <td width="30%"> {{ $rent->password }}  </td>
  <td width="20%">   {{ $rent->name }}       </td></tr>

@endforeach
</table>



  {{ $datas }}



 {{ $datas->id }}
 {{ $datas->userid }}
 {{ $datas->name }}

 @foreach ($datas as $rent)
        <p>
          {{ $rent->id}}
        {{ $rent->userid}}
        {{ $rent->password }}
        </p>
 {{ $rent->name }}
  @endforeach

{{ $datas->currentPage() }}

{{ $datas->id }}
{{ $datas->title }}
{{ $datas->url }}
{{ $datas->description }}

{{ $datas->count() }}

@foreach ($datas as $rent)
       <p>
       {{ $rent->id }}
       {{ $rent->title }}
       {{ $rent->url }}
       {{ $rent->description }}
       </p>
   @endforeach
<a>{{ $value }}</a>
<h1>{{ $arr[0] }}</h1>
<h2>{{ $arr[1] }}</h2>
<h3>{{ $arr[2] }}</h3>




<a href="{{ url('/hello') }}">HOME11</a>
<!-- SSL -->
<a href="{{ secure_url('/hello') }}">HOM222E</a>
<form method="post" action="{{ secure_url('/hello') }}">
  @isset($my_name)
  <span>私の名前は{{$my_name}}です。</span>
  @endisset

  @empty($friend_list)
  <span>私はひとりぼっちです。</span>
  @endempty
  @unless (Auth::check())
    あなたはログインしていません。
  @endunless
  @for ($i = 0; $i < 10; $i++)
    現在の値は： {{ $i }}
  @endfor
  @hasSection('title')
      @yield('title') | Laravel学習帳
  @else
      Laravel学習帳
  @endif
  Request::url()

<a style="{{ disabled ? 'color:red;' : 'display:none;' }}" >hoge</a>

  <h2>Hello World from blade2222222222!!</h2>
  <p>{{date("Y/m/d H:i:s")}}</p>

 <a class="nav-link" href="{{ action('HelloController@index') }}#contact">
  <img src="{{ asset('images/z1.jpg') }}" width="300" height="300"alt=""></a>
  url: {{ url('images/z1.jpg') }} <br>
  <img src="{{ url('images/z1.jpg') }}" width="300" height="300"alt=""alt="">


  <li class="nav-item">
<a class="nav-link" href="http://yahoo.co.jp">yahoo</a>
</li>
  <li class="nav-item">
<a class="nav-link" href="{{ action('HelloController@index') }}#contact">111お問い合わせ</a>
</li>

*/ ?>


<?php

//echo $_GET['aa'];

?>


<?php /*

<form action="/myusers" method="POST" class="form-horizontal">
<input type="text" name="user_name" id="myuser-name" class="form-control">
<input type="text" name="age" id="myuser-age" class="form-control">
<input type="text" name="zip_code" id="myuser-email" class="form-control">
<button type="submit" class="btn btn-default"> <i class="fa fa-plus"></i>
  Add User </button></form>

*/      ?>

</body>
</html>
