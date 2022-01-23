<!DOCTYPE html>
<html>
<head>
    <title>Laravel 8 Ajax Request example</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=0.5">
    <script src="https://code.jquery.com/jquery-3.0.0.min.js"></script>

    <meta name="csrf-token" content="{{ csrf_token() }}" />
</head>

<style>
.input51{ background-color:#99ffff;border:none;border-color:#99ffff;border-radius:5px;width:100%;height:40px;    }

</style>

<body>


@if(isset( $arr))
<table width="400"border="0">
<tr><td align=""class="hei">{{$arr[2]}}</td></tr>
<tr><td align=""class="hei">{{$arr[0]}}</td></tr>
<tr><td align=""class="hei">{{$arr[1]}}</td></tr>
<tr><td align=""height="20">&nbsp;</td></tr>
<tr><td align=""class="hei"><hr></td></tr>
<tr><td>
 このメッセージはmeisisの店舗会員を登録する為に送られます。
 このメールに心当たりのない場合は  meisis@applyex.com までご連絡下さい。
</td></tr>
<tr><td align=""class="hei"><hr></td></tr>
<tr><td align=""class="hei"></td></tr>
<tr><td class="hei">meisis運営事務局より</td></tr>

</table>
@endif

</body>
  </html>
