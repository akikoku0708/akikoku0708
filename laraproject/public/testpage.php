
 <?php
//+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

 date_default_timezone_set('Asia/Tokyo');


$amount='';$paycode='';
if(isset($_GET['amount'])){		$amount=$_GET['amount'];		}
if(isset($_GET['paycode'])){ $paycode=$_GET['paycode']; }

 $amount=1;
$orderid =$paycode;
$productn='productx';
 if(!$_GET['transactionId']) {
// ----------------------------------- 決済reserve
   $header = array(
     'Content-Type: application/json; charset=UTF-8',
     'X-LINE-ChannelId: 1601231649',
     'X-LINE-ChannelSecret: 0281b98d275733b3a1215b7226ede341',
   );
   $postData = array(
     'productName' => $productn,
     'amount' => $amount,
     'currency' => "JPY",
     'confirmUrl' => "http://localhost:8000/testpage.php?amount=".$amount."&paycode=".$paycode."",
     'orderId' => $orderid,
   );

   $ch = curl_init("https://api-pay.line.me/v2/payments/request");
   curl_setopt($ch, CURLOPT_POST, true);
   curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
   curl_setopt($ch, CURLOPT_SSLVERSION, 1);
   curl_setopt($ch, CURLOPT_SSL_CIPHER_LIST, 'TLSv1');
   curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
   curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($postData));
   $rs = json_decode(curl_exec($ch), true);
   curl_close($ch);

   if($rs['returnCode'] == "0000") {
     header("Location: {$rs['info']['paymentUrl']['web']}");
   }
   else {
     echo "エラー番号：{$rs['returnCode']}";
   }
 }
 else {
   // ----------------------------------- 決済confirm

   $header = array(
     'Content-Type: application/json; charset=UTF-8',
     'X-LINE-ChannelId: 1601231649',
     'X-LINE-ChannelSecret: 0281b98d275733b3a1215b7226ede341',
   );
   $postData = array(
     'amount' => $amount,
     'currency' => "JPY",
   );

 $ch = curl_init("https://api-pay.line.me/v2/payments/{$_GET['transactionId']}/confirm");
   curl_setopt($ch, CURLOPT_POST, true);
   curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
   curl_setopt($ch, CURLOPT_SSLVERSION, 1);
   curl_setopt($ch, CURLOPT_SSL_CIPHER_LIST, 'TLSv1');
   curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
   curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($postData));
   $rs = json_decode(curl_exec($ch), true);
   curl_close($ch);

   if($rs['returnCode'] == "0000") {
 	  echo '---------------------------------'.'</br>';
    		echo "決済成功：{$rs['returnCode']}".'</br>';
 		echo '12:'.$productn.'</br>';//商品コード
 		echo '13:'.$amount.'</br>';//金額
 		echo '15:'.$orderid.'</br>';//注文番号==支払番号
 //---------------------------------------------
 $linepay=$orderid.'_'.$productn.'_'.$amount;
 header("Location: ./manager/mypage?payline=".$linepay."");exit();
//header("Location: ./mypage?amount=".$linepay."&paycode=".$orderid."&=".$linepay."");exit();

  //---------------------------------
   }
   else {
     echo "エラー番号：{$rs['returnCode']}";
   }

 }




 ?>
