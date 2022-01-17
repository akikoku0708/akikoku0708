 <script src="./jquery/jquery-1.11.2.js"></script>  
  <script type="text/javascript" src="http://code.jquery.com/jquery-2.2.3.min.js"></script>
 
<script>

$("#PassageArea").load("strstr1.php");

var PassSec;   // 秒数カウント用変数
 
// 繰り返し処理の中身
function showPassage() {
   PassSec++;   // カウントアップ

   var PassSec2=10-PassSec;
   var msg = "ボタンを押してから " + PassSec2 + "秒が経過しました。";   // 表示文作成
   document.getElementById("PassageArea").innerHTML = msg;   // 表示更新
   
   if(PassSec2==0){		stopShowing();		}
   
}
 
// 繰り返し処理の開始
function startShowing() {
   PassSec = 0;   // カウンタのリセット
   PassageID = setInterval('showPassage()',1000);   // タイマーをセット(1000ms間隔)
   document.getElementById("startcount").disabled = true;   // 開始ボタンの無効化
   
   
   
}
 
// 繰り返し処理の中止
function stopShowing() {
   clearInterval( PassageID );   // タイマーのクリア
   document.getElementById("startcount").disabled = false;   // 開始ボタンの有効化
}
showPassage();
 


</script>


<p>
   <input type="button" value="カウント開始" id="startcount" onclick="startShowing();">
   <input type="button" value="カウント停止" id="endcount" onclick="stopShowing();">
</p>
<?php  
echo '<p id="PassageArea">(ここにカウントが表示されます)</p>';

?>