<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Hiroodb;
use Log;
use Carbon\Carbon;
use Illuminate\Support\Str;

class ManagerController extends Controller
{

public function home1() {
$out='';
if(isset($_GET['out'])){	$out=$_GET['out'];
  \Session::put('custsesspass', '');
  \Session::put('custsessemail', '');
    \Session::put('custsessname', '');
    \Session::put('custsesscode', '');
}

$datas = \DB::table('menuk')->get();
$datas3 = \DB::table('customs')->get();
//$loginid=Session('custsessemail');
$custcode5=Session('custsesscode');
//----------------------------------------------------------
$items= \DB::table('menuk')->select('category', 'classm', 'itemk', 'product', 'itemcode')->get();
$items11= \DB::table('productlist')
->select('category', 'classm', 'itemk', 'product', 'itemcode',
'storeid','storename','numitem','featherm','pricem','userid',)
->get();
//-----------------------------------------------------------------
$cartc5= \DB::table('cart')->select('status','custcode','ponumber')
->where('custcode', $custcode5)->where('status', 'cart')->get();
//-----------------------------------------------------------------

  return view('manager.home',['items'=>$items,'items11'=>$items11,'cartc5'=>$cartc5         ]  );
}


public function home2(Request $request) {
//  $loginid=Session('custsessemail');
  $custcode6=Session('custsesscode');
//------------------------------------------------------------------------
  $search=$request['search'];
  $keyw=$request['keyw'];
  $datas21 = \DB::table('menuk')->get();
  $datas23 = \DB::table('members')->get();
  $items21= \DB::table('menuk')->select('category', 'classm', 'itemk', 'product', 'itemcode')->get();

  $items51= \DB::table('productlist')->select('category', 'classm', 'itemk', 'product',
  'itemcode','storeid','storename','numitem','featherm','pricem','userid','picturem','storeen','codeitem')->get();

  $dbitem= \DB::table('productlist')->select('category', 'classm', 'itemk', 'product'
  ,'itemcode','storeid','storename','numitem','bland','makerm','featherm','stockm'
  ,'pricem','weightm','sizem','colorm','jancode','specm','userid','picturem','storeen','id','codeitem')->get();
//-----------------------------------------------------------------
$cartc6= \DB::table('cart')->select('status','custcode','ponumber')
->where('custcode', $custcode6)->where('status', 'cart')->get();
//-----------------------------------------------------------------
$arra=[$search,$keyw];
    return view('manager.home2',['items21'=>$items21,'items51'=>$items51,'dbitem'=>$dbitem,'cartc6'=>$cartc6      ],compact('arra')  );

}
//:::::::::::::::::::::::::::::: home8 :::::::::::::::::::::::::::::::::::::::
public function home8() {
$items= \DB::table('menuk')->select('category', 'classm', 'itemk', 'product', 'itemcode')->get();
$items51= \DB::table('productlist')->select('category', 'classm', 'itemk', 'product',
'itemcode','storeid','storename','numitem','featherm','pricem','picmain','picturem','storeen','codeitem')->get();
  return view('manager.home8',[  'items' => $items ,'items51' => $items51      ]);
}

public function home8post(Request $requestx) {
   $inputx = $requestx->all();
   Log::info($inputx);
   $zname1=$requestx->kname1;
   $zname2=$requestx->kname2;
//---------------------------------------
$items= \DB::table('menuk')->select('category', 'classm', 'itemk', 'product', 'itemcode')->get();



 return response()->json(['zname1' => $zname1,'zname2' => $zname2,'items' => $items      ]);
}




//::::::::::::::::::::::::::::: home3    ::::::::::::::::::::::::::::::::::::::::::
public function home3() {
  $custcode6=Session('custsesscode');
  $menuk= \DB::table('menuk')->select('category', 'classm', 'itemk', 'product', 'itemcode')->get();
  $dbitem= \DB::table('productlist')->select('category', 'classm', 'itemk', 'product'
  ,'itemcode','storeid','storename','numitem','bland','makerm','featherm','stockm'
  ,'pricem','weightm','sizem','colorm','jancode','specm','userid','picturem','storeen','id','codeitem')->get();

  $items51= \DB::table('productlist')->select('category', 'classm', 'itemk', 'product',
  'itemcode','storeid','storename','numitem','featherm','pricem','picmain','picturem','storeen','codeitem')->get();

  $cartc6= \DB::table('cart')->select('status','custcode','ponumber')
  ->where('custcode', $custcode6)->where('status', 'cart')->get();


  return view('manager.home3',[ 'dbitem' => $dbitem,'menuk' => $menuk,'items51' => $items51 ,'cartc6'=>$cartc6      ]);
}

public function home3post(Request $requestx) {
   $inputx = $requestx->all();
   Log::info($inputx);
   $zname1=$requestx->kname1;
   $zname2=$requestx->kname2;
   $zname3=$requestx->kname3;
   $zname4=$requestx->kname4;
   $zname5=$requestx->kname5;
   $zname6=$requestx->kname6;
   $zname7=$requestx->kname7;
   $zname8=$requestx->kname8;
//---------------------------------------
$menuk= \DB::table('menuk')->select('category', 'classm', 'itemk', 'product', 'itemcode')->get();

$dbitem= \DB::table('productlist')->select('category', 'classm', 'itemk', 'product','itemcode',
'storeid','storename','numitem','bland','makerm','featherm','stockm','pricem','weightm','sizem',
'colorm','jancode','specm','userid','picturem','storeen','id','codeitem')->get();

$items51= \DB::table('productlist')->select('category', 'classm', 'itemk', 'product',
'itemcode','storeid','storename','numitem','featherm','pricem','picmain','picturem','storeen',
'codeitem')->get();




 return response()->json(['zname1' => $zname1,'zname2' => $zname2,'zname3' => $zname3,
'zname4' => $zname4,'zname5' => $zname5,'zname6' => $zname6,'zname7' => $zname7,
'zname8' => $zname8, 'menuk' => $menuk, 'items51' => $items51,'dbitem' => $dbitem
]);
}


//::::::::::::::::::::::::::::: home3    ::::::::::::::::::::::::::::::::::::::::::
public function product() {
  //------------date----------------------------------------
      $dateto11 = new Carbon('now');
      $datetof11=$dateto11->format('YmdHis');
  //----------------------------------------------------------
   $codeitemk=''; $custcode=''; $statusx='';$custcodek='';
   $custcode1='';$custcode2='';
 if(isset($_GET['codeitem'])){	$codeitemk=$_GET['codeitem'];		}
 //--------------------------------------------------------------
 $pcname=php_uname('n');
 $custcode1=Session('custsesscode');
//-------------------------------------------------------------------
$favobx=\DB::table('favobrows')->where('codeitem', $codeitemk);
$statusx=$favobx->value('status');
$custcode2=$favobx->value('custcode');
if($custcode2!=''){$custcodek=$custcode2;}else{
  if($custcode1!=''){ $custcodek=$custcode1;        }}
//-----------------------------------------------------------------
if(isset($codeitemk)){

if($statusx=='browsing'){ //update
  \DB::table('favobrows')->where('codeitem', $codeitemk)->where('status', 'browsing')->update([ 'custcode' => $custcodek,   'datet' => $datetof11 ]);
}else{  //insert
  \DB::table('favobrows')->insert(['codeitem' => $codeitemk,'custcode' => $custcodek,
  'status' => 'browsing','datet' => $datetof11 ,'pcname' => $pcname             ]);
}}
//----------------------------------------------
   $items31= \DB::table('productlist')
   ->select('category', 'classm', 'itemk', 'product', 'itemcode', 'storeid','storename',
   'numitem','featherm','pricem','userid','picturem','specm' ,'makerm' ,'stockm' ,'sizem' ,
   'colorm', 'weightm','jancode','codeitem','picturem2','bland')
   ->get();
//--------------------------------------------
$cartc1= \DB::table('cart')->select('status','custcode','ponumber')
->where('custcode', $custcode1)->where('status', 'cart')->get();
//---------------------------------------------------------
  return view('manager.product',[  'items31'=>$items31,'cartc1'=>$cartc1 ],compact('statusx'));
 }
 //--------------------------------------------------------------------------------
 public function productpost(Request $requesta) {
   $useful=''; $violation='';$numitem='';$review='';$text ='';$storeid='';$review='';
    $custcode='';$custcodez='';$custcode5='';$statusz=''; $arrtx=array();  $arrt='';
    $evalutecode=''; $evalutedele=''; $ikey=0; $iddia='';
   //------------------------------------------------------------------------
   $custcode=Session('custsesscode');
   $logem1=\DB::table('customs')->where('custcode', $custcode);
   $logink=$logem1->value('userid');
   $name=$logem1->value('name');
   $review='';
   //---------------------------------------------------------------------------
   $dateto11 = new Carbon('now');
   $datetof11=$dateto11->format('YmdHis');
   //------------date----------------------------------------

   $upload_file = storage_path().'/app/public/img_review/';$imgname='review';

   $resulta = $requesta->has('text');   if ($resulta) { $text = $requesta->input('text');  }
   $resulta2 = $requesta->has('review');   if ($resulta2) { $review= $requesta->input('review');  }
   $resulta3 = $requesta->has('ikey');   if ($resulta3) { $ikey= $requesta->input('ikey');  }
   $resulta4 = $requesta->has('storeid');   if ($resulta4) { $storeid= $requesta->input('storeid');  }
   $resulta5 = $requesta->has('numitem');   if ($resulta5) { $numitem= $requesta->input('numitem');  }
   $resulta6 = $requesta->has('evaluation');   if ($resulta6) { $evaluation= $requesta->input('evaluation');  }
   $resulta7 = $requesta->has('evalutecode');   if ($resulta7) { $evalutedele= $requesta->input('evalutecode');  }
  $resulta8 = $requesta->has('iddia');   if ($resulta8) { $iddia= $requesta->input('iddia');  }
//-------------------------------------------------------------------
$arrtx2=array();
if ($requesta->TotalImages > 0) {
    for ($x= 0; $x < $requesta->TotalImages; $x++) {
  $result2k = $requesta->file('images' . $x)->isValid();
   if($result2k){       $ct= Str::random(3);
 $file = $requesta->file('images' . $x)->move($upload_file , $imgname.$ct.$x.".jpg");
 //$arrt=$imgname.$ct.$x.".jpg";
 $arrtx[]=$imgname.$ct.$x.".jpg";
}   }  }
//--------------------------------------------------------------------------
// $numdb=\DB::table('custreview')->where('numitem', $numitem);
// $evadb=$numdb->value('evalutecode');
if($ikey==88){
//-------------------------------------------------------------------------
//if($evadb==""){
if($review!=''){ $arrtx2=implode('|',$arrtx); $evalutecode=$datetof11.Str::random(5);
\DB::table('custreview')->insert(['loginid' => $custcode,'name' => $name,'datet' => $datetof11,
'storeid' => $storeid,'numitem' => $numitem,'evalutecode' => $evalutecode,'evaluation' => $evaluation,'title' => $text,
'review' => $review,'picreview' => $arrtx2,'useful' => $useful,'violation' => $violation
]);
// }else{
//   \DB::table('custreview')->where('evalutecode', $evadb)->update([  'evalutecode' => $evalutecode,
//   'evaluation' => $evaluation,'title' => $text,'review' => $review,'picreview' => $arrtx2,
//   'useful' => $useful,'violation' => $violation
//  ]);

//}
//-------------------------------------------
}}

//------------------------------------------------------------------------
if($ikey==188){
if($evalutedele!=''){
\DB::table('custreview')->where('evalutecode', $evalutedele)->update(['storeid' => ''
//  'review' => '','evaluation' => '','title' => '','picreview' => '','numitem' => '',
  ]);
}}
//-------------------------------------------------------------------------
$reviewdb= \DB::table('custreview')
->select('loginid','name','datet','storeid','numitem','evalutecode','evaluation','title','review','picreview',
'useful','violation' )->get();

//------------------------------------------------------------------------
$xname1='';$xname2='';$xname3='';$xname4='';$xname5='';$xname6='';$xname7='';$xname8='';
$xname9='';$xname10='';$xname11='';$xname12='';$xname13='';$xname15='';$xname16='';   $xname15='';
  $inputa = $requesta->all();
   Log::info($inputa);

   $result1 = $requesta->has('zname1');  if ($result1) {  $xname1= $requesta->input('zname1');   }
   $result2 = $requesta->has('zname2');  if ($result2) {  $xname2= $requesta->input('zname2');   }
   $result3 = $requesta->has('zname3');  if ($result3) {  $xname3= $requesta->input('zname3');   }
   $result4 = $requesta->has('zname4');  if ($result4) {  $xname4= $requesta->input('zname4');   }
   $result5 = $requesta->has('zname5');  if ($result5) {  $xname5= $requesta->input('zname5');   }
   $result6 = $requesta->has('zname6');  if ($result6) {  $xname6= $requesta->input('zname6');   }
   $result7 = $requesta->has('zname7');  if ($result7) {  $xname7= $requesta->input('zname7');   }
   $result8 = $requesta->has('zname8');  if ($result8) {  $xname8= $requesta->input('zname8');   }
   $result9 = $requesta->has('zname9');  if ($result9) {  $xname9= $requesta->input('zname9');   }
   $result10 = $requesta->has('zname10');  if ($result10) {  $xname10= $requesta->input('zname10');   }
   $result11 = $requesta->has('zname11');  if ($result11) {  $xname11= $requesta->input('zname11');   }
   $result12 = $requesta->has('zname12');  if ($result12) {  $xname12= $requesta->input('zname12');   }
   $result13 = $requesta->has('zname13');  if ($result13) {  $xname13= $requesta->input('zname13');   }
   $result15 = $requesta->has('zname15');  if ($result15) {  $xname15= $requesta->input('zname15');   }
   $result16 = $requesta->has('zname16');  if ($result16) {  $xname16= $requesta->input('zname16');   }


   if(isset($xname15)){
   $xname15=explode('_',$xname15); $storeidi=$xname15[1];$codeitem=$xname15[0];}
//----------------------------------------------------
 $custcode=Session('custsesscode');
$logem1=\DB::table('customs')->where('custcode', $custcode);//->where('email', $loginid);
$loginid=$logem1->value('userid');
$name=$logem1->value('name');
$userid=$logem1->value('userid');
$pcname=php_uname('n');
$sessionid=$loginid;
$status='cart';


//----------------------------------------------------------
$favobz=\DB::table('favobrows')->where('codeitem', $xname16)->where('status', 'favority');
$statusz=$favobz->value('status');
$custcode5=$favobz->value('custcode');
if($custcode5!=''){$custcodez=$custcode5;}else{
  if($custcode!=''){ $custcodez=$custcode;        }}

//-------------------------------------------
if($statusz=='favority'){
  \DB::table('favobrows')->where('codeitem', $xname16)->where('status', 'favority')->update([ 'custcode' => $custcodez,   'datet' => $datetof11 ]);
}else{
if(isset($xname15)){
  //---------------
  \DB::table('favobrows')->insert(['codeitem' => $xname16,'custcode' => $custcodez,
  'status' => 'favority','datet' => $datetof11 ,'pcname' => $pcname             ]);
}}

//------------------------------------------------------------
//------------------------------------------------
$dbcart1=\DB::table('cart')->where('numitem', $xname5)->where('storeid', $xname1);
$statusm=$dbcart1->value('status');
if($statusm=='cart'){
//------------------------------------
\DB::table('cart')->where('storeid', $xname1)->where('numitem', $xname5)
->update(['storeid' => $xname1,'storename' => $xname2,'itemk' => $xname3,
'product' => $xname4,'pricem' => $xname6,'quantity' => $xname7,
'weight' => $xname8,'jancode' => $xname9,'picture' => $xname10,'color' => $xname11,
'size' => $xname12,'stock' => $xname13,'loginid' => $userid,'name' => $name,'datet' => $datetof11,
'pcname' => $pcname,'sessionid' => $sessionid,'custcode' => $custcode,'status' => $status,'codeitem' => $xname16 ]);
//----------------------------------
}else{  $status='cart';
  $numkt= Str::random(3);
  $ponumber='PO'.$datetof11.$numkt;
//---------------
if(isset($xname2)){
\DB::table('cart')->insert(['storeid' => $xname1,'storename' => $xname2,'itemk' => $xname3,
'product' => $xname4,'numitem' => $xname5,'pricem' => $xname6,'quantity' => $xname7,
'weight' => $xname8,'jancode' => $xname9,'picture' => $xname10,'color' => $xname11,
'size' => $xname12,'loginid' => $userid,'name' => $name,'datet' => $datetof11,'ponumber' => $ponumber,
'pcname' => $pcname,'sessionid' => $sessionid,'custcode' => $custcode,'status' => $status,'stock' => $xname13,'codeitem' => $xname16
]);
}
//----------------------
}
//--------------------------------------------------
$cartck= \DB::table('cart')->select('custcode','status','ponumber')->get();

//--------------------------------------------------------------------

 return response()->json(['xname1' => $xname1,'xname2' => $xname2,'xname3' => $xname3,
'xname4' => $xname4,'xname5' => $xname5,'xname6' => $xname6,'xname7' => $xname7,
'xname8' => $xname8,'xname9' => $xname9,'xname10' => $xname10,'xname11' => $xname11,
'xname12' => $xname12,'xname13' => $xname13,'xname15' => $xname15,'xname16' => $xname16,
'xname17' => $cartck,'text' => $text,'review' => $review,'ikey' => $ikey,
'reviewdb' => $reviewdb,'iddia' => $iddia
]);

 }





//------------------------------------------------------------------------
public function product2(Request $requestm) {
  $text2=$request['amount'];
  $text1=$request['paucode'];


  return view('manager.product2',[  'text1' => $text1,'text2' => $text2         ]);
}

//---------------------------------------------------------------------
public function majax5a() {return view('manager.ajax5a');    }
public function majax5apost(Request $requestx) {
   $inputx = $requestx->all();
   Log::info($inputx);
   $zname1=$requestx->kname1;
   $zname2=$requestx->kname2;
//---------------------------------------

 return response()->json(['zname1' => $zname1,'zname2' => $zname2]);
}

//---------------------------------------------------------------------
public function cart() {
   $custcodez=Session('custsesscode');
  //---------------------------------------------------------------
  $address= \DB::table('sendto')->select('loginid','custcode','name','post',
  'addresst','receiver','phone','codeaddress','status')->get();
  //----------------------------------------------------------------------------------
  $cartpo= \DB::table('cart')->select('status','ponumber')->get();
  //-----------------------------------------------------------------------------
  return view('manager.cart',[  'cartpo'=>$cartpo , 'address'=>$address, 'custcodez'=>$custcodez   ]);
 }
 //---------------------------------------------------------
public function cartpost(Request $requeste) {
  //------------date----------------------------------------
      $dateto11 = new Carbon('now');
      $datetof11=$dateto11->format('YmdHis');
      $datetof12=$dateto11->format('Ymd-His');
//----------------------------------------------------------
 $custcode=Session('custsesscode');
  $logem1=\DB::table('customs')->where('custcode', $custcode);
$logink=$logem1->value('userid');
  $name=$logem1->value('name');

//----------------------------------------------------

  $arrp=array();
   $inpute = $requeste->all();
   Log::info($inpute);

   $kname1=$requeste->vname1; //arrpc
   $kname2=$requeste->vname2; //dele
   $kname3=$requeste->vname3; //ponumber
   $kname4=$requeste->vname4; //quantity
   $kname5=$requeste->vname5; //addcode
   $kname9='111222';
   $kname10='';
//--------------------------------------------------------
$amount=0;
$arrbb1=array();  $arrbb2=array();$arrbb3=array();

   if(isset($kname1)){

   $arrbb1=explode('_',$kname1);
   foreach($arrbb1 as  $arrbb2){
   $arrbb2=explode('|',$arrbb2);
   $arrbb3[]=array($arrbb2[0],$arrbb2[1]);
   }}

   for($b2=0;$b2<count($arrbb3);$b2++){
   $ponumberx=$arrbb3[$b2][0];
   $quantityx=$arrbb3[$b2][1];
   $quantityx=intval($quantityx);
   //-------------------------------------------------
   $cartall=\DB::table('cart')->where('ponumber', $ponumberx);
   $loginidx=$cartall->value('loginid');
   $namex=$cartall->value('name');
   $custcodex=$cartall->value('custcode');
   $storeidx=$cartall->value('storeid');
   $numitemx=$cartall->value('numitem');
   $storenamex=$cartall->value('storename');
   $itemkx=$cartall->value('itemk');
   $productx=$cartall->value('product');
   $sizex=$cartall->value('size');
   $colorx=$cartall->value('color');
   $stockx=$cartall->value('stock');
   $pricemx=$cartall->value('pricem');
   $jancodex=$cartall->value('jancode');
   $picturex=$cartall->value('picture');
   $weightx=$cartall->value('weight');
   $codeitemx=$cartall->value('codeitem');
   $pricemx=intval($pricemx);
   //-----------------------------------------------------
   if($quantityx>0){
   \DB::table('cart')->where('ponumber', $ponumberx)->update(['status' => 'ordered'  ]);
   $kname10=$quantityx.'点商品注文しました';
   //---------------------------------------------------------------------
    $amountx=$pricemx*$quantityx;
   \DB::table('orderlist')->insert([
   'loginid' => $logink,'name' => $name,'datet' => $datetof11,'custcode' => $custcode,
   'storeid' => $storeidx,'quantity' => $quantityx,'numitem' =>$numitemx,
   'storename' => $storenamex,'itemk' => $itemkx,'product' => $productx,'size' => $sizex,
   'color' => $colorx,'stock' => $stockx,'pricem' => $pricemx, 'jancode' => $jancodex,
   'picture' => $picturex,'weight' => $weightx,'status' => 'order', 'amount' => $amountx,
   'ponumber' => $ponumberx,'codeaddress' => $kname5,'codeitem' => $codeitemx

   ]);

   //----------------------
   }}

   //--------------------------deleted-----------------------
   if($kname2=='dele'){ $kname9=$kname3;
   \DB::table('cart')->where('ponumber', $kname3)->update(['status' => 'deleted'  ]);
   }
   //-------------------------------------------------------------------------

\DB::table('cart')->where('ponumber', $kname3)->update(['quantity' => $kname4  ]);
//-------------------------------------------------------------------------
$cartm= \DB::table('cart')->select('storeid','storename','itemk','product',
'numitem','pricem','quantity','weight','jancode','picture','color','size',
'loginid','name','datet','pcname','sessionid','custcode','status','stock','ponumber','codeitem')->get();
//----------------------------------------------------------------------------------
$cartpo= \DB::table('cart')->select('status','ponumber')->get();
//-----------------------------------------------------------------------------
 return response()->json([ 'cartpo' => $cartpo,'logink' => $logink,'cartm' => $cartm,'kname1' => $kname1,'kname2' => $kname2,
 'kname3' => $kname3,'kname4' => $kname4,'kname5' => $kname5,'kname9' => $kname9,'custcode' => $custcode
]);
}
//~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

//---------------------address-------------------------------------
public function address() {  return view('manager.address');    }
public function addresspost(Request $requestad) {
  //------------date----------------------------------------
      $dateto11 = new Carbon('now');
      $datetof11=$dateto11->format('YmdHis');
//----------------------------------------------------------
  //-----------------------------------------------------
  $custcode=Session('custsesscode');
  $logem1=\DB::table('customs')->where('custcode', $custcode);
  $email=$logem1->value('email');
  $name=$logem1->value('name');
  //-----------------------------------------------------
  $zname9='';
     $inputad = $requestad->all();
     Log::info($inputad);
     $zname1=$requestad->ename1;
     $zname2=$requestad->ename2; //custcode
     $zname3=$requestad->ename3; //receiver
     $zname4=$requestad->ename4; //post
     $zname5=$requestad->ename5; //address
     $zname6=$requestad->ename6; //phone
     $zname7=$requestad->ename7; //check
     $zname8=$requestad->ename8; //idk
     $zname9=$requestad->ename9; //codeaddress

//------------------------------------------------------------------
if($zname1=="zxzxzx"){

}

//--------------------------sendto-------------------------------------
if($zname1=="sendto"){
  $addcode=\DB::table('sendto')->where('custcode', $custcode)->where('status', 'checked');
  $addcode2=$addcode->value('codeaddress');
  if($zname9!=''){
    if($zname9!=$addcode2){
  \DB::table('sendto')->where('custcode', $custcode)->where('codeaddress', $zname9)->update(['status' => 'checked'  ]);
  \DB::table('sendto')->where('custcode', $custcode)->where('codeaddress', $addcode2)->update(['status' => ''  ]);
  }}}
//-------------------------------edit-----------------------------------------
//$zname11='';
if($zname1=="edit"){
  if($zname3!=null){
  \DB::table('sendto')->where('codeaddress', $zname9)->update(['receiver' => $zname3, 'post' => $zname4, 'addresst' => $zname5, 'phone' => $zname6 ]);
}else{
  $sendc1=\DB::table('sendto')->where('codeaddress', $zname9);
  $sendc2=$sendc1->value('status');
if($sendc2!='checked'){
  \DB::table('sendto')->where('codeaddress', $zname9)->update(['status' => '','custcode' => '','receiver' => '', 'post' => '', 'addresst' => '', 'phone' => '' ]);
}}}

//-----------------------------register----------------------------------------
$coded= Str::random(3);
if($zname1=="register"){

  $codeaddress='add'.$datetof11.$coded;
  $addc1=\DB::table('sendto')->where('addresst', $zname5)->where('custcode', $custcode);
  $addc2=$addc1->value('codeaddress');
  //-----------------------------------------------------
  $addc3=\DB::table('sendto')->where('status', 'checked')->where('custcode', $custcode);
  $addc4=$addc3->value('codeaddress');
  //---------------------------------------------------------------
  if($addc2!=$codeaddress&&$zname3!=''){
  \DB::table('sendto')->insert(['loginid' => $email, 'custcode' => $custcode,'name' => $name ,
  'post' => $zname4, 'addresst' => $zname5,'receiver' => $zname3,
  'phone' => $zname6, 'codeaddress' => $codeaddress,'status' => 'checked'
  ]);
  \DB::table('sendto')->where('custcode', $custcode)->where('codeaddress', $addc4)->update(['status' => ''  ]);

  }}


//---------------------------------------------------------------
$address= \DB::table('sendto')->select('loginid','custcode','name','post',
'addresst','receiver','phone','codeaddress','status')->get();
//--------------------------------------------------------------------------


return response()->json(['address' => $address,'custcode' => $custcode,
'zname1' => $zname1,'zname2' => $zname2,'zname3' => $zname3,  'zname4' => $zname4,
'zname5' => $zname5,  'zname6' => $zname6,'zname7' => $zname7,'zname8' => $zname8,
'zname9' => $zname9
 ]);


}
//----------------------------------------------------------

public function orderlist() {
  $order= \DB::table('orderlist')->select(
'product','numitem','storename','color','size','weight',
'pricem','quantity','amount','picture','datet','ponumber',
'status','storeid','itemk', 'jancode','loginid','name','custcode','stock','codeitem')->get();

return view('manager.orderlist',[ 'order' => $order      ]);
 }


 public function orderlistpost(Request $requestx) {
    $inputx = $requestx->all();
    Log::info($inputx);
    $jname1=$requestx->kname1;
    $jname2=$requestx->kname2;
    $jname3=$requestx->kname3;
 //---------------------------------------
if($jname1!=null){
  \DB::table('orderlist')->where('ponumber', $jname1)->update(['status' => 'deleted' ]);
}
 //----------------db--------------------
 $order2= \DB::table('orderlist')->select(
'product','numitem','storename','color','size','weight',
'pricem','quantity','amount','picture','datet','ponumber',
'status','storeid','itemk', 'jancode','loginid','name','custcode','stock')->get();
//----------------------------------------
  return response()->json(['jname1' => $jname1,'jname2' => $jname2,'jname3' => $jname3,'order2' => $order2]);
 }

 //---------------------------------------------------------------------
 public function mypage() {

 return view('manager.mypage');
 }
 public function mypagepost(Request $requestm) {
   $custcode2=Session('custsesscode');
   $logem1=\DB::table('customs')->where('custcode', $custcode2);
   $loginid=$logem1->value('userid');

   //----------------db--------------------
   $ordera= \DB::table('orderlist')->select(
 'product','numitem','storename','color','size','weight', 'pricem','quantity','amount','picture','datet','ponumber',
 'status','storeid','itemk', 'jancode','loginid','name','custcode','stock','payment','deliplan','paycode')->get();
  //----------------------------------------------------------
  $custa= \DB::table('customs')->select('name','email','custcode','userid')->get();
 //----------------------------------------------------------


//-------------------------------------------------------------
    $inputm = $requestm->all();
    Log::info($inputm);
    $zname1=$requestm->kname1;
    $zname2=$requestm->kname2;
    $zname3=$requestm->kname3;
    $zname4=$requestm->kname4;
    $zname5=$requestm->kname5;
    $zname6=$requestm->kname6;
    $zname7=$requestm->kname7;
    $zname8=$requestm->kname8;
 //---------------------------------------

 if($zname1!=''){
   \DB::table('orderlist')->where('ponumber', $zname1)->update(['status' => 'deleted' ]);
}
//--------------------------------------------------------------
if($zname4!=''){
  \DB::table('customs')->where('custcode', $zname5)->update(['name' => $zname4 ]);
}
//----------------------------------------------------------
$custa= \DB::table('customs')->select(
'name','email','custcode','userid')->get();
//----------------pay------------------------------------------
//---------------------------------------
$arrtt=array();
if($zname6!=''){
  //----------------------------------------------------------------
$logem1=\DB::table('payment')->where('paycode', $zname6);
$ponumbersk=$logem1->value('ponumbers');
$custcode=$logem1->value('custcode');
if(isset($ponumbersk)){
$arrtt=explode('|',$ponumbersk);  $arrtt=array_unique($arrtt);
foreach($arrtt as $bersk){
  \DB::table('orderlist')->where('ponumber', $bersk)->where('custcode', $custcode)->update(['paycode' => $zname6 ]);
}}
if($zname8!=''){
\DB::table('payment')->where('paycode', $zname6)->update(['paid' => $zname7,'transactionid' => $zname8 ]);
}
//--------------------------------------------------------------------
}

//--------------------------------------------------------------
  return response()->json([ 'loginid' => $loginid,'custa' => $custa,'ordera' => $ordera,
  'zname1' => $zname1,'zname2' => $zname2,'zname6' => $zname6,'zname7' => $zname7,'zname8' => $zname8

]);
 }

 //------------------------------------------------------------------------------
public function payment() {

  $custcode=Session('custsesscode');
  $logem1=\DB::table('customs')->where('custcode', $custcode);
  $loginid=$logem1->value('userid');

  $addc1=\DB::table('payment')->where('custcode', $custcode);
  $addc2=$addc1->value('paycode');
$arrsa1=array();  $arrsa2=array(); $arrsa3=array();$cat=0; $mk1='';
  $paywait=\DB::table('payment')->select('datet','paycode','amount','paymethod','paycompany',
  'paystatus','custcode','paiddate','ponumbers','transactionid')->where('custcode', $custcode)->get();

  if(isset($paywait)){
  foreach($paywait as $ales1){   foreach($ales1 as $ales2){
      $arrsa1[]=$ales2; $cat +=1;
  if($cat==10){ $arrsa2[]=$arrsa1;  $arrsa1=array(); $cat=0;    }
}}}

for($k2=0;$k2<count($arrsa2);$k2++){
  if($arrsa2[$k2][9]==''){
if($arrsa2[$k2][1]!=''){  $arrsa3=explode('|',$arrsa2[$k2][8]);
foreach($arrsa3 as $ponum){
\DB::table('payment')->where('custcode', $custcode)->update(['paycode' => '','paystatus' => '' ]);
}}}}

  return view('manager.payment',[ 'paywait' => $paywait ,'mk1' => $arrsa2,'custcode' => $custcode    ]);
}

public function payment3() {
  $paywait3=\DB::table('payment')->select('datet','paycode','amount','paymethod','paycompany',
  'paystatus','custcode','paiddate','ponumbers')->get();


  return view('manager.payment3',[   'paywait3' => $paywait3       ]);
}

public function payment2(Request $requestx) {

    $text1=$requestx['paycode'];
    $text2=$requestx['amount'];
    $text3=$requestx['paycompany'];
    $text4=$requestx['paymethod'];

    //------------------------------------------------------
    $paywait= \DB::table('payment')->select('datet','paycode','amount','paymethod',
    'paycompany','paystatus','ponumbers')->get();
     //---------------------------------------------------
     $payzx=\DB::table('payment')->where('paycode', $text1);
     $paymethod=$payzx->value('paymethod');
     $paycompany=$payzx->value('paycompany');
    //------------------------------------------------------
  return view('manager.payment2',[  'text1' => $text1,'text2' => $text2  ,'text3' => $text3,'text4' => $text4 ,
  'paywait' => $paywait,'paymethod' => $paymethod,'paycompany' => $paycompany
            ]);
}

public function paymentpost(Request $requestx) {
  //------------date----------------------------------------
      $dateto11 = new Carbon('now');
      $datetof11=$dateto11->format('YmdHis');
      $dateto2=$dateto11->format('YmdHis');
//----------------------------------------------------------
$custcode=Session('custsesscode');
$logem1=\DB::table('customs')->where('custcode', $custcode);
$loginid=$logem1->value('userid');
//----------------------------------------------------
$arrpou=array();
  $paycode='';
   $inputx = $requestx->all();
   Log::info($inputx);
   $zname1=$requestx->kname1;
   $zname2=$requestx->kname2;
   $zname3=$requestx->kname3;
   $zname4=$requestx->kname4;
   $zname5=$requestx->kname5;
  $zname6=$requestx->kname6;
//---------------------------------------
if($zname6==222){   $paycode='py'.$dateto2.Str::random(3);      }

if($zname6==888){
  \DB::table('payment')->insert(['datet' => $dateto2, 'paycode' => $zname5,'amount' => $zname4,
   'paymethod' => $zname2,'paycompany' => $zname1,'paystatus' =>'paying','ponumbers' => $zname3,'custcode' => $custcode
    ]);
//-----------------------------------------------------------------------------------------
$arrpou=explode('|',$zname3);
foreach($arrpou as $rpou){
//\DB::table('orderlist')->where('ponumber', $rpou)->where('custcode', $custcode)->update(['paycode' => $zname5 ]);
}
}

//^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^
//---------------------------------------
$paywait2=\DB::table('payment')->select('datet','paycode','amount','paymethod','paycompany',
'paystatus','custcode','paiddate','ponumbers')->get();

//---------------------------------------
$payk= \DB::table('orderlist')->select(
'product','numitem','storename','color','size','weight',
'pricem','quantity','amount','picture','datet','ponumber',
'status','storeid','itemk', 'jancode','loginid','name','custcode','stock','payment','paycode')->get();


 return response()->json(['zname1' => $zname1,'zname2' => $zname2,'zname3' => $zname3,'zname4' => $zname4,
 'zname5' => $zname5,'zname6' => $zname6,'payk' => $payk,'paycode' => $paycode,'custcode' => $custcode,
 'paywait2' => $paywait2
]);
}


//--------------------------------------------------------------------------
public function browsing() {

  $custcode=Session('custsesscode');
 $logem1=\DB::table('customs')->where('custcode', $custcode);
 $loginid=$logem1->value('userid');

  if($logem1!=''){
  //---------------------------------------------------------------
  $favob= \DB::table('favobrows')->select('custcode','datet','codeitem','pcname','status')->get();
  //--------------------------------------------------------------------------
  }

  //-----------------------------------------------------------------------
  $items8= \DB::table('productlist')
  ->select('category', 'classm', 'itemk', 'product', 'itemcode', 'storeid','storename',
  'numitem','featherm','pricem','userid','picturem','specm' ,'makerm' ,'stockm' ,'sizem' ,
  'colorm', 'weightm','jancode','codeitem','picturem2')
  ->get();

  //------------------------------------------------------------------------
return view('manager.browsing',['items8' => $items8,'favob' => $favob ]);
}

public function favorite() {  return view('manager.favorite'); }

public function profile() {  return view('manager.profile'); }
public function profilepost(Request $requestx) {
  $custcode=Session('custsesscode');
  $logem1=\DB::table('customs')->where('custcode', $custcode);
  $loginid=$logem1->value('userid');
    $zname4='';$zname5='';$zname6='';
     $inputx = $requestx->all();
     Log::info($inputx);
     $zname1=$requestx->kname1;
     $zname2=$requestx->kname2;
     $zname3=$requestx->kname3;
     $zname4=$requestx->kname4;
     $zname5=$requestx->kname5;
     $zname6=$requestx->kname6;
  //---------------------------------------
  if($zname4!=''||$zname5!=''||$zname6!=''){
  \DB::table('customs')->where('custcode', $custcode)->update(['name' => $zname4,'password' => $zname5,'email' => $zname6 ]);
  }


    $custa= \DB::table('customs')->select('name','email','custcode','userid','password')->get();




   return response()->json(['zname1' => $zname1,'zname2' => $zname2,'zname3' => $zname3,
  'zname4' => $zname4,'zname5' => $zname5,'zname6' => $zname6, 'custa' => $custa,'custcode' => $custcode
 ]);
}



public function inquiry() {  return view('manager.inquiry'); }
 public function manaprofile() {  return view('manager.manaprofile'); }


  public function instock() {
    //----------------------------------------------------------
    $custcode=Session('custsesscode');
    $logem1=\DB::table('customs')->where('custcode', $custcode);
    $loginid=$logem1->value('userid');
    //----------------------------------------------------

    $orderlist= \DB::table('orderlist')->select('datet','ponumber','product','numitem','pricem',
    'quantity','amount','name','codeaddress','storeid','status','loginid','custcode',
    'storename','codeitem','color','size','weight','picture', 'itemk', 'jancode','stock',
    'deliplan','deliqty','sendma','payment','paycode','shipcode')->get();
    return view('manager.instock',[ 'orderlist' => $orderlist ,'loginid' => $loginid ,'custcode' => $custcode ,   ]);
  }

//+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
public function payline() {  return view('manager.payline'); }

public function paylinepost(Request $requestxz) {

   $inputxz = $requestxz->all();
   Log::info($inputxz);
   $zname1=$requestxz->kname1;
   $zname2=$requestxz->kname2;
   $zname3=$requestxz->kname3;
//---------------------------------------
$arrtt=array();
$logem1=\DB::table('payment')->where('paycode', $zname1);
$ponumbersk=$logem1->value('ponumbers');
$custcode=$logem1->value('custcode');
if(isset($ponumbersk)){
$arrtt=explode('|',$ponumbersk);  $arrtt=array_unique($arrtt);

foreach($arrtt as $bersk){
  \DB::table('orderlist')->where('ponumber', $bersk)->where('custcode', $custcode)->update(['paycode' => $zname1 ]);
}}

if($zname3!=''){
\DB::table('payment')->where('paycode', $zname1)->update(['paid' => $zname2,'transactionid' => $zname3 ]);
}

 return response()->json(['zname1' => $zname1,'zname2' => $zname2,'zname3' => $zname3 ,'zname4' => $ponumbersk
]);
}
//------------------------------------------------------------------------
/*
public function ireview() {
  $reviewdb= \DB::table('custreview')
  ->select('loginid','name','datet','storeid','numitem','evaluation','title','review','picreview',
  'useful','violation' )->get();

  return view('manager.ireview',[  'reviewdb' => $reviewdb          ]); }

*/










//+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
//-------------------------------------------------------
}
