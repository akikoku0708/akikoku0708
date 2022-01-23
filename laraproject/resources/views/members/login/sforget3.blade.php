


@if(isset( $arr))
<table width="400"border="0">
<tr><td align=""class="hei">{{$arr[2]}}</td></tr>
<tr><td align=""class="hei">{{$arr[0]}}</td></tr>
<tr><td align=""class="hei">{{$arr[1]}}</td></tr>
<tr><td align=""class="hei"><hr></td></tr>
<tr><td>
 このメッセージはmeisisの会員のパスワードを変更する為に送られます。
 このメールに心当たりのない場合は  meisis@applyex.com までご連絡下さい。
</td></tr>
<tr><td align=""class="hei"><hr></td></tr>
<tr><td align=""class="hei"></td></tr>
<tr><td class="hei">meisis運営事務局より</td></tr>

</table>
@endif

<!-- =============================================== -->



@if(isset( $arr13))
</br></br><table align="center" height="250"border="0"width="40%">
<tr><td align="center"style="background-color:#483d86;color:#ffffff;border-radius:5px">
<table width="400"border="0"style="color:#ffffff;border-radius:5px">
<tr><td align="center"class="hei">{{$arr13[2]}}</td></tr>
<tr><td align="center"class="hei">{{$arr13[0]}}</td></tr>
<tr><td align="center"class="hei">{{$arr13[1]}}</td></tr>
</table>
<table width="90%"border="0"style="color:#ffffff;font-size:11px;">
  <tr><td align=""class="hei"><hr></td></tr>
<tr><td>
 このメッセージは上記のようにmeisisの会員を登録してことのご連絡です。
 このメールに心当たりのない場合は  meisis@applyex.com までご連絡下さい。
</td></tr>

<tr><td align=""class="hei"></td></tr>
<tr><td class="hei">meisis運営事務局より</td></tr>
</table>
</td></tr></table>

@endif
<?php
$checkk='';
if(isset($arr13)){   $checkk='OKOK';    }
?>
<script>
var checkk='<?php echo $checkk; ?>';
if(checkk=='OKOK'){
window.location.href = "{{URL::to('members/signin')}}";
}
</script>
