<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>My First Page</title>
</head>
<body>

<table width="800" align="center"border="0">
<tr><td>ID:  {{ $arr[0] }}</td></tr>
<tr><td>PS:  {!! nl2br(e($arr[1] )) !!}</td></tr>
<tr><td><p>{!! nl2br(e($arr[2] )) !!}</p></td></tr>

</table>




<?php    /*


@forelse ($arr as $post)
{{ $post }}
  @empty

  @endforelse


  @foreach ($db1 as $rent)
         <p>
         {{ $rent->id }}
         {{ $rent->first_name }}
         {{ $rent->last_name }}
         </p>
     @endforeach
*/  ?>


</body>
</html>
