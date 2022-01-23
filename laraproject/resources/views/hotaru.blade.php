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
<img src="{{ asset('storage/chen/gda1.jpg') }}" width="100" height="100">
<img src="{{ asset('storage/chen/gda2.jpg') }}" width="100" height="100">
  <h5>{{ $datek[0] }}</h5>
  <h5>{{ $datek[1] }}</h5>
  <h5>{{ $datek[2] }}</h5>
  <h5>{{ $datek[3] }}</h5>

    @if (Session::has('message1'))
      <p>{{ session('message1') }}</p>
  <p>{{ session('message2') }}</p>
    <p>{{ session('message3') }}</p>
  @endif

  <?php
  $fnamed1=array();
  $dpath="../storage/app/public/picmana";
  $dir = $dpath ;
  if( is_dir( $dir ) && $handle = opendir( $dir ) ) {
      while( ($file2 = readdir($handle)) !== false ) {
        if( filetype( $path = $dir .'/'. $file2 ) == "file" ) {
  			$fnamed1[]=$file2;
      }
      }
  }

  ?>

  @foreach ($fnamed1 as $rent)

  <img src="{{asset('../storage/picmana/'.$rent) }}" width="100" height="100"alt="">
  @endforeach


<?php
//echo asset('storage/filek.txt');

 ?>













</body>
</html>
