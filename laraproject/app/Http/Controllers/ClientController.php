<?php

namespace App\Http\Controllers;
//use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
//use Request;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;
use Illuminate\Support\Str;
use App\Models\Hiroodb;
use Log;
use Illuminate\Validation\Rule;

class ClientController extends Controller
{
    public function cproduct() {
      $out='';
      if(isset($_GET['out'])){	$out=$_GET['out'];
        \Session::put('passwordkk', '');
        \Session::put('emailkk', '');
        \Session::put('namekk', '');
        \Session::put('storeidkk', '');
        return view('members.login.signin');
      }
      //------------------------------------------------
      $storeid=Session('storeidkk');
      $dataen=\DB::table('members')->where('storeid', $storeid);
      $idk=$dataen->value('id');
     $strid=$storeid;
     $arrst=[$strid,'999'];
      //--------------------------------------------
      $category51= \DB::table('productlist')->select('category')->where('storeid', $storeid)->get();
      $items21= \DB::table('menuk')->select('category', 'classm', 'itemk', 'product', 'itemcode')->get();
      $items51= \DB::table('productlist')->select('category', 'classm', 'itemk', 'product', 'itemcode',
      'storeid','storename','numitem','featherm','pricem','userid','codeitem')->where('storeid', $storeid)->get();

      return view('client.clientproduct',['items21'=>$items21,'items51'=>$items51,'category51'=>$category51 ] ,
  compact('arrst'));
     }

public function cprofile(Request $request) {
  $pro21= \DB::table('menuk')->select('category', 'classm', 'itemk', 'product', 'itemcode')->get();
  $pro51= \DB::table('productlist')->select('category', 'classm', 'itemk', 'product', 'itemcode','storeid','storename','numitem','featherm','pricem','userid')->where('userid', 'like', 'chen3%')->get();
  return view('client.clientprofile',['pro21'=>$pro21,'pro51'=>$pro51] );
}

public function cmain() {
  $storeid=Session('storeidkk');
  $category51= \DB::table('productlist')->select('category')->where('storeid', $storeid)->get();
  $main21= \DB::table('menuk')->select('category', 'classm', 'itemk', 'product', 'itemcode')->get();
  $main51= \DB::table('productlist')->select('category', 'classm', 'itemk', 'product', 'itemcode','storeid','storename','numitem','featherm','pricem','userid')->get();

  return view('client.clientmain',['main21'=>$main21,'main51'=>$main51,'category51'=>$category51]  );
 }

public function cpronew() {
$new21= \DB::table('menuk')->select('category', 'classm', 'itemk', 'product', 'itemcode')->get();

return view('client.clientpronew',['new21'=>$new21]);
}

public function cpronewpost(Request $requestx2) {


  //------------------------------------------
  $inputx2 = $requestx2->all();
  Log::info($inputx2);
  $namex1=$requestx2['namet1'];
$namex2=$requestx2['namet2'];
  $namex3=$requestx2['namet3'];
$namex4=$requestx2['namet4'];
  $namex5=$requestx2['namet5'];
return response()->json(['namex1'=> $namex1 ]);
 }

//public function cpronewaj() {  return view('client.clientpronewaj'); }

public function ajax51b() {return view('client.ajax51b');    }
public function ajax51a() {
  $ajax21= \DB::table('menuk')->select('category', 'classm', 'itemk', 'product', 'itemcode')->get();

  return view('client.ajax51a',['ajax21'=>$ajax21]);
}

public function clientajax51apost(Request $requestxz) {
  //------------date----------------------------------------
      $dateto11 = new Carbon('now');
      $datetof11=$dateto11->format('YmdHis');
//-----------------------------------------------------
   $inputxz= $requestxz->all();
   Log::info($inputxz);
   $namex0=$requestxz->namet0;
   $namex1=$requestxz->namet1;
   $namex2=$requestxz->namet2;
   $namex3=$requestxz->namet3;
   $namex4=$requestxz->namet4;
   $namex5=$requestxz->namet5;
   //----------------------------------------------------------
   $storeid=Session('storeidkk');
  // $storename='111';/////??????????????????????????????????????
   $cnt=0;$mdb2='';
$db51= \DB::table('productlist')->select('category','numitem')->where('storeid', $storeid)->get();
foreach($db51 as $mkk){   foreach($mkk as $mkk2){

if($namex0==$mkk2){ $cnt +=1;$mkk3=$mkk2;}
}}
//-----------------------------------------------------
 if($cnt>0){ $mdb2='kkkk';
return response()->json(['mdb2' => $mdb2]);
 }else{   $numkt= Str::random(3);  $codeitem='i'.$datetof11.$numkt;
  \DB::table('productlist')->insert(['category' => $namex1,'classm' => $namex2,'itemk' => $namex3,
  'storeid' => $storeid,'product' => $namex4,'itemcode' => $namex5,'numitem' => $namex0,
  'datet' => $datetof11,'codeitem' => $codeitem ]);
return response()->json(['mdb2' => $mdb2,'namex0' => $namex0,'namex1' => $namex1,'namex2' => $namex2,
'namex3' => $namex3,'namex4' => $namex4,'namex5' => $namex5]);
}
}

 public function cedit6a() {
   $storeid=Session('storeidkk');
  // $storename='111';
   $dbedit= \DB::table('productlist')->select('category', 'classm', 'itemk', 'product'
   ,'itemcode','storeid','storename','numitem','bland','makerm','featherm','stockm'
   ,'pricem','weightm','sizem','colorm','jancode','specm','userid')
   ->where('storeid', $storeid)->get();
   $dataen=\DB::table('members')->where('storeid', $storeid);
   $email=$dataen->value('email');

   return view('client.clientedit6a',[ 'dbedit'  => $dbedit  ]);
 }

 public function ajax6apost(Request $requestx6) {
   //------------date----------------------------------------
       $dateto11 = new Carbon('now');
       $datetof11=$dateto11->format('YmdHis');
 //----------------------------------------------------------
$arrsz1=array(); $sizek=''; $arrco1=array(); $colork='';
$storeid=Session('storeidkk');
//$storename='111';
$datamt=\DB::table('members')->where('storeid', $storeid);
$dataja=$datamt->value('storename');
  $idk=$datamt->value('id');
  $strid=$storeid;
//--------------------------------------------------------
$input6 = $requestx6->all();
Log::info($input6);
$pass=$requestx6->password;
$editv1=$requestx6->name1;
$editv2=$requestx6->name2;
$editv3=$requestx6->name3;
$editv4=$requestx6->name4;
$editv5=$requestx6->name5;
$editv6=$requestx6->name6;
$editv7=$requestx6->name7;
$editv8=$requestx6->name8;
$editv9=$requestx6->name9;
$editv10=$requestx6->name10;
$editv11=$requestx6->name11;
$editv12=$requestx6->name12;
$editv13=$requestx6->name13;
$editv14=$requestx6->name14;
$editv15=$requestx6->name15;
$editv16=$requestx6->name16;
//---------------------------------------------------------------
\DB::table('productlist')->where('numitem', $editv15)->where('storeid', $storeid)
->update(['bland' => $editv1,'featherm' => $editv2,'makerm' => $editv3,'pricem' => $editv4,
'weightm' => $editv5,'jancode' => $editv6,'stockm' => $editv7,'colorm' => $editv8,
'sizem' => $editv9,'specm' => $editv10,'storename' => $dataja  ]);

  //-------------------------------------------------------------------

$arrsz1=explode('|',$editv9);
foreach($arrsz1 as $siz){ $sizek=$sizek.$siz.', ';                   }
$arrco1=explode('|',$editv8);
foreach($arrco1 as $col){ $colork=$colork.$col.', ';                 }

//-----------------------------------------------------------------------


//-----------------------------------------------------------------------
return response()->json(['editv1'=>$editv1,'editv2'=>$editv2,'editv3'=>$editv3,
'editv4'=>$editv4,'editv5'=>$editv5,'editv6'=>$editv6,'editv7'=>$editv7,
'editv8'=>$colork,'editv9'=>$sizek,'editv10'=>$editv10,'editv11'=>$editv11,
'editv12'=>$editv12,'editv13'=>$editv13,'editv14'=>$editv14,'editv15'=>$editv15,'editv16'=>$editv16
  ]);
 }

//-----------------------client.clientdele-----商品削除--------------------------------------------
public function clientdele() {
  $dbdele= \DB::table('productlist')->select('id','category', 'classm', 'itemk', 'product',
  'itemcode','storeid','storename','numitem','bland','makerm','featherm','stockm',
  'pricem','weightm','sizem','colorm','jancode','specm','codeitem');
//------------------------------------------------------------------------
  return view('client.clientdele',[  'dbdele'=> $dbdele     ]);
}

public function clientdelepost(Request $requestd) {
  $inputd= $requestd->all();
  Log::info($inputd);
  $xname1=$requestd->kname1;
  $xname2=$requestd->kname2;
  $arrkk=array();
  $storeid=Session('storeidkk');
  //$storename='111';

  if(isset($xname1)){
   $arrkk=explode('|',$xname1);
   foreach($arrkk as $ame1){
     \DB::table('productlist')->where('codeitem', $ame1)->where('storeid', $storeid)
     ->update([ 'userid'=> "", 'datet'=> "",'category'=> "", 'classm'=> "", 'itemk'=> "", 'product'=> "",
     'itemcode'=> "",'storeid'=> "",'storename'=> "",'numitem' => "",'bland' => "",'featherm' => "",
     'makerm' => "",'pricem' =>0,'colorm' => "",'sizem' => "",'weightm' => '','jancode' => '',
     'picturem' => '','picturem2' => '','stockm' => 0,'colorm' => "",'sizem' => "",'specm' => "",'codeitem' => ""   ]);
   }   }

  $dbdele= \DB::table('productlist')->select('id','category', 'classm', 'itemk', 'product',
  'itemcode','storeid','storename','numitem','bland','makerm','featherm','stockm',
  'pricem','weightm','sizem','colorm','jancode','specm','codeitem')->get();


  return response()->json(['xname1'=> $xname1, 'xname2'=> $xname2 ,
  'dbdele'=> $dbdele, 'storeid'=> $storeid  ]);

}
//----------------------------------img------------------------------------

//--------------------imgdele----------------------------------------------------
public function cimgdele1() {
  $storeid=Session('storeidkk');
  $codeitem='';
  if(isset($_GET['codeitem'])){   $codeitem=$_GET['codeitem'];             }
  $arrmain1=array();  $arrmain2=array();
  $dbpict=\DB::table('productlist')->where('codeitem', $codeitem);
  $dbpic5 =$dbpict->value('picmain');
  $dbpic7 =$dbpict->value('picturem');
  $dbpic5 =explode('|',$dbpic5 );
  $dbpic7 =explode('|',$dbpic7 );
  foreach($dbpic5 as $pic5){  if($pic5!=''){ $arrmain1[]=$pic5;         }    }
foreach($dbpic7 as $pic7){  if($pic7!=''){ $arrmain2[]=$pic7;         }    }

  return view('client.clientimgdele1',['arrmain1' => $arrmain1,'arrmain2' => $arrmain2 ]);
}
//-----------------------------------------------------------------------
public function cimgdele1post(Request $requestz) {
  $storeid=Session('storeidkk');
  $input = $requestz->all();
  $zname1=$requestz->kname1;
  $zname2=$requestz->kname2;
  $codeitem=$requestz->kname3;
  $ikey=$requestz->kname5;
   Log::info($input);


   $dbpict=\DB::table('productlist')->where('codeitem', $codeitem)->where('storeid', $storeid);
   $dbpic5 =$dbpict->value('picmain');
   $dbpic7 =$dbpict->value('picturem');
   $dbpic5 =explode('|',$dbpic5 );
   $dbpic7 =explode('|',$dbpic7 );
foreach($dbpic5 as $pic5){
if($pic5!=''){    if(($key = array_search($pic5, $zname1)) !== false) {}else{
$arrmain2[]=$pic5;
}}}
foreach($dbpic7 as $pic7){
if($pic7!=''){    if(($key7 = array_search($pic7, $zname1)) !== false) {}else{
$arrmain7[]=$pic7;
}}}
//------------------------------------------------------------------
 if($ikey=="x200"){
$fdiff=implode('|',$arrmain2);
\DB::table('productlist')->where('codeitem', $codeitem)->where('storeid', $storeid)->update(['picmain' => $fdiff ]);
}
//------------------------------------------------------------------
 if($ikey=="x500"){
$fdiff7=implode('|',$arrmain7);
\DB::table('productlist')->where('codeitem', $codeitem)->where('storeid', $storeid)->update(['picturem' => $fdiff7 ]);
}
//-------------------------------------------------------------------

   return response()->json(['zname1'=>$zname1, 'zname2'  => $zname2, 'zname5'  => $arrmain2, 'zname7'  => $arrmain7
         ]);

}

public function ecapply() {return view('applyex.ecapply');    }
//--------------------------------------------------------


//===========================Img to DB and  Lara ======================-
public function clientpic1() {
//  $numitem='';
//  $storeid=Session('storeidkk');
  $storeid='T20210827131718UV';   $storename='掃除機';
  $codeitem='i202112291219384Qw';

  if(isset($_GET['amenu4'])){   $numitem=$_GET['amenu4'];             }
  $numitem='sojiki-at22';
  $dbpic1=\DB::table('productlist')->select('numitem','userid','picturem','storename','codeitem','product','picturem2','picmain')
  ->where('storeid', $storeid)->where('codeitem', $codeitem)->get();
//----------------------------------------------------------------------
$dbpic=\DB::table('productlist')->where('codeitem', $codeitem);
 $picturem=$dbpic->value('picturem');
$picturem2=$dbpic->value('picturem2');
$picmain=$dbpic->value('picmain');

return view('client.clientpic1',[  'dbpic1' => $dbpic1 ,'picturem' => $picturem,
'picturem2' => $picturem2,'picmain' => $picmain     ]);
}

//-----------------------------------------------------------------------
public function clientpic1ajaxpost(Request $requestz9) {
  //$storeid=Session('storeidkk');
  $storeid='T20210827131718UV'; $codeitem='';
  $arrtx1=array();  $arrtx2=array();  $arrtx3=array();  $arrtx5=array();
  $arrdb1=array();  $arrdb2=array();  $arrdb3=array();  $arrdb5=array();
  //-------------------------------------------------------------------
  $upload_file = storage_path().'/app/public/company/';
  $result1 = $requestz9->has('text');  if ($result1) { $text9 = $requestz9->input('text');  }
  $result2 = $requestz9->has('ikey2');  if ($result2) { $ikey2 = $requestz9->input('ikey2');  }
  $result3 = $requestz9->has('codeitem');  if ($result3) { $codeitem = $requestz9->input('codeitem');  }
  //-----------------------------------------------------------------------
  $kk=0;
  $dbpict=\DB::table('productlist')->where('codeitem', $codeitem);
  $picmain=$dbpict->value('picmain');   //$picturem=$dbpict->value('picturem');
  $arrtx1=explode('|',$picmain);        //$arrtx6=explode('|',$picturem);
  if($ikey2=='2281'){   $kk=5-count($arrtx1);} //メイン画像枚数設定5
  //-----------------------------------------------------------------
  if ($requestz9->TotalImages > 0) {
    for ($x= 0; $x < $requestz9->TotalImages; $x++) {   $j= Str::random(3);
      if($x<=$kk){
    $result2k = $requestz9->file('images' . $x)->isValid();
    if($result2k){  $file = $requestz9->file('images' . $x)->move($upload_file , $text9.$j.$x.".jpg");
      $arrtx1[]=$text9.$j.$x;
      $arrtx2[]=$text9.$j.$x;
      }   }  }
    }
//----------------------DBに書き込み--------------------------------------
if($ikey2=='2281'){
$arrtx1=implode('|',$arrtx1);
\DB::table('productlist')->where('codeitem', $codeitem)->update(['picmain' => $arrtx1 ]); //where('storeid', $storeid)->
}
//--------------------------------------------------------------------
$arrma1=array(); $arrma2=array();
$arrtu1=array();
$dbpict8=\DB::table('productlist')->where('codeitem', $codeitem);
$picmain8=$dbpict8->value('picmain');     $arrma1=explode('|',$picmain8);
foreach($arrma1 as $rma1){ if($rma1!=''){ $arrma2[]=$rma1;      }         }
  return response()->json(['text9'=>$text9, 'name'  => $arrma2, 'ikey2'  => $ikey2
 ]);
//---------------------------------------------------------------
}





//===========================img============================================
public function cimg() {
  $arrmain=array(); $arrmain5=array();
  $storeid=Session('storeidkk');
  if(isset($_GET['amenu4'])){   $codeitem=$_GET['amenu4'];             }
  //-------------------------------------------------------
  $dbpict=\DB::table('productlist')->where('codeitem', $codeitem)->where('storeid', $storeid);
  $dbmain=$dbpict->value('picmain'); $dbmain5=$dbpict->value('picturem');
  $dbmain=explode('|',$dbmain);     $dbmain5=explode('|',$dbmain5);
  foreach($dbmain as $main){  if($main!=''){ $arrmain[]=$main;         }          }
  foreach($dbmain5 as $main5){  if($main5!=''){ $arrmain5[]=$main5;         }          }

return view('client.clientimg',[  'arrmain' => $arrmain,'arrmain5' => $arrmain5 ]); //,'arr' => '333'
}


public function cimgpost(Request $requesti) {
  //--------------設定----------------------------------------
  $storeid=Session('storeidkk');
  $upload_file = storage_path().'/app/public/company/'.$storeid.'/';
  $arrtx1=array();$arrtx2=array();$arrtx3=array();  $arrtx5=array();$arrtx6=array();
  //----------------DATA-取得--------------------------------------------
  $result = $requesti->has('text');  if ($result) {  $text9 = $requesti->input('text');  }
  $result3 = $requesti->has('codeitem');  if ($result3) {  $codeitem = $requesti->input('codeitem');  }
  $result5 = $requesti->has('ikey');  if ($result5) {  $ikey = $requesti->input('ikey');  }
  //------------------------書き込み前のDB-------------------------------------------------
  $dbsave=\DB::table('productlist')->where('codeitem', $codeitem)->where('storeid', $storeid);
  $dbsave3=$dbsave->value('picmain'); $dbsave5=$dbsave->value('picturem');
  $arrtx1=explode('|',$dbsave3);  if(count($arrtx1)>=6){ $kk=0;      }else{  $kk=6-count($arrtx1);   }
  $arrtx5=explode('|',$dbsave5);  if(count($arrtx5)>=9){ $kk=0;      }else{  $kk=9-count($arrtx5);   }
  //----------------画像--取得----------------------------------------------------------
  if ($requesti->TotalImages > 0) {
    for ($x= 0; $x < $requesti->TotalImages; $x++) { $j= Str::random(3);
      if($x<$kk){
    $result2k = $requesti->file('images' . $x)->isValid();
    if($result2k){
  $file = $requesti->file('images' . $x)->move($upload_file , $text9.$j.$x.".jpg");
  $arrtx1[]=$text9.$j.$x;
  $arrtx2[]=$text9.$j.$x;
  $arrtx5[]=$text9.$j.$x;
  $arrtx6[]=$text9.$j.$x;
  }   }  }}
  //----------------DB書き込み-------------------------------------------------
  if($ikey=='x100'){
  $arrtx1=implode('|',$arrtx1);
  \DB::table('productlist')->where('codeitem', $codeitem)->where('storeid', $storeid)->update(['picmain' => $arrtx1 ]);
}
if($ikey=='x500'){
$arrtx5=implode('|',$arrtx5);
\DB::table('productlist')->where('codeitem', $codeitem)->where('storeid', $storeid)->update(['picturem' => $arrtx5 ]);
}
//-------------------------------------------------------------------------
//-----------------------------------------------------------------------
  $tex=$kk;
  return response()->json(['ret'=>$tex,'ikey'  => $ikey, 'name'  => $arrtx2,'name5'  => $arrtx6  ]);
}





//-------------------------------end----------------------------------------------
}
