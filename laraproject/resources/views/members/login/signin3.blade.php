

<?php

 $checkk='';
 if(isset($arrsign)){   $checkk='OKOK';
echo '</br></br><table align="center" height="200"border="0"width="40%">
<tr><td align="center"style="background-color:#483d86;color:#ffffff;border-radius:5px">
<strong>ログイン成功しました。</strong>
</td></tr></table>';

   }
 ?>
 <script>
 var checkk='<?php echo $checkk; ?>';
 if(checkk=='OKOK'){
 window.location.href = "{{URL::to('client/clientproduct')}}";
 }
 </script>
