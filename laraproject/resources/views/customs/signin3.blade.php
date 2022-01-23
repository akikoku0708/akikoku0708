
@if(isset( $arr))
<table width="400"border="0">
<tr><td align=""class="hei">{{$arr[2]}}</td></tr>
<tr><td align=""class="hei">{{$arr[0]}}</td></tr>
<tr><td align=""class="hei">{{$arr[1]}}</td></tr>
<tr><td align=""class="hei"><hr></td></tr>
<tr><td>
 このメッセージはmeisisの会員がログインした際に自動的に送られます。
 このメールに心当たりのない場合は  meisis@applyex.com までご連絡下さい。
</td></tr>
<tr><td align=""class="hei"><hr></td></tr>
<tr><td align=""class="hei"></td></tr>
<tr><td class="hei">meisis運営事務局より</td></tr>

</table>
@endif


<?php
echo '</br>';
if(isset($arrsign)){
echo $arrsign[0].'</br>'.$arrsign[1].'</br>'.$arrsign[2].
'</br>'.$arrsign[3].'</br>'.$arrsign[4].'</br>'.$arrsign[5];


}



 ?>
