<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Mail\ContactMail;
use App\Mail\DeliveryMail;
use App\Mail\SigninMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;
use Illuminate\Support\Str;
use App\Models\Hiroodb;
use Log;
use Illuminate\Support\Facades\Validator;

class StoremanaController extends Controller{

  public function manasales() {

    $storeid=Session('storeidkk');
    //------------------------------------------------
    $sales= \DB::table('orderlist')->select('datet','ponumber','product','numitem','pricem',
    'quantity','amount','name','codeaddress','storeid','status','loginid','custcode',
    'storename','codeitem','color','size','weight','picture', 'itemk', 'jancode','stock',
     'deliplan','deliqty','payment','paycode')->get();
  //---------------------------------------------------------------
  $address= \DB::table('sendto')->select('loginid','custcode','name','post',
  'addresst','receiver','phone','codeaddress','status')->get();
//----------------------------------------------------------------------------
    return view('manastore.manasales',[  'sales' => $sales  ,'address' => $address ,'storeid' => $storeid       ]);
   }
  public function manasalespost(Request $requestz) {
    date_default_timezone_set ('Asia/Tokyo');
    //---------------------ajax--------------------------------
     $inputz= $requestz->all();
     Log::info($inputz);
     $zname1z=$requestz->kname1;
     $zname2z=$requestz->kname2;
     $zname3z=$requestz->kname3;
     $zname4z=$requestz->kname4;
     $zname5z=$requestz->kname5;
     $date3z=date('Ymd', strtotime($zname3z));
  //---------------------------------------

\DB::table('orderlist')->where('ponumber', $zname5z)->update([ 'deliplan' => $date3z,   'deliqty' => $zname4z ]);

   return response()->json(['zname1' => $zname1z,'zname2' => $zname2z,'zname3' => $zname3z,
   'zname4' => $zname4z,'zname5' => $zname5z
      ]);
  }


  public function manadelivery() {

    $storeid2=Session('storeidkk');
    //------------------------------------------------
    $sales2= \DB::table('orderlist')->select('datet','ponumber','product','numitem','pricem',
    'quantity','amount','name','codeaddress','storeid','status','loginid','custcode', 'storename',
    'codeitem','color','size','weight','picture', 'itemk', 'jancode','stock', 'deliplan','deliqty',
    'sendma','shipcode','payment','paycode')->get();
  //---------------------------------------------------------------
  $address2= \DB::table('sendto')->select('loginid','custcode','name','post',
  'addresst','receiver','phone','codeaddress','status')->get();
  //--------------------------------------------------------------------------
    return view('manastore.manadelivery',[  'sales' => $sales2  ,'address' => $address2 ,'storeid' => $storeid2       ]);
  }


public function manadeliverypost(Request $requeste) {
  //------------date----------------------------------------
$dateto11 = new Carbon('now');
$datetof11=$dateto11->format('YmdHis');
//-------------Request-------------------------------------/
  $ename1='';
  $inpute = $requeste->all();
  Log::info($inpute);
  $ename1=$requeste->kname1;
  $ename2=$requeste->kname2;
  $ename3=$requeste->kname3;
  $ename4=$requeste->kname4;
  $ename5=$requeste->kname5;
  $ename6=$requeste->kname6;
  $ename7=$requeste->kname7;

  //-------------------------------------
  $date3e=date('Ymd', strtotime($ename3));

  if($ename7==88){
    //---------------------------------------
    \DB::table('orderlist')->where('ponumber', $ename5)->update([ 'status' => 'shipped' ]);
    //---------------------------------------
  }else{
    //---------------------------------------
    \DB::table('orderlist')->where('ponumber', $ename5)->update([ 'deliplan' => $date3e,   'deliqty' => $ename4 ]);
    //---------------------------------------
  }
  //---------------------------------------------------------------------
  $arrtt1=array();$arrtt2=array();
  if($ename1!=''){
  $ename1=explode('|',$ename1);
foreach($ename1 as $pon){
\DB::table('orderlist')->where('ponumber', $pon)->where('custcode', $ename2)->update([ 'sendma' => 'sent' ]);
//------------------------------mail---------------------------------------------------
$dbpon1=\DB::table('orderlist')->where('ponumber', $pon)->where('custcode', $ename2);
$productk=$dbpon1->value('product');
$numitemk=$dbpon1->value('numitem');
$pricek=$dbpon1->value('pricem');
$quantityk=$dbpon1->value('quantity');
$amountk=$dbpon1->value('amount');
$mailk=$dbpon1->value('loginid');
$deliplank=$dbpon1->value('deliplan');  $deliplank=date('Y-m-d', strtotime($deliplank));
$namek=$dbpon1->value('name');
$mkk=$pon.'_'.$productk.'_'.$numitemk.'_'.$pricek.'_'.$quantityk.'_'.$amountk.'_'.$deliplank.'_'.$namek;
$arrtt1[]=$mkk;
//------------------------------------------------------------------------
}

}
$arrtt2=implode('|',$arrtt1);
      $arr=[$arrtt2,$mailk,$dateto11 ];
      Mail::to($mailk)->send(new DeliveryMail($arrtt2,$ename2,$namek));

  //--------------------------------------------------------------------
return response()->json(['zname1' => $ename1,'zname2' => $ename2,'zname3' => $ename3
,'zname4' => $ename4,'zname5' => $ename5,'zname6' => $ename6,'zname7' => $ename7
]);

}
public function manadelivery3() {

  $storeid3=Session('storeidkk');
  //------------------------------------------------
  $sales3= \DB::table('orderlist')->select('datet','ponumber','product','numitem','pricem',
  'quantity','amount','name','codeaddress','storeid','status','loginid','custcode',
  'storename','codeitem','color','size','weight','picture', 'itemk', 'jancode','stock', 'deliplan',
  'deliqty','sendma','shipcode','payment','paycode')->get();
//---------------------------------------------------------------
$address3= \DB::table('sendto')->select('loginid','custcode','name','post',
'addresst','receiver','phone','codeaddress','status')->get();
//--------------------------------------------------------------------------

  return view('manastore.manadelivery3',[  'sales3' => $sales3,'address3' => $address3 ,'storeid' => $storeid3 ]);
}


public function manadelivery3post(Request $requestx) {
  //------------date----------------------------------------
$dateto11 = new Carbon('now');
$datetof11=$dateto11->format('YmdHis');
$dateto2=$dateto11->format('Y-m-d');
//-------------Request-------------------------------------/
   $inputx = $requestx->all();
   Log::info($inputx);
   $zname1=$requestx->kname1;
   $zname2=$requestx->kname2;
   $zname2=explode('_',$zname2);
   //---------------------------------------
   $storeid3=Session('storeidkk');
   $dataen3=\DB::table('members')->where('storeid', $storeid3);
   $storename3=$dataen3->value('storename');
   //------------------------------------------------
//------------------------------------------------
$sales3= \DB::table('orderlist')->select('datet','ponumber','product','numitem','pricem',
'quantity','amount','name','codeaddress','storeid','status','loginid','custcode',
'storename','codeitem','color','size','weight','picture', 'itemk', 'jancode','stock', 'deliplan',
'deliqty','sendma','shipcode','payment','paycode')->get();
//---------------------------------------------------------------
$address3= \DB::table('sendto')->select('loginid','custcode','name','post',
'addresst','receiver','phone','codeaddress','status')->get();
//--------------------------------------------------------------------------

 return response()->json(['zname1' => $zname1,'zname2' => $zname2,'zname3' => $dateto2,'zname4' => $storename3,
 'sales' => $sales3,'address' => $address3 ,'storeid' => $storeid3
]);
}
//++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
  public function manadelivery6() {

    $storeid=Session('storeidkk');
    //------------------------------------------------
    $sales6= \DB::table('orderlist')->select('datet','ponumber','product','numitem','pricem',
    'quantity','amount','name','codeaddress','storeid','status','loginid','custcode',
    'storename','codeitem','color','size','weight','picture', 'itemk', 'jancode','stock', 'deliplan',
    'deliqty','sendma','shipcode','payment','paycode')->get();
  //---------------------------------------------------------------
  $address6= \DB::table('sendto')->select('loginid','custcode','name','post',
  'addresst','receiver','phone','codeaddress','status')->get();
  //--------------------------------------------------------------------------
    return view('manastore.manadelivery6',[  'sales6' => $sales6  ,'address6' => $address6 ,
    'storeid' => $storeid  ]);

  }
  public function manadelivery6post(Request $requestg) {
    //------------date----------------------------------------
  $dateto11 = new Carbon('now');
  $datetof11=$dateto11->format('YmdHis');
  $dateto2=$dateto11->format('Ymd');
  $dateto3=$dateto11->format('Y-m-d');
  //-------------Request-------------------------------------/
    $inputg = $requestg->all();
    Log::info($inputg);
    $zname1=$requestg->kname1;
    $zname2=$requestg->kname2;
    $zname3=$requestg->kname3;
    $zname3=explode('|',$zname3);
 //---------------------------------------
 $storeid6=Session('storeidkk');
 //------------------------------------------------
 $codet='';
 if($zname2==220){  $codet='D'.$datetof11.Str::random(3);
   foreach($zname3 as $ame3){
\DB::table('orderlist')->where('ponumber', $ame3)->where('custcode', $zname1)
->update([ 'status' => 'shipped','shipcode' => $codet ]);

 }}
 //---------------------------------------------------
 $sales6= \DB::table('orderlist')->select('datet','ponumber','product','numitem','pricem',
 'quantity','amount','name','codeaddress','storeid','status','loginid','custcode', 'storename',
 'codeitem','color','size','weight','picture', 'itemk', 'jancode','stock', 'deliplan','deliqty',
 'sendma','shipcode')->get();
//---------------------------------------------------------------
$address6= \DB::table('sendto')->select('loginid','custcode','name','post',
'addresst','receiver','phone','codeaddress','status')->get();
//--------------------------------------------------------------------------

  return response()->json(['zname1' => $zname1,'zname2' => $zname2,'zname3' => $zname3,'zname4' => $codet,
  'sales6' => $sales6  ,'address6' => $address6 , 'storeid' => $storeid6, 'dateto3' => $dateto3
]);
  }
//++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
  //--------------------------------------------------------
  public function manadelivery7() {
    //---------------------------------------
    $storeid7=Session('storeidkk');
 //---------------------------------------------------
 $sales7= \DB::table('orderlist')->select('datet','ponumber','product','numitem','pricem',
 'quantity','amount','name','codeaddress','storeid','status','loginid','custcode',
 'storename','codeitem','color','size','weight','picture', 'itemk', 'jancode','stock', 'deliplan',
 'deliqty','sendma','shipcode')->get();
//---------------------------------------------------------------
$address7= \DB::table('sendto')->select('loginid','custcode','name','post',
'addresst','receiver','phone','codeaddress','status')->get();
//--------------------------------------------------------------------------

    return view('manastore.manadelivery7',[ 'sales7' => $sales7  ,'address7' => $address7 , 'storeid' => $storeid7
    ]);
  }
  public function manadelivery7post(Request $requestx7) {
    //------------date----------------------------------------
  $dateto11 = new Carbon('now');
  $datetof11=$dateto11->format('YmdHis');
  $dateto2=$dateto11->format('Y-m-d');
  //-----------------------------------------------/
  $storeid7=Session('storeidkk');
  $dataen7=\DB::table('members')->where('storeid', $storeid7);
  $email=$dataen7->value('email');
  $storename7=$dataen7->value('storename');
  //--------------------------------------------------
     $inputx7 = $requestx7->all();
     Log::info($inputx7);
     $zname1=$requestx7->kname1;
     $zname2=$requestx7->kname2;
     $zname3=$requestx7->kname3;
     $zname5=$requestx7->kname5;
     //-------------------------------------------
     $custk=\DB::table('customs')->where('custcode', $zname5);
     $emailcust=$custk->value('email');
     $namecust=$custk->value('name');
     //-----------------------------------------------
     if($zname2==555){

        $arr=[$zname3,$namecust.'_'.$zname1,$zname2 ];
        Mail::to($emailcust)->send(new DeliveryMail($zname3,$namecust.'_'.$zname1,$zname2));
        //-------------------------------------------------
    }

  //---------------------------------------------------
  $sales7= \DB::table('orderlist')->select('datet','ponumber','product','numitem','pricem',
  'quantity','amount','name','codeaddress','storeid','status','loginid','custcode',
  'storename','codeitem','color','size','weight','picture', 'itemk', 'jancode','stock', 'deliplan',
  'deliqty','sendma','shipcode')->get();
 //---------------------------------------------------------------
 $address7= \DB::table('sendto')->select('loginid','custcode','name','post',
 'addresst','receiver','phone','codeaddress','status')->get();
 //--------------------------------------------------------------------------




   return response()->json(['zname1' => $zname1,'zname2' => $zname2,'zname3' => $zname3,'zname4' => $storename7,
   'zname5' => $zname5,'sales7' => $sales7  ,'address7' => $address7 , 'storeid' => $storeid7, 'dateto2' => $dateto2
 ] );
  }



  //++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
    public function manasales3() {
      $storeid=Session('storeidkk');
      //------------------------------------------------
      $sales= \DB::table('orderlist')->select('datet','ponumber','product','numitem','pricem',
      'quantity','amount','name','codeaddress','storeid','status','loginid','custcode',
      'storename','codeitem','color','size','weight','picture', 'itemk', 'jancode','stock',
       'deliplan','deliqty','payment','paycode')->get();
    //---------------------------------------------------------------
    $address= \DB::table('sendto')->select('loginid','custcode','name','post',
    'addresst','receiver','phone','codeaddress','status')->get();
    //--------------------------------------------------------------------------
      return view('manastore.manasales3',[  'sales' => $sales  ,'address' => $address ,
      'storeid' => $storeid  ]);
   }

    public function manasales3post(Request $requeste) {
      //------------date----------------------------------------
    $dateto11 = new Carbon('now');
    $datetof11=$dateto11->format('YmdHis');
    //-------------Request-------------------------------------/
      $ename1='';
      $inpute = $requeste->all();
      Log::info($inpute);
      $ename1=$requeste->kname1;
      $ename2=$requeste->kname2;
      $ename3=$requeste->kname3;
      $ename4=$requeste->kname4;
      $ename5=$requeste->kname5;
      $ename6=$requeste->kname6;
      $ename7=$requeste->kname7;

      //-------------------------------------
      $date3e=date('Y-m-d', strtotime($ename3));

      if($ename7==88){
        //---------------------------------------
        \DB::table('orderlist')->where('ponumber', $ename5)->update([ 'status' => 'shipped' ]);
        //---------------------------------------
      }else{
        //---------------------------------------
        \DB::table('orderlist')->where('ponumber', $ename5)->update([ 'deliplan' => $date3e,   'deliqty' => $ename4 ]);
        //---------------------------------------
      }
      //--------------------------------------------------------------------
    return response()->json(['zname1' => $ename1,'zname2' => $ename2,'zname3' => $ename3
    ,'zname4' => $ename4,'zname5' => $ename5,'zname6' => $ename6,'zname7' => $ename7
    ]);
    }
//++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
  public function manasales5() {
    $storeid=Session('storeidkk');
    //------------------------------------------------
    $sales= \DB::table('orderlist')->select('datet','ponumber','product','numitem','pricem',
    'quantity','amount','name','codeaddress','storeid','status','loginid','custcode',
    'storename','codeitem','color','size','weight','picture', 'itemk', 'jancode','stock',
    'deliplan','deliqty','sendma','payment','paycode','shipcode')->get();
  //---------------------------------------------------------------
  $address= \DB::table('sendto')->select('loginid','custcode','name','post',
  'addresst','receiver','phone','codeaddress','status')->get();
  //--------------------------------------------------------------------------

//----------------------------------------------------------------------------
    return view('manastore.manasales5',[  'sales' => $sales  ,'address' => $address ,'storeid' => $storeid
  ]);
   }

  public function manasales5post(Request $requestx) {
    //------------date----------------------------------------
  $dateto11 = new Carbon('now');
  $datetof11=$dateto11->format('YmdHis');
  $dateto2=$dateto11->format('Ymd');
  //---------------------------------------------------------
  $storeid=Session('storeidkk');
  //-------------Request-------------------------------------/
       $inputx = $requestx->all();
       Log::info($inputx);
       $zname1=$requestx->kname1;
       $zname2=$requestx->kname2;
       $zname3=$requestx->kname3;
       $zname4=$requestx->kname4;
       //---------------------------------------------------------------------
       //------------------------------------------------
       $sales= \DB::table('orderlist')->select('datet','ponumber','product','numitem','pricem',
       'quantity','amount','name','codeaddress','storeid','status','loginid','custcode',
       'storename','codeitem','color','size','weight','picture', 'itemk', 'jancode','stock',
       'deliplan','deliqty','sendma','payment','paycode','shipcode')->get();
     //---------------------------------------------------------------
     $address= \DB::table('sendto')->select('loginid','custcode','name','post',
     'addresst','receiver','phone','codeaddress','status')->get();
     //--------------------------------------------------------------------------
      $arrtt1=array();$arrtt2=array();$mkk='';

     if($zname1!=''){
       $zname1=explode('|',$zname1);
     foreach($zname1 as $pon){
     \DB::table('orderlist')->where('ponumber', $pon)->where('custcode', $zname2)->update([ 'sendma' => $dateto2 ]);
     //------------------------------mail---------------------------------------------------
     $dbpon1=\DB::table('orderlist')->where('ponumber', $pon)->where('custcode', $zname2);
     $productk=$dbpon1->value('product');
     $numitemk=$dbpon1->value('numitem');
     $pricek=$dbpon1->value('pricem');
     $quantityk=$dbpon1->value('quantity');
     $amountk=$dbpon1->value('amount');
     $mailk=$dbpon1->value('loginid');
     $deliplank=$dbpon1->value('deliplan');  $deliplank=date('Y-m-d', strtotime($deliplank));
     $namek=$dbpon1->value('name');
     $mkk=$pon.'_'.$productk.'_'.$numitemk.'_'.$pricek.'_'.$quantityk.'_'.$amountk.'_'.$deliplank.'_'.$namek;

     $arrtt1[]=$mkk; $mkk='';
     //------------------------------------------------------------------------
     }
     $arrtt2=implode('|',$arrtt1);
           $arr=[$arrtt2,$mailk,$dateto11 ];
           Mail::to($mailk)->send(new DeliveryMail($arrtt2,$zname2,$namek));
    }

    //---------------------------------------
     return response()->json(['zname1' => $zname1,'zname2' => $zname2,'zname3' => $zname3 ,'zname4'=> $zname4,
      'sales' => $sales  ,'address' => $address ,'storeid' => $storeid     ]);
   }
//++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
  public function manapayment() {   return view('manastore.manapayment');  }
  public function manacustom() {   return view('manastore.manacustom');  }
  public function manainquiry() {   return view('manastore.manainquiry');  }
  public function manapromain() {   return view('manastore.manapromain');  }

  public function manadelivery5() {   return view('manastore.manadelivery5');  }
//+++++++++++++++++++++++++++profile++++++++++++++++++++++++++++++++++++++++
  public function manaprofile() {
    //---------------------------------------------------------------------
    $infork2= \DB::table('storeinfo')
    ->select('storeid','storename','company','comprofile','establish','capital','president',
    'addresst','bank','homepage','message','piconer','picfab','picnews')->get();
    //------------------------------------------------------------------------
  return view('manastore.manaprofile',[ 'infork2'=> $infork2    ]);
   }

    public function manaprofilepost(Request $requestz9) {
      //------------date----------------------------------------
          $dateto11 = new Carbon('now');
          $datetof11=$dateto11->format('YmdHis');
    //----------------------------------------------------------
    $storeid=Session('storeidkk');
    $strid=$storeid;
//------------------storege file-------------------------------------
$arrtx=array(); $arrtx2=array();$fnamed1=array(); $arrdel=array(); $arrde2=array();
$dpath=storage_path().'/app/public/company/'.$storeid.'';
$dir = $dpath ;
if( is_dir( $dir ) && $handle = opendir( $dir ) ) {
    while( ($file2 = readdir($handle)) !== false ) {
      if( filetype( $path = $dir .'/'. $file2 ) == "file" ) {
      $fnamed1[]=$file2;
      $arrtx[]=$file2;
    }    }}
//-----------------------get img and save to storege----------------------------------
    $upload_file = storage_path().'/app/public/company/'.$storeid.'/';
    $result = $requestz9->has('text');
    if ($result) {    $text9 = $requestz9->input('text');    }
    if ($result) {    $ikey = $requestz9->input('ikey');    }
    if ($result) {    $idele = $requestz9->input('idele');    }
    if ($result) {    $idkk = $requestz9->input('idkk');    }
    if ($result) {    $infork= $requestz9->input('infork');    }
    if ($result) {    $messagek= $requestz9->input('messagek');    }
      if ($result) {    $comprofile= $requestz9->input('comprofile');    }

    if ($requestz9->TotalImages > 0) {
      for ($x= 0; $x < $requestz9->TotalImages; $x++) {
      $result2k = $requestz9->file('images' . $x)->isValid();
      if($result2k){  $ct= Str::random(3);
    $file = $requestz9->file('images' . $x)->move($upload_file , $text9.$ct.$x.".jpg");
    $arrtx[]=$text9.$ct.$x.'.jpg';
    }   }  }
    //----------------------------------------------------------
    if($ikey==999){if(isset($idkk)){
        \DB::table('storeinfo')->where('storeid', $storeid)->update(['piconer' => $idkk  ]);
    }}
    //------------------------------------------------------------
    if($ikey==2177){if(isset($comprofile)){
        \DB::table('storeinfo')->where('storeid', $storeid)->update(['comprofile' => $comprofile  ]);
    }}
    //-----------------------------------------------------------------
    $arrtx2=implode('|',$arrtx);
    //--------------------------------------------------------------
    $idk='';
    $info1=\DB::table('storeinfo')->where('storeid', $storeid);
    $idk=$info1->value('id');
    if($idk!=''){
        \DB::table('storeinfo')->where('storeid', $storeid)->update(['picfab' => $arrtx2  ]);

    }else{
      \DB::table('storeinfo')->insert(['storeid' => $storeid,'picfab' => $arrtx2 ] );
    }
    //-------------------------------------------------------------
    $info2=\DB::table('storeinfo')->where('storeid', $storeid);
    $picfab=$info2->value('picfab');
    $picfab=explode('|',$picfab);
    //-------------------------------------------------------------
     if($ikey==444){
      if(isset($idele)){ $arrdel=explode('|',$idele);
        foreach($arrdel as $rdel){
          Storage::delete('public/company/'.$storeid.'/'. $rdel);
        } } }
    //------------------------------------------------------------
    $arrim3=array();
    $dbdele=\DB::table('storeinfo')->where('storeid', $storeid);
     $picfabk=$dbdele->value('picfab');
     $arrde2=explode('|',$picfabk);
    $arrim3 = array_diff($arrde2, $arrdel);
    $arrim3 = array_values($arrim3);
  $arrim3=implode('|',$arrim3);
  //--------------------------------------------------------------
  \DB::table('storeinfo')->where('storeid', $storeid)->update(['picfab' => $arrim3 ]);
    //----------------------------------------------------------
    $arrfab1=array();$arrfab2=array();$piconer='';
    $dbdele2=\DB::table('storeinfo')->where('storeid', $storeid);
     $arrfab2=$dbdele2->value('picfab');
     $piconer=$dbdele2->value('piconer');
     $arrfab2=explode('|',$arrfab2);
     if($piconer!=''){
     foreach($arrfab2 as $rfab2){   if($rfab2!=$piconer){ $arrfab1[]=$rfab2;   }  }}
//----------------------------------------------------------------------------------
if(isset($messagek)){
\DB::table('storeinfo')->where('storeid', $storeid)->update(['message' => $messagek  ]);

}
//-----------------------------------------------------------------------------
  $arrinfo=array();
  if(isset($infork)){ $arrinfo=explode('|',$infork);
\DB::table('storeinfo')->where('storeid', $storeid)->update(['company' => $arrinfo[0],
'addresst' => $arrinfo[1], 'president' => $arrinfo[2],'capital' => $arrinfo[3] ,
'establish' => $arrinfo[4] ,'bank' => $arrinfo[5] ,'homepage' => $arrinfo[6]
]);
}
//---------------------------------------------------------------------
$infork3= \DB::table('storeinfo')
->select('storeid','storename','company','comprofile','establish','capital','president',
'addresst','bank','homepage','message','piconer','picfab','picnews')->get();
//---------------------------------------------------------------------------
    $text9=count($arrtx);
    return response()->json(['ret'=>$text9, 'name'  => $arrfab1,'storeid'  => $storeid ,
    'name2'  => $picfab,'ikey'  => $ikey, 'idele'  => $idele, 'idkk'  => $piconer,
    'infork'=> $infork,'infork3'=> $infork3,'messagek'=> $messagek,'comprofile'=> $comprofile
  ]);
}
//------------------------------------------------------------------------
  public function storeprofile() {
    $dbinfor= \DB::table('storeinfo')
    ->select('storeid','storename','company','comprofile','establish','capital','president',
    'addresst','bank','homepage','message','piconer','picfab','picnews')->get();


    return view('manastore.storeprofile',[  'dbinfor'=> $dbinfor    ]);

  }
  public function storeproduct() {
    $items51= \DB::table('productlist')->select('category', 'classm', 'itemk', 'product',
    'itemcode','storeid','storename','numitem','featherm','pricem','userid','picturem',
    'storeen','codeitem','picmain')->get();

    return view('manastore.storeproduct',[   'items51'=>$items51         ]);

  }
  public function storeproductpost(Request $requestx) {
     $inputx = $requestx->all();
     Log::info($inputx);
     $zname1=$requestx->kname1;
     $zname2=$requestx->kname2;
  //---------------------------------------
  $items51= \DB::table('productlist')->select('category', 'classm', 'itemk', 'product',
  'itemcode','storeid','storename','numitem','featherm','pricem','picturem',
  'storeen','codeitem','picmain')->get();
   return response()->json(['zname1' => $zname1,'zname2' => $zname2,'items51'=>$items51
 ]);
  }
//---------------------------------------------------------------------
public function sitemana1() {

  return view('manastore.sitemana1');
}
public function sitemana1post(Request $requestz9) {
  $arrtx=array(); $idele='';

  $result2 = $requestz9->has('ikey');
  if ($result2) {       $ikey = $requestz9->input('ikey');   }
  $result = $requestz9->has('text');
  if ($result) {       $text9 = $requestz9->input('text');   }
  $result = $requestz9->has('idele');
  if ($result) {       $idele = $requestz9->input('idele');   }

  if($ikey==81){   $upload_file = storage_path().'/app/public/img_cm3/';  $imgname='cm3img'; }
  if($ikey==82){   $upload_file = storage_path().'/app/public/img_cm4/'; $imgname='cm4img';  }
  if($ikey==83){   $upload_file = storage_path().'/app/public/img_cm5/';  $imgname='cm5img'; }
   //------------------------------------------------------------------
   if ($requestz9->TotalImages > 0) {
     for ($x= 0; $x < $requestz9->TotalImages; $x++) {
     $result2k = $requestz9->file('images' . $x)->isValid();
     if($result2k){  $ct= Str::random(3);
   $file = $requestz9->file('images' . $x)->move($upload_file , $imgname.$ct.$x.".jpg");
   $arrtx[]=$imgname.$ct.$x.'.jpg';
   }   }  }
 $countk=count($arrtx); $arrdele=array();

 //------------------------------------------------------------------------
     if($ikey==53){  if($idele!==''){    $arrdele=explode('|',$idele);
     foreach($arrdele as $dele){   Storage::delete('public/img_cm3/'.$dele);}}      
     $arrdele=array();  }
 //------------------------------------------------------------------------
     if($ikey==54){  if($idele!==''){    $arrdele=explode('|',$idele);
     foreach($arrdele as $dele){   Storage::delete('public/img_cm4/'.$dele);}}
     $arrdele=array();  }

//------------------------------------------------------------------------
    if($ikey==55){  if($idele!==''){    $arrdele=explode('|',$idele);
    foreach($arrdele as $dele){   Storage::delete('public/img_cm5/'.$dele);}}
    $arrdele=array();  }
//------------------------------------------------------------------------
$arrcm3=array();
$pathcm3=storage_path().'/app/public/img_cm3/';
$dir3 = $pathcm3 ;
if( is_dir( $dir3 ) && $handle3 = opendir( $dir3 ) ) {
    while( ($file3= readdir($handle3)) !== false ) {
      if( filetype( $path3 = $dir3 .'/'. $file3 ) == "file" ) {
      $arrcm3[]=$file3;
    }    }}
//-----------------------------------------------------------------------
$arrcm4=array();
$pathcm4=storage_path().'/app/public/img_cm4/';
$dir4 = $pathcm4 ;
if( is_dir( $dir4 ) && $handle4 = opendir( $dir4 ) ) {
    while( ($file4= readdir($handle4)) !== false ) {
      if( filetype( $path4 = $dir4 .'/'. $file4 ) == "file" ) {
      $arrcm4[]=$file4;
    }    }}
//-----------------------------------------------------------------------
$arrcm5=array();
$pathcm5=storage_path().'/app/public/img_cm5/';
$dir5 = $pathcm5 ;
if( is_dir( $dir5 ) && $handle5 = opendir( $dir5 ) ) {
    while( ($file5= readdir($handle5)) !== false ) {
      if( filetype( $path5 = $dir5 .'/'. $file5 ) == "file" ) {
      $arrcm5[]=$file5;
    }    }}
//-----------------------------------------------------------------------






   return response()->json(['ret'=>$countk, 'name'  => $arrtx , 'ikey'  => $ikey,
    'arrcm3'  => $arrcm3,'arrcm4'  => $arrcm4,'arrcm5'  => $arrcm5,'idele'  => $idele
  ]);
 //---------------------------------------------------------------
}






//++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
  //--------------------------------------------------------
  public function ajax5a() {

    return view('manager.ajax5a');
  }
  public function ajax5apost(Request $requestx) {
     $inputx = $requestx->all();
     Log::info($inputx);
     $zname1=$requestx->kname1;
     $zname2=$requestx->kname2;
  //---------------------------------------

   return response()->json(['zname1' => $zname1,'zname2' => $zname2]);
  }



}
