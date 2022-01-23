

<?php
$loginname='';
$loginname=Session('custsessname');
$custcode=Session('custsesscode');
  // +++++++++++++++++++++++++++++++++++++++++++++++++++++++++
?>




<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" type="text/css"href="{{ asset('/css/drift-basic.css') }}">
<script src="{{ asset('/js/jquery-1.11.2.js') }}"></script>
<script src="{{ asset('/js/nmenu.js') }}"></script>
  <script src="https://code.jquery.com/jquery-3.0.0.min.js"></script>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <title>Home</title>

</head>

<style type="text/css">
	body {	font-family: Helvetica Neue, Arial, sans;	margin-top: 0px;	background: #FAFAFA;		}
  .wrapper {margin: 0 auto; width: -10px;  }
	.drift-demo-trigger {	width: 100%;	float: left;height:300px;border-radius:5px;		}
	.detail {position: relative;width: 280%;height:300px;	margin-top:-285px;	margin-left: 102%;
					float: left;		top:-85px; 	}
		@media (max-width: 900px) {		.wrapper {		text-align: center;	width: auto;	}		}
  .mainImage img{ text-align:center;}
  .thumbnails{ width:100%; margin:0 auto;  }
  .thumbnails img{ width:45px; height:45px;  }
  .btnimg{ position: relative;top:-15px;border:none;width:5px;height:20px; font-size:20px;   }

  #menuk div {  position: relative;     }
  .arrow_box {  display: none;  position: absolute;  left:350px;   margin-top: -360px;  }
  #main{	position:relative; top:-45px; padding:1px 7px 1px 5px;	left:65px;font-size:13px;	}

  .xza1{ position: relative; overflow: hidden;   width:100%;			}
  .xza2{ position: relative;width:100%;	margin : 0 auto;				}
  .btnx1{ position: absolute; top:94%; left:100px; z-index:10;font-size:40px;border:none;   }
  .btnx2{ position: absolute; top:0%; left:100px; z-index:10; font-size:40px;border:none; }
  .za51{ position: relative; overflow:hidden;  width:100%;	align:center;		}
  .za52{ position: relative;width:100%;	margin : 0 auto;				}
  .btn51{ position: absolute; top:30%; right:5px; z-index:10;font-size:40px;border:none;color:#fdd700;   }
  .btn52{ position: absolute; top:30%; left:5px; z-index:10; font-size:40px;border:none;color:#fdd700; }

  .za41{ position: relative; overflow:hidden;  width:100%;	align:center;		}
  .za42{ position: relative;width:100%;	margin : 0 auto;				}
  .btn41{ position: absolute; top:30%; right:5px; z-index:10;font-size:40px;border:none;color:#fdd700;   }
  .btn42{ position: absolute; top:30%; left:5px; z-index:10; font-size:40px;border:none;color:#fdd700; }

  .za31{ position: relative; overflow:hidden;  width:100%;	text-align:center;		}
  .za32{ position: relative;width:100%;	margin : 0 auto;				}
  .btn31{ position: absolute; top:40%; right:5px; z-index:10;font-size:40px;border:none;color:#fdd700;   }
  .btn32{ position: absolute; top:40%; left:5px; z-index:10; font-size:40px;border:none;color:#fdd700; }

  .za21{ position: relative; overflow:hidden;  width:100%;}
  .za22{ position: relative;width:100%;	margin : 0 auto;  				}

  .btn21{ position: absolute; top:40%; right:5px; z-index:10;font-size:40px;border:none;color:#fdd700;   }
  .btn22{ position: absolute; top:40%; left:5px; z-index:10; font-size:40px;border:none;color:#fdd700; }

  .za11{ position: relative; overflow:hidden;  width:100%;	align:center;	}
  .za12{ position: relative;width:100%;	margin : 0 auto;		height:200px;			}
  .btn11{ position: absolute; top:25%; right:5px; z-index:10;font-size:40px;border:none;color:#fdd700;   }
  .btn12{ position: absolute; top:25%; left:5px; z-index:10; font-size:40px;border:none;color:#fdd700; }

  .xza1{ position: relative; overflow: hidden;   width:100%;			}
  .xza2{ position: relative;width:100%;	margin : 0 auto;				}
  .btnx1{ position: absolute; top:90%; left:140px; z-index:10;font-size:40px;border:none;   }
  .btnx2{ position: absolute; top:0%; left:140px; z-index:10; font-size:40px;border:none; }
.vline{  font-size:16px; border-left: 1px solid #fdd700; padding-left: 10px;height: 30px; }

.wt20{width:20px;} .wt50{width:50px;}.wt80{width:80px;} .wt160{width:160px;} .wt180{width:180px;}
.wt240{width:240px;}.wt300{width:300px;} .wt600{width:600px;}
.he18{height:18px;}
.he20{height:20px;} .he22{height:22px;} .he24{height:24px;} .he30{height:30px;}
.he40{height:40px;} .he60{height:60px;} .he80{height:80px;} .he100{height:100px;}
.he150{height:150px;} .he200{height:200px;} .he400{height:400px;}  .he420{height:420px;} .he600{height:600px;}
.he1500{height:1500px;}.he3000{height:3000px;}
.ft11{font-size:11px;} .ft12{font-size:12px;} .ft13{font-size:13px;}   .ft16{font-size:16px;}  .ft20{font-size:20px;} .ft24{font-size:24px;}
.btncss26{ font-size:20px;width:160px;height:50px;color:#ffffff;border-radius:3px;background-color:#483d86;margin-right:4px;border:none;      }
.btncss26:hover {  color:#ffffff;  background-color: #ff4500;    }
.btncss25{width:80px;height:24px;font-size:11px; color:#ffffff;border-radius:3px;background-color:#483d86;margin-right:4px;border:none;      }
.btncss25:hover {    background-color: #f5deb3;  color:#483d86;  }
.btncss24{width:80px;height:30px;font-size:11px;color:#fff;  border-radius:3px;background-color:#008000;margin-right:4px;border:none;      }
.btncss24:hover {    background-color: #66ff99; color:#333;  }
.btncss22{padding:2px 10px 2px 10px;font-size:11px;text-decoration:none; color:#ffffff;border-radius:3px;background-color:#483d86;margin-right:4px;border:none;      }
.btncss22:hover {    background-color: #006400;  color:#ffffff;  }
.imgcss19{width:50px;  height:50px;border-radius: 3px;  margin-left:5px;  }
.imgcss20{width:40px;  height:40px;border-radius: 3px;    }
.imgcss21{width:60%;  border-radius:5px; vertical-align:top;        }
.imgcss22{width:90%;  border-radius:5px; vertical-align:top;        }
.imgcss23{width:360px; height:360px; border-radius:5px; vertical-align:top;        }
.imgcss24{width:150px;  height:150px;border-radius:5px; vertical-align:top;margin:3px;        }
.imgcss25{width:100px;  height:100px;border-radius:5px; vertical-align:top; margin:5px;       }
.inputcss22{width:70%;border-radius:5px;color:#333;border:none;background-color:#fff; height:30px;     }
.inputcss21{width:99%;height:24px;border:none;font-size:11px;text-align:left;}
.inputcss10::placeholder {  color:#ffffff;      }
.inputcss10 {border-radius:3px;text-align:center;background-color:#777777; font-size:11px;
   width:90% ;height:24px;border:none; }
.acss51{ text-decoration:none;color:#483d86;font-size:20px;font-weight:900;font-family:arial black;}
.acss5{ text-decoration:none;color:#ffffff;font-size:20px;font-weight:900;font-family:arial black;}
.alink{text-decoration:none;}
.spancss21{ background-color:#cd853f;padding:2px 5px 2px 5px;vertical-align:top;border-radius:10px;       }
.spn1{ color:#fff;font-size:10px;border-radius:4px;background-color:#483d86;padding:0px 5px 0px 5px;    }
.lab2{   font-size:11px;width:240px;height:40px     }
.che1{ width:20px;height:20px;top:0px         }
.che2{top:40px;left:-5px;}

.amenu1{float:left;width:100%;height:20px;text-decoration:none;margin:1px;font-size:11px;border-radius: 3px;
        vertical-align:middle;color:#000000;padding-top:4px;     	}
.amenu2{float:left;width:100%;height:24px;text-decoration:none;margin:1px;font-size:11px;border-radius: 3px;
                vertical-align:middle;color:#000000;padding-top:1px;     	}
.spancss22{ border:none;padding:5px 10px 5px 10px;background-color:#483d86;color:#fff;font-size:11px;border-radius:3px;     }
.spancss23{ float:left;padding:5px 10px 5px 10px;margin:2px;font-size:11px;text-decoration:none; color:#ffffff;border-radius:3px;background-color:#757575;margin-right:4px;border:none;     }

.spancss20{position: relative;float:left;top:2px;padding:5px 0px 0px 0px; margin:5px;border-radius:2px;background-color:#999999;line-height:20px;}
.spancss25{ position: relative;float:left;width:20%;background-color:#cccccc;margin:3px;font-size:11px;
            padding:4px;border-radius:3px;             }
.divcss20{  height:20px;color:#000;  }
.padd1{  padding:0px 2px 0px 2px;"  }
.cak{ float: left; height:20px;}

.selectcss2{height:50px;}
</style>
<style>
#wreview {   height: 400px;   width: 98%px;   overflow-y: scroll;
   -ms-overflow-style: none;/* IE, Edge 対応 */
   scrollbar-width: none; /* Firefox 対応 */
 }
 #wreview::-webkit-scrollbar { display:none;   }/* Chrome, Safari 対応 */
</style>

 <script>
$(function () {	 $('.arrow_box').hide();
  $('.spank').hover(function() {    $(this).next('p').show();  }, function(){
    $(this).next('p').hide();  });
});
</script>

<body>

  @extends('layouts.add')
<?php
 $strid=''; $codeitem=''; $cou='';
if(isset($_GET['codeitem'])){	$codeitem=$_GET['codeitem'];		}

if(isset($cartc1)){ $cou=count($cartc1);
//  foreach($cartc1 as $mkk6){   foreach($mkk6 as $mkk7){ } }
}
?>
  <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->

  <table align="center" width="100%"bgcolor="#483d86"><tr>
  <td class="ft20"width="10%" style="font-family:arial black;color:#fff;"align="center" >
    <a href="{{ url('manager/home') }}" style="text-decoration:none;color:#fff;">
    meisis </a>
  </td > <td class="ft11"width="20%"align="center"style="color:#fff;">
  <?php
   $manakeyword='xhome_xhome2_product_xcart_'.$codeitem.'';
   if($loginname!=''){  echo ''.$loginname.'様ログイン中';     }
   ?>
   </td > <td width="60%"align="right">
     @if($loginname!='')
     @else
  <a href="{{ url('customs/signin') }}?manakeyword=<?PHP echo $manakeyword; ?>" >
    <button class="btncss25">ログイン</button></a>
    @endif
  <a href="{{ url('manager/cart') }}?codeitem=<?php echo $codeitem; ?>" >
    <button class="btncss25" >カート<span class="spancss21"id="cartck"></span>
      </button></a>
  <a href="{{ url('manager/home3') }}?codeitem=<?php echo $codeitem; ?>" >
    <button class="btncss25">戻る</button></br>
  </td></tr></table><hr class="hr">
  <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
    @error('token') <div class="alert alert-danger">{{ $message }}</div> @enderror
<!-- **************************login************************************** -->
 <table width="100%"class="he1000"bgcolor="#99ffff"border="0"cellspacing="0"><tr><td style="vertical-align:top;">

<?php
$stridd='';
$arrtt1=array();$arrtt2=array();$data5=array();$cnt2=0;
$arrpic=array();$arrpic2=array(); $arrpic5=array();$arrpic6=array();
//-------------------------------------------------------
if(isset($items31)){
foreach($items31 as $mkk){   foreach($mkk as $mkk2){
  $arrtt1[]=$mkk2;  $cnt2+=1;
if($cnt2==22){$data5[]=$arrtt1;  $arrtt1=array(); $cnt2=0;    }  } }
}
//----------------------------------------------------------------
for($k=0;$k<count($data5);$k++){

if($codeitem==$data5[$k][19]){ $stridd=$data5[$k][5];
$arrpic=explode('|',$data5[$k][11]);
$arrpic5=explode('|',$data5[$k][20]);
//echo $data5[$k][20];
foreach($arrpic as $pic2){    }
}}
//===============================================================
?>
<!-- ======================================================= -->
<table width="100%"  align="center"class="he3000" cellspacing="0"border="0">
  <tr><td width="30%"  style="vertical-align:top">
<table width="100%"  align="center"class="he400" bordercolor="#6c9"cellspacing="0"border="1">
  <tr><td width="30%" bgcolor="#6C9" style="vertical-align:top">
<table class="wt300"align="center" border="0"> <tr><td class="wt300" >
<div class="wrapper">
<div class="mainImage">	<img class="drift-demo-trigger" data-zoom="../storage/upload/<?php echo $stridd.'/'.$arrpic[0]; ?>" src="../storage/upload/<?php echo ''.$stridd.'/'.$arrpic[0]; ?>"></div>
</td></tr><tr><td >
<?php
$ctp=0;
echo ' <div align="center"class="thumbnails">';
foreach($arrpic as $picm){ $ctp +=1;
  if($ctp<6){
  echo '<img src="../storage/upload/'.$stridd.'/'.$picm.'" style="border-radius:3px;margin:2px;"alt="a1">';
}}
echo '</div>';
?>
</td></tr></table>
<table width="100%" border="0"bgcolor="#fdd700"cellspacing="0">
<tr align="right"class="he24"> <td width="30%" class="ft13">商品画像</td><td style="margin:0px;" width="70%" >
<div class="detail"><p class="he100"></p></div></div>
<tr><td colspan="2"style=" background-color:#6C9;vertical-align:top">
<?php
$ctt=0;
echo '<table  class="wt300" border="0" >';
echo '<div id="menuk">';
foreach($arrpic5 as $zmk){ $ctt +=1;
if($ctt%5==1){echo '<tr><td align="center" width="20%" style="vertical-align:top">';
}else{ echo '<td width="20%" align="center"style="vertical-align:top">';   }
echo '<div><span class="spank">';
echo '<img src="../storage/upload/'.$stridd.'/'.$zmk.'" class="imgcss19"style="border-radius:3px;margin:2px;"alt="a1"> </span>';
echo '<p class="arrow_box"><img src="../storage/upload/'.$stridd.'/'.$zmk.'" class="imgcss23" /></p>';
echo '</div>';
if($ctt%5==0){echo '</td></tr>';    }else{ echo '</td>';   }
$mk=5-count($arrpic)%5;
}
for($v=0;$v<$mk;$v++){ echo '<td width="20%"></td>';     }
echo '</tr></div>';
echo '</table>';
 ?>
</td></tr>
</table>

<!-- ++++++++++++++++++++   画像スペース　縦      +++++++++++++++++++++++++++++ -->
<?php
  //-------------------------------------------------------------------------------------

  $arrtt1=array(); $arrtt2=array(); $arrtt3=array(); $arrtt4=array(); $arrtt5=array();
  $arrtt1b=array(); $arrtt2b=array(); $arrtt3b=array(); $arrtt4b=array(); $arrtt5b=array();
  $arrtt1c=array(); $arrtt2c=array(); $arrtt3c=array(); $arrtt4c=array(); $arrtt5c=array();
  $arrtate9=array(); $arrtate9b=array(); $arrtate9c=array();

 //---------------------------------------------------------------------------------
$dpath="../storage/app/public/img_cm5";
$dpath2="../storage/img_cm5";
$dir = $dpath ;
if( is_dir( $dir ) && $handle = opendir( $dir ) ) {
    while( ($file2 = readdir($handle)) !== false ) {
      if( filetype( $path = $dir .'/'. $file2 ) == "file" ) {
      $arrtt1b[]=$file2;	$arrtt2b[]=$file2;	$arrtt3b[]=$file2;
      $arrtt4b[]=$file2;	$arrtt5b[]=$file2;
      $arrtate9b[]=$file2;
    }    }}
    ?>
<!-- :::::::::::::::::::::::  縦画像　4枚      ::::::::::::::::::::::::::::::::::::::: -->
<!-- +++++++++++++++++++++++++++++++++++++++++++++++++ -->
</td><td width="70%" style="vertical-align:top;">


<table width="100%" border="0"><tr>
<td width="70%" class="he100"style="vertical-align:top;">
<?php
$storeidi=''; $pricek='';$storename='';
  $sizem=array();  $colorm=array();  $arrsp1=array();  $picimg=array();
  for($k2=0;$k2<count($data5);$k2++){
    if($codeitem==$data5[$k2][19]){
//--------------------------------index------------------------
echo '<table width="100%" bgcolor="#a0522d" align="center" border="0">
<tr class="he24"><td class="ft11"style="color:#fff;">
▶ '.$data5[$k2][0].' ▶ '.$data5[$k2][1].' ▶ '.$data5[$k2][2].' </td></tr>';
echo '</table>';
$storeid=$data5[$k2][5];      $numitem=$data5[$k2][7];
//--------------------------ajax---------------------------------------------
echo '<input type="hidden" name="storeid" value="'.$data5[$k2][5].'" >';//Storeid
echo '<input type="hidden" name="storename" value="'.$data5[$k2][6].'" >';//店舗名
echo '<input type="hidden" name="item" value="'.$data5[$k2][2].'" >';//商品分類
echo '<input type="hidden" name="product" value="'.$data5[$k2][3].'" >';//商品名
echo '<input type="hidden" name="numitem" value="'.$data5[$k2][7].'" >';//型番
echo '<input type="hidden" name="price" value="'.$data5[$k2][9].'" >';//単価
echo '<input type="hidden" name="stock" value="'.$data5[$k2][14].'" >';//数量
echo '<input type="hidden" name="weight" value="'.$data5[$k2][17].'" >';//単価
echo '<input type="hidden" name="jancode" value="'.$data5[$k2][18].'" >';//
echo '<input type="hidden" name="codeitem" value="'.$data5[$k2][19].'" >';//
$pricek=$data5[$k2][9];  $storeidi=$data5[$k2][5]; $storename=$data5[$k2][6];
$numitem=$data5[$k2][7];  $arrsp1=$data5[$k2][12];   $picimg=$data5[$k2][11];
$colorm=$data5[$k2][16];  if(isset($colorm)){ $colorm=explode('|',$colorm); }
$sizem=$data5[$k2][15];   if(isset($sizem)){  $sizem=explode('|',$sizem);   }
//--------------------------------product1---------------------------------------------------
echo '<div style="line-height:8px;">&nbsp;</div>
<table align="center" width="98%" cellspacing="0" border="0" bordercolor="#9cc" class="ft11">';
echo '<tr><td class="he24"width="15%"><strong class="ft13">商品名 :</strong></td>
<td width="35%"><strong class="ft20">'.$data5[$k2][3].'</strong>
</td><td rowspan="9" width="50%"class="vline"style="vertical-align:top">';
$zmk1=mb_substr($data5[$k2][8], 0, 10); $zmk2=mb_substr($data5[$k2][8], 10,200);
echo '<div class="ft20"align="center"><strong>'.$zmk1.'</strong></div>';
echo '<div style="line-height:5px;">&nbsp;</div><div class="ft13"><strong>'.$zmk2.'</strong></div>';
echo '</td></tr>';
echo '<tr><td class="he24"width="15%"><strong class="ft13">型番 :</strong></td>
<td width="40%"><strong class="ft13">'.$data5[$k2][7].'</strong></td></tr>';
echo '<tr><td class="he24"width="15%"><strong class="ft13">単価 :</strong></td>
<td width="40%"><strong class="ft13">'.$data5[$k2][9].' 円</strong></td></tr>';
echo '<tr><td class="he24"width="15%"><strong class="ft13">ブランド :</strong></td>
<td width="40%"><strong class="ft13">'.$data5[$k2][21].'</strong></td></tr>';
echo '<tr><td class="he24"width="15%"><strong class="ft13">在庫 :</strong></td>
<td width="40%"><strong class="ft13">'.$data5[$k2][14].'</strong></td></tr>';
echo '<tr><td class="he24"width="15%"><strong class="ft13">重量 :</strong></td>
<td width="40%"><strong class="ft13">'.$data5[$k2][17].'</strong></td></tr>';
echo '<tr><td class="he30"width="15%"><strong class="ft13">Janコード :</strong></td>
<td width="40%"><strong class="ft13">'.$data5[$k2][18].'</strong></td></tr>';
echo '<tr><td class="he24"width="15%"><strong class="ft13">色種類 :</strong></td>
<td width="40%"><strong class="ft13">';
if(isset($colorm)){  foreach($colorm as $col2){    echo ''.$col2.', ';     }}
echo '</strong></td></tr>';
echo '<tr><td class="he30"width="15%"><strong class="ft13">サイズ :</strong></td>
<td width="40%"><strong class="ft13">';
if(isset($sizem)){foreach($sizem as $zem2){echo ''.$zem2.', ';     }}
echo '</strong></td></tr>';
echo '</table><div style="line-height:5px;">&nbsp;</div>';
}}
//-----------------------------------------------------------------
echo '<table width="100%"align="center"bgcolor="#fdd700"border="0"style="">
<tr align="center"class="he30"><td ></td></tr> </table></br>';
//------------------------------------------------------------------------------
echo '<table align="center"width="96%" border="0"cellspacing="0"bordercolor="#9cc"class="ft11">';
echo '<tr><td align="center" width="50%">';
//------------------------------
echo '<table align="center"width="100%" border="0"cellspacing="0"bordercolor="#9cc"class="ft11">';
echo '<tr class="he40"><td align="center"colspan="2"class="ft16"><strong>注文選択</strong></td></tr>';
echo '<tr ><td width="30%"class="he24"><strong>注文数量 :</strong></td><td width="70%">';
echo '<select id="quantity"name="quantity" class="selectcss1"style="width:100%;">';
  for($m1=1;$m1<11;$m1++){
    echo '<option class="he24"value="'.$m1.'" style="width:50%">'.$m1.'点</option>';     }
echo '<option class="he24"value="20" style="width:50%">20点</option>';
echo '</select></td></tr>';
echo '<tr><td width="15%"><strong>注文色 :</strong></td><td >';
echo '<select id="color"name="color" class="selectcss1"style="width:100%;">';
if(isset($colorm)){   foreach($colorm as $col){
echo '<option class="he24"style="font-size:11px;"value="'.$col.'" style="width:50%">'.$col.'</option>';     }}
echo '</select></td></tr>';
echo '<tr><td><strong>サイズ:</strong></td><td >';
echo '<select id="size" name="sizer" class="selectcss1" style="width:100%;">';
if(isset($sizem)){  foreach($sizem as $zem){
echo '<option class="he24"value="'.$zem.'">'.$zem.'</option>';     }}
echo '</select></td></table></br>';
echo '</td><td>';
echo '<table align="center"border="0"><tr align="center"><td class="wt160">
  <button type="submit"class="btncss26"id="btn-submit">
  カートに入れる</button></td></tr>
  </table>';
echo '</td></tr></table>';
//-------------------------------------------------------------------------------

?>
  <span class="ft11">&nbsp;&nbsp;店舗名：<a href="{{ url('manastore/storeproduct') }}?storeid2=<?php echo $storeidi;?>&codeitem=<?php echo $codeitem;?>" class="alink">
  <?php echo $storename; ?></a></span>

</td><td width="30%" align="center"bgcolor="#6c9"style="vertical-align:top;">

  <table align="center"width="100%"class="he60"border="0"style="">
  <tr align="center"><td class="ft13"width="30%">
    単価：</td><td>   <strong class="ft24"><?php echo $pricek; ?>円</strong></td></tr>
  </table>
  <table align="center"width="100%" border="0"style="">
  <tr align=""><td class="ft11"style="background-color:#2f4f4f;color:#fff">
    運送について</td></tr>
    <tr align=""><td class="he100"class="ft11"style="background-color:#99ffff;">
                </td></tr>
  </table>

  <table align="center"width="100%" border="0"style="">
  <tr align=""><td class="ft11"style="background-color:#2f4f4f;color:#fff">
    支払について</td></tr>
    <tr><td class="he100"class="ft11"style="background-color:#99ffff;">
    </td></tr>
  </table></br>

  <table align="center"width="100%" border="0">
  <tr><td > <div id="message"></div></td></tr>
  </table></br>
  <div id="favok"></div>
  <button id="<?php echo $codeitem.'_'.$storeidi; ?>"onclick="funfavo(this);"class="btncss25">
  お気に入り</button>

<hr>
  <a href="{{ url('manager/cart') }}?codeitem=<?php echo $codeitem; ?>" >
<button class="btncss26">購入へ進む</button></a></br></br>


</td></tr></table>
</td></tr></table>
<!-- +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
<?php
//-----------------------------------555-----------------------------
 $countk5=count($arrtt5b);	$ck52=count($arrtt5b); $cnt5=0;

$kt5=5;     //設定：画像枚数。（最低１枚）
if($kt5==0){  echo '只今画像枚数の設定値は０ですが、1以上に訂正して下さい。';	$kt5=1;		}
$hk5=960/$kt5;   //設定：画像高さ。）
$spli5=$countk5-$countk5%$kt5;
array_splice($arrtt5b, $spli5);
$duty5=95/$kt5;
foreach($arrtt5b as $tt5b){ $cnt5 +=1; $arrtt5c[]=$tt5b;  if($cnt5==$kt5){  $arrtt5[]=$arrtt5c; $arrtt5c=array(); $cnt5=0;	} }
$ck5=count($arrtt5);

//-----------------------------------444------------------------------------------
   $countk4=count($arrtt4b);	$ck42=count($arrtt4b); $cnt4=0;
 $kt4=5;     //設定：画像枚数。（最低１枚）
 if($kt4==0){    echo '只今画像枚数の設定値は０ですが、1以上に訂正して下さい。';$kt4=1;	}
 $hk4=960/$kt4;   //設定：画像高さ。）
 $spli4=$countk4-$countk4%$kt4;
 array_splice($arrtt4b, $spli4);
 $duty4=95/$kt4;
 foreach($arrtt4b as $tt4b){ $cnt4 +=1; $arrtt4c[]=$tt4b;  if($cnt4==$kt4){  $arrtt4[]=$arrtt4c; $arrtt4c=array(); $cnt4=0;	} }
 $ck4=count($arrtt4);
//-----------------------------------333-------------------------------
$countk3=count($arrtt3b);	$ck32=count($arrtt3b); $cnt3=0;
$kt3=5;     //設定：画像枚数。（最低１枚）
 if($kt3==0){  echo '只今画像枚数の設定値は０ですが、1以上に訂正して下さい。';	$kt3=1;	}
 $hk3=960/$kt3;   //設定：画像高さ。）
 $spli3=$countk3-$countk3%$kt3;
 array_splice($arrtt3b, $spli3);
 $duty3=95/$kt3;
 foreach($arrtt3b as $tt3b){ $cnt3 +=1; $arrtt3c[]=$tt3b;  if($cnt3==$kt3){  $arrtt3[]=$arrtt3c; $arrtt3c=array(); $cnt3=0;	} }
 $ck3=count($arrtt3);
//-----------------------------------222---------------------------------
   $countk2=count($arrtt2b);	$ck22=count($arrtt2b); $cnt2=0;
 $kt2=5;     //設定：画像枚数。（最低１枚）
 if($kt2==0){  echo '只今画像枚数の設定値は０ですが、1以上に訂正して下さい。';	$kt2=1;		}
 $hk2=960/$kt2;   //設定：画像高さ。）
 $spli2=$countk2-$countk2%$kt2;
 array_splice($arrtt2b, $spli2);
 $duty2=95/$kt2;
 foreach($arrtt2b as $tt2b){ $cnt2 +=1; $arrtt2c[]=$tt2b;  if($cnt2==$kt2){  $arrtt2[]=$arrtt2c; $arrtt2c=array(); $cnt2=0;	} }
 $ck2=count($arrtt2);
//----------------------------------111---------------------------
   $countk1=count($arrtt1b);	$ck12=count($arrtt1b); $cnt1=0;
 $kt1=1;     //設定：画像枚数。（最低１枚）
 if($kt1==0){  echo '只今画像枚数の設定値は０ですが、1以上に訂正して下さい。';	$kt4=1;		}
  $hk1=900/$kt1;   //設定：画像高さ。）
 $spli1=$countk1-$countk1%$kt1;
 array_splice($arrtt1b, $spli1);
 $duty1=100/$kt1;
 foreach($arrtt1b as $tt1b){ $cnt1 +=1; $arrtt1c[]=$tt1b;  if($cnt1==$kt1){  $arrtt1[]=$arrtt1c; $arrtt1c=array(); $cnt1=0;	} }
 $ck1=count($arrtt1);
?>


<!-- <table align="center"width="96%" border="0"> <tr><td width="80%"style="vertical-align:top"> -->
<?php
//-------------------------------------spec-----------------------------------

if(isset($arrsp1)){
  echo '<p class="ft11"align="center"><strong>スペック</strong></p>';
  echo '<table align="center"width="96%" border="1"cellspacing="0"bordercolor="#9cc"class="ft11">';
  echo '<tr align="center"bgcolor="d2b48c"><td width="30%"><strong>項目</strong></td><td><strong>仕様</strong></td></tr>';



$arrsp1=explode('_',$arrsp1);
foreach($arrsp1 as $spec1){
$arrsp2=explode('|',$spec1);
echo '<tr align="center"><td >'.$arrsp2[0].'</td><td>'.$arrsp2[1].'</td></tr>';
}}
if(isset($picimg)){
$picimg=explode('|',$picimg);
echo '<input type="hidden" name="picimg" value="'.$picimg[0].'" >';//画像

echo '</table>';
}
//---------------------------------------------------

?>
<!-- </td><td width="20%" align="center" class="ft11"style="vertical-align:top">
    <table align="center"width="96%" border="0">
      <tr><td class="he40"align="center"><strong>データシート<strong> </td></tr>
  <tr><td class="he60"></td></tr>

      </table>
</td></tr></table> -->
</br>
<!-- +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
<table align="center"width="98%" border="0"height="30"> <tr>
<td style="font-size:13px;vertical-align:top"><strong>おすすめ商品</strong> </td></tr></table>

<table align="center"width="100%" ><tr><td align="center">
<div class="za42"><div class="za41">
<span id="boxzz42"class="btn42"><img src="{{ asset('images/btnleft.jpg') }}" style="border-radius:25px;width:30px;height:30px;"></span>
<span id="boxzz4" class="btn41"><img src="{{ asset('images/btnright.jpg') }}" style="border-radius:25px;width:30px;height:30px;"></span>
<?php
//echo ' <div class="za42"><div class="za41"><span id="boxzz42"class="btn42">◀</span><span id="boxzz4" class="btn41">▶</span>';
//-------------------------
if($kt4>1){
for($v4=0;$v4<count($arrtt4);$v4++){
echo '<span class="box4'.$v4.'" style="width:100%">';
for($a4=0;  $a4<$kt4;  $a4++){    if($a4==0){$mz4=0; }else{$mz4=10;}
echo '<img src="'.$dpath2.'/'.$arrtt4[$v4][$a4].'"style="border-radius:5px;margin-left:'.$mz4.'px;width:'.$duty4.'%;height:'.$hk4.'px">';	}
echo '</span>';
}}else{
for($v41=0;$v41<count($arrtt4b);$v41++){
echo '<img src="'.$dpath2.'/'.$arrtt4b[$v41].'" class="box4'.$v41.'"	style="width:100%;height:300px" >';  }
}
echo '</div></div>';
?>
</div></div></td></tr></table>
<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
<!-- <table align="center"width="98%" bgcolor="#cccccc"border="0"height="100"> <tr>
<td style="font-size:13px;vertical-align:top"><strong>カスタマーQ&A</strong> </td></tr></table> -->

<!-- <hr><table align="center"width="100%" height="30"border="0"> <tr>
<td style="font-size:13px;vertical-align:top"width="40%"align="center">
<button id="butreview3" style="border-radius:3px;background-color:#483d86;color:#fff;">333カスタマーレビューを書く</button>
</td><td align="center"style="font-size:13px;">
<strong>カスタマーレビュー3333</strong>
  </td></tr></table> -->


<!-- <div id="pareview3" style="line-height:10px;">
aaaaaaaaaaaaaaaaaaaaaaaaaaaaa
</div> -->




<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
<table align="center"width="98%" height="30"> <tr>
<td style="font-size:13px;vertical-align:top"><strong>人気ブランド</strong> </td></tr></table>
<table align="center"width="100%" ><tr><td align="center">
<div class="za52"><div class="za51">
<span id="boxzz52"class="btn52"><img src="{{ asset('images/btnleft.jpg') }}" style="border-radius:25px;width:30px;height:30px;"></span>
<span id="boxzz5" class="btn51"><img src="{{ asset('images/btnright.jpg') }}" style="border-radius:25px;width:30px;height:30px;"></span>
<?php
//echo '<div class="za52"><div class="za51"><span id="boxzz52"class="btn52">◀</span><span id="boxzz5" class="btn51">▶</span>';
//---------------------------------------------------------------------------------------------------------
if($kt5>1){
for($v5=0;$v5<count($arrtt5);$v5++){
echo '<span class="box5'.$v5.'" style="width:100%">';
for($a5=0;  $a5<$kt5;  $a5++){if($a5==0){$mz5=0; }else{$mz5=10;}
echo '<img src="'.$dpath2.'/'.$arrtt5[$v5][$a5].'"style="border-radius:5px;margin-left:'.$mz5.'px;width:'.$duty5.'%;height:'.$hk5.'px">';	}

echo '</span>';
}}else{
for($v51=0;$v51<count($arrtt5b);$v51++){
echo '<img src="'.$dpath2.'/'.$arrtt5b[$v51].'" class="box5'.$v51.'"	style="width:100%;height:300px" >';  }
}
echo '';
?>
</div></div></td></tr></table>
<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->



<!-- ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
<hr><table align="center"width="100%" height="30"border="0"> <tr>
<td style="font-size:13px;vertical-align:top"width="40%"align="center">
<button id="butreview1" style="border-radius:3px;background-color:#483d86;color:#fff;">カスタマーレビューを書く</button>
</td><td align="center"style="font-size:13px;">
<strong>カスタマーレビュー</strong>
  </td></tr></table>

<table align="center"width="100%"border="0" > <tr>
<td style="font-size:13px;vertical-align:top"width="40%"align="center">
<!-- ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^ -->

  <div id="pareview1" style="line-height:10px;">
<table align="center"width="100%" bgcolor="#afeeee"style="border:1px solid#6c9;"class="ft11">
<tr align="center"><td colspan="2"style="line-height:10px;">&nbsp;</td></tr>
<input type="hidden"name="storeid"id="storeid"value="<?php echo $storeid;?>">
<input type="hidden"name="numitem" id="numitem"value="<?php echo $numitem;?>">
<tr align="center"><td width="20%">タイトル</td><td width="80%"class="he30"></br>
   <input type="text"name="text11"id="text11"value=""style="border:1px solid#6c9;width:90%;height:24px;">
</td></tr>
<tr align="center"><td width="20%">評価</td><td width="80%"class="he30"></br>
   <select name="evaluation" id="evaluation"style="font-size:11px;background-color:#9aa;width:92%;height:30px;">
  <option value="0"style="border:1px solid#999;background-color:#9ff;width:92%;height:30px;">評価選択</option>
   <option value="1"style="background-color:#6c9;width:92%;">★</option>
　 <option value="2"style="background-color:#9aa;width:92%;">★★</option>
   <option value="3"style="background-color:#3cb371;width:92%;">★★★</option>
   <option value="4"class="ft11"style="background-color:#c0c0c0;width:92%;">★★★★</option>
   <option value="5"class="ft11"style="background-color:#fdd700;width:92%;">★★★★★</option>
   </select>
</td></tr>
<tr align="center"><td width="20%" >投稿内容</td><td width="80%">
   <textarea name="review"id="review11"value="zxzxzxzxzx"style="color:#000;border:1px solid#6c9;width:90%;height:80px;"></textarea>
   </td>  </tr>
<tr align="center"class="he40"><td width="20%">画像（任意）</td><td width="80%">
   <table width="100%"align="center"border="0"cellspacing="0">
   <tr><td  align="center"><div><label for="images" class="lab2">
   <input type="file" id="images" name="images[]" onchange="$('#fake_text_box1').val($(this).val())" style="display:none" multiple></span></label><div>
   <label for="images" style="width:90%; vertical-align:central">
   <input type="text" id="fake_text_box1"readonly onClick="$('#images').click();"placeholder="押して画像選択"class="inputcss10" ></label></div></div>
   </td></tr></table>
</td></tr>
 <tr align="center"><td colspan="2"style="line-height:10px;">&nbsp;</td></tr>
 <tr align="center"class="he30"><td style="line-height:15px;"<td colspan="2">
      <button type="submit" id="btreview" class="btncss25">画像登録</button></td></tr>
 <tr align="center"><td colspan="2"style="line-height:10px;">&nbsp;</td></tr>
 </table>
  </div>
<!-- ^^^^^^^^^^^^^^^^^^総合評価^^^^^^^^^^^^^^^^^^^^^^^^^ -->
<table width="100%"align="center"border="0"><tr align="center"><td colspan="2"id="diseva"></td> </tr></table>
<!-- ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^ -->
</td><td style="font-size:13px;vertical-align:top">


<div id="wreview">
<table width="100%"align="center"border="0">
<tr><td colspan="2"><span align="center"id="display"></span></td> </tr>
</div>
</table>


</td></tr></table>


<script>
var loginname='<?php echo $loginname; ?>';
//------------------------------------------------

$(function(){   });
  var pbool=false; var arrbb=[];  arrbb[1]=pbool;   $("#pareview1").hide();
  $("#butreview1").on("click", function() {
  if(loginname!=''){
	if(arrbb[1]===false){	$("#pareview1").show();	pbool=true;
	}else{	$("#pareview1").hide();	pbool=false;	}
  arrbb[1]=pbool;
  }else{     window.location.href = "{{URL::to('customs/signin')}}?manakeyword=<?PHP echo $manakeyword; ?>";   }
});
  //-----------------------------------------------------------
  var pbool3=false; var arrbb3=[];  arrbb3[1]=pbool3;   $("#pareview3").hide();
 $("#butreview3").on("click", function() {
 if(loginname!=''){
	if(arrbb3[1]===false){	$("#pareview3").show();	pbool3=true;}else{	$("#pareview3").hide();	pbool3=false;	}
  arrbb3[1]=pbool3;
  }else{   window.location.href = "{{URL::to('customs/signin')}}?manakeyword=<?PHP echo $manakeyword; ?>";      }
 });

</script>

<!-- ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
<hr>
<table align="center"width="98%" height="30"> <tr>
<td style="font-size:13px;vertical-align:top"><strong>最近閲覧商品</strong> </td></tr></table>

<table align="center"width="100%" ><tr><td align="center">
<div class="za22"><div class="za21">
<span id="boxzz22"class="btn22"><img src="{{ asset('images/btnleft.jpg') }}" style="border-radius:25px;width:30px;height:30px;"></span>
<span id="boxzz2" class="btn21"><img src="{{ asset('images/btnright.jpg') }}" style="border-radius:25px;width:30px;height:30px;"></span>
<?php
echo '';  //--------------------------------------------------------
if($kt2>1){
for($v2=0;$v2<count($arrtt2);$v2++){
echo '<span class="box2'.$v2.'" style="width:100%;">';
echo '<table border="0"width="100%"><tr>';
for($a2=0;  $a2<$kt2;  $a2++){
echo '<td align="center">zz'.$arrtt2[$v2][$a2].'</br><img src="'.$dpath2.'/'.$arrtt2[$v2][$a2].'"style="border-radius:5px;width:95%;;height:'.$hk2.'px"></td>';
}
echo '</tr></table></span>';
}}else{
for($v21=0;$v21<count($arrtt2b);$v21++){
echo '<img src="'.$dpath2.'/'.$arrtt2b[$v21].'" class="box2'.$v21.'"	style="width:100%;height:300px" >';  }
}
echo '';

?>
</div></div></td></tr></table>

<table align="center"width="98%" border="0" height="30"> <tr>
<td style="font-size:13px;vertical-align:top"><strong>人気商品ランキング</strong> </td></tr></table>
<table align="center"width="100%" border="0"><tr><td align="center">
<div class="za32"><div class="za31">
<span id="boxzz32"class="btn32"><img src="{{ asset('images/btnleft.jpg') }}" style="border-radius:25px;width:30px;height:30px;"></span>
<span id="boxzz3" class="btn31"><img src="{{ asset('images/btnright.jpg') }}" style="border-radius:25px;width:30px;height:30px;"></span>

<?php
//echo '<div class="za32"><div class="za31"><span id="boxzz32"class="btn32">◀</span><span id="boxzz3" class="btn31">▶</span>';  //--------------------------------------------------------
if($kt3>1){
for($v3=0;$v3<count($arrtt3);$v3++){
echo '<span class="box3'.$v3.'" style="width:100%">';
for($a3=0;  $a3<$kt3;  $a3++){  if($a3==0){$mz3=0; }else{$mz3=10;}
echo '<img src="'.$dpath2.'/'.$arrtt3[$v3][$a3].'"style="border-radius:5px;margin-left:'.$mz3.'px;width:'.$duty3.'%;height:'.$hk3.'px">';	}
echo '</span>';
}}else{
for($v31=0;$v31<count($arrtt3b);$v31++){
echo '<img src="'.$dpath2.'/'.$arrtt3b[$v31].'" class="box3'.$v31.'"	style="width:100%;height:300px" >';  }
}
echo '';
?>
</div></div></td></tr></table>



</td></tr></table>
</td></tr></table>










</td></tr></table>

</body>
</html>



	<script src="{{ asset('/js/Drift.js') }}"></script>

<script>


var triggerEl = document.querySelector("img");
var drift = new Drift(triggerEl, {  paneContainer: document.querySelector("p") });

//--------------------------------------------------------------
   $(function(){
 $('.thumbnails img').click(function(){
  var $thisImg = $(this).attr('src');
  var $thisAlt = $(this).attr('alt');
  $('.mainImage img').attr({src:$thisImg,alt:$thisAlt});
   triggerEl.setAttribute("data-zoom", $thisImg );

 });
});
   //-----------------------------------------------------------------------
		new Drift(document.querySelector('.drift-demo-trigger'), {
			paneContainer: document.querySelector('.detail'),
			inlinePane: 800,
			inlineOffsetY: -85,
			containInline: true,
			hoverBoundingBox: true
		});

//----------button--------------------------------
//$("#buttle").click(function(){ alert(1); 	});
//$("#buttri").click(function(){ 	alert(2);		});



	</script>



  </html>
  <script type="text/javascript">
  var textData = '';  textreview ='';  var TotalImages= '';  var images= '';
  var formData= new FormData();     var ikey=0;
  //---------------------------------------------------------------------
  var vname1='';var vname2='';var vname3='';var vname4='';var vname5='';
  var vname6='';var vname7='';var vname8='';var vname9='';var vname10='';
  var vname11='';var vname12='';var vname13='';var vname15='';var vname16='';
  var ifavo=''; var evaluation=''; var storeid=''; var numitem='';
  //---------------------------------------------------------------------------
  var custcode='<?php echo $custcode; ?>';
  numitem='<?php echo $numitem; ?>';
  $(function(){  var cou='<?php echo $cou;?>';   $('#cartck').html(cou);   });
//--------------------------------------------------
   function funfavo(elek){  ifavo=elek.id;   vname15=ifavo;  read();   }
//-------------------------------------------------------------------------
//--------------------------------------------------------------------------------------------
    $("#btn-submit").click(function(e){          e.preventDefault();
      vname1 = $("input[name=storeid]").val();
      vname2 = $("input[name=storename]").val();
      vname3 = $("input[name=item]").val();
      vname4 = $("input[name=product]").val();
      vname5 = $("input[name=numitem]").val();
      vname6 = $("input[name=price]").val();
      vname7 = $("#quantity").val();
      vname8 = $("input[name=weight]").val();
      vname9 = $("input[name=jancode]").val();
      vname10 = $("input[name=picimg]").val();
      vname11 = $("#color").val();
      vname12 = $("#size").val();
      vname13 = $("input[name=stock]").val();
      vname15='';

      read();
        });
//------------------------------------------------------
  var idkk=''; var evalutecode='';
 function funcdele(ele){  ikey=188;
  evalutecode=ele.id;
   read();
 }
  //-----------------------------------------------------------------------
  $(function(){  read();     });
  //---------------------------------------------------------------------------
  $("#btreview").on('click', function(event){ ikey=88;
    textData = $("#text11").val();
    textreview = $("#review11").val();
    storeid = $("#storeid").val();
    numitem = $("#numitem").val();
    evaluation = $("#evaluation").val();
    TotalImages= $('#images')[0].files.length;
    images= $('#images')[0];
    read();
  });
  //-------------------------------------------------------------------------------




  //-------------------------------------------------------------------------------------
  $.ajaxSetup({  headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')  }    });
  //--------------------------------------------------------------------------------------
  function read(){
    vname16 = $("input[name=codeitem]").val();
  //----------------------------------------------------------
    for (var i= 0; i < TotalImages; i++) { formData.append('images' + i, images.files[i]);   }
    formData.append('TotalImages', TotalImages);
    formData.append( "text", textData );
    formData.append( "review", textreview );
    formData.append( "zname1", vname1 );
    formData.append( "zname2", vname2 );
    formData.append( "zname3", vname3 );
    formData.append( "zname4", vname4 );
    formData.append( "zname5", vname5 );
    formData.append( "zname6", vname6 );
    formData.append( "zname7", vname7 );
    formData.append( "zname8", vname8 );
    formData.append( "zname9", vname9 );
    formData.append( "zname10", vname10 );
    formData.append( "zname11", vname11 );
    formData.append( "zname12", vname12 );
    formData.append( "zname13", vname13 );
    formData.append( "zname15", vname15 );
    formData.append( "zname16", vname16 );
    formData.append( "ikey", ikey );
    formData.append( "storeid", storeid );
    formData.append( "numitem", numitem );
    formData.append( "evaluation", evaluation );
    formData.append( "evalutecode", evalutecode);
    // alert(storeid+numitem+evaluation+textData+ textreview    );
    //------------------------------------------------------------------------------
     $.ajax({
              url: "{{ route('/manager/productajax') }}",
              method: 'post',
              enctype: 'multipart/form-data',
              cache: false,
              data: formData,
              contentType: false,
              processData: false,
              dataType: 'JSON',
              async: true,
              success: function(data){

                var tmk1='';  var tmk2=''; var ckk=0;

                var cartck=data['xname17'];

                for(var t=0;t<cartck.length;t++){
                  if(cartck[t]['status']=='cart'){ ckk +=1;
                 }}

         //-------------------------------------------------------------------------
         if(data['xname15']==null){}else{
           $('#favok').html('<span class="ft11">お気に入りに登録しました。</span>'+ckk);
         }
         if(data['xname5']==null){}else{
        $('#message').html('<table width="100%"bgcolor="#cccccc"border="0">'
        +'<tr><td class="ft11"><strong>カートにいれました。</strong></br>'
        +'商品名:'+data['xname4']+'</br>' +'型番:'+data['xname5']+'</br>' +'単価:'+data['xname6']+'</br>'
        +'数量:'+data['xname7']+'</br>'+'金額:'+data['xname7']*data['xname6']+'</td></tr></table>'
          );
       }
       //-----------------------------------------------
       $('#cartck').html(ckk);
var reviewdb=data['reviewdb']; var mainre='';var mainrd='';var numk; var imbdp1=''; var imbdp2='';var imbdpb='';
var arrst=[ '','★','★★','★★★','★★★★','★★★★★']; var arrev=[0,0,0,0,0,0];
var arrimg=[]; var btndele='';
for(var t=reviewdb.length-1; t>=0;t--){arrimg='';
  for(var j=1;j<6;j++){     if(reviewdb[t]['evaluation']==j){var mv=arrev[j]; mv +=1;  arrev[j]=mv;       }}
//----------------------------------------------------
var dt = Number(reviewdb[t]['datet']);
var dt = new Date();
var datex = `${dt.getFullYear()}-${dt.getMonth()+1}-${dt.getDate()}
 ${dt.getHours()}:${dt.getMinutes()}:${dt.getSeconds()}`.replace(/\n|\r/g, '');
 //-------------------------------------------------------------------------------------
if(custcode==reviewdb[t]['loginid']){
 btndele='<button id="'+reviewdb[t]['evalutecode']+'"onclick="funcdele(this);" class="btncss22">削除</button>';
}
 //----------------------------------------------
 imbdp2=reviewdb[t]['picreview'];  arrimg=imbdp2.split('|');

  if(imbdp2!=''){imbdp1='';
      if(arrimg.length>0){
          for(var j2=0;j2<arrimg.length;j2++){
          imbdp1b='<span class="">'+'<img src="../storage/img_review/'+arrimg[j2]+'" class="imgcss25"></span>';
          imbdp1=imbdp1+imbdp1b;
   }  }}

//*********************************************
if(reviewdb[t]['numitem']==numitem){
  if(reviewdb[t]['storeid']!=''){
mainrd='<table class="ft11"border="0"width="100%">'
+'<tr><td width="70%"style="vertical-align:top"colspan="2">'
+'<hr style="width:100%;margin-top: 0.1em; margin-bottom: 0.3em;">'
+'</td></tr>'
+'<tr><td width="70%"style="vertical-align:top">'
+'<span style="float:left"><strong>'+reviewdb[t]['name']+'</strong></span>'
+'<span style="float:right">'+datex.toString()+'</span>'
+'<hr style="width:100%;border:none;margin-top: 0.1em; margin-bottom: 0.3em;">'
+'<span style=""><strong>'+reviewdb[t]['title']+'</strong></span>'
+'<hr style="width:100%;border:none;margin-top: 0.1em; margin-bottom: 0.3em;">'
+'<span style="float:left">評価：'+arrst[reviewdb[t]['evaluation']]+'</span>'
+'<span style="float:right">'+btndele+'</span>'

+'<hr style="width:100%;border:none;margin-top: 0.1em; margin-bottom: 0.3em;">'
+'<p align="left">'+reviewdb[t]['review']+'</p>'
+'<div align="left">'+imbdp1+'</div>'
+'</td></tr></table>';
mainre=mainre+mainrd+'</br>';
}}}
$('#display').html(mainre);
//------------------------------------------------------------------
var sumk = arrev.reduce(function(a,b){  return a + b;});
var sumt=(arrev[5]*5+arrev[4]*4+arrev[3]*3+arrev[2]*2+arrev[1]*1)/sumk;
$('#diseva').html('<table width="80%" border="0">'
+'<tr bgcolor="#6699ff"class="he40"><td class="ft16" align="center"><strong>総合評価</strong></td><td class="ft16"colspan="2"align="center"><strong>'+sumt.toFixed(2)+'</strong></td></tr>'
+'<tr bgcolor="#6699ff"class="he30"><td width="33%" align="center">★★★★★</td><td width="33%" align="center">'+arrev[5]+'人</td><td width="33%" align="center">'+(arrev[5]*100/sumk).toFixed(1)+'%</td></tr>'
+'<tr bgcolor="#6699ff"class="he30"><td align="center">★★★★</td><td align="center">'+arrev[4]+'人</td><td width="25%" align="center">'+(arrev[4]*100/sumk).toFixed(1)+'%</td></tr>'
+'<tr bgcolor="#6699ff"class="he30"><td align="center">★★★</td><td align="center">'+arrev[3]+'人</td><td width="25%" align="center">'+(arrev[3]*100/sumk).toFixed(1)+'%</td></tr>'
+'<tr bgcolor="#6699ff"class="he30"><td align="center">★★</td><td align="center">'+arrev[2]+'人</td><td width="25%" align="center">'+(arrev[2]*100/sumk).toFixed(1)+'%</td></tr>'
+'<tr bgcolor="#6699ff"class="he30"><td align="center">★</td><td align="center">'+arrev[1]+'人</td><td width="25%" align="center">'+(arrev[1]*100/sumk).toFixed(1)+'%</td></tr>'
+'</table>');

//------------------------------------
//$('#display').append(data.ikey);
//-----------------------------------------

if(data.ikey==88){
  var textForm = document.getElementById("images");
  var textFormb = document.getElementById("fake_text_box1");
  var text11 = document.getElementById("text11");
  var review11 = document.getElementById("review11");
  var textevaluation = document.getElementById("evaluation");
textForm.value = '';    textFormb.value = '';text11.value = '';
review11.value = '';    textevaluation.value = '';
}
          //------------------------------------ok------------------------------------
          },  headers: { 'Content-Type': undefined,  },   xhr: function() {
          myXhr= $.ajaxSettings.xhr();  return myXhr;  },    });
    }
  </script>


  <script>

    var kt1='<?php echo $kt1; ?>';	if(kt1==1){	lengthk1='<?php echo $ck12; ?>';}
    var kt2='<?php echo $kt2; ?>';	if(kt1==1){	lengthk1='<?php echo $ck22; ?>';}
    var kt3='<?php echo $kt3; ?>';	if(kt1==1){	lengthk1='<?php echo $ck32; ?>';}
    var kt4='<?php echo $kt4; ?>';	if(kt1==1){	lengthk1='<?php echo $ck42; ?>';}
    var kt5='<?php echo $kt5; ?>'; 	if(kt1==1){	lengthk1='<?php echo $ck52; ?>';}
    var lengthk1='<?php echo $ck1; ?>';
    var lengthk2='<?php echo $ck2; ?>';
    var lengthk3='<?php echo $ck3; ?>';
    var lengthk4='<?php echo $ck4; ?>';
    var lengthk5='<?php echo $ck5; ?>';


  </script>
  <script src="{{ asset('/js/kirikae7c.js') }}"></script>
