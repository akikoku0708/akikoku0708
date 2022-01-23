<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
//use Request;
//use App\Mail\ContactMail;
//use App\Mail\SigninMail;
use App\Mail\LogsinMail;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\InquiryRequest;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Log; //Ajaxには必要
//use App\Http\Requests\MailRequest;
use App\Models\User;
use Illuminate\Support\Facades\Validator;

class ContestController extends Controller
{

public function lay() {return view('members.creat.lay_sample');    }
public function lay2() {return view('members.creat.lay_sample2');    }
 public function homet2(Request $request) {
      return view('main.homet2',['users'=>$request->users]);
    }
  public function homet3(Request $request2) {
    return view('main.homet3',['usersx'=>$request2->usersx]);
   }


public function homet() {
  $idxx1='111';
$arrt=[$idxx1,'333'];
return view('main.homet',compact( 'arrt'));
}
//-------------------------------------------------------
public function logout() {
  \Session::put('custsesspass', '');
  \Session::put('custsessemail', '');
  return view('main.logout');
  //--------------------------------------------
}

//-------------------------------------------------------------

//---------------------------------------------------------------------
public function majax5a() {return view('meisis.ajax5a');    }
public function majax5apost(Request $requestx) {
  $storeid='T202108271315502H'; $sname='';$login='';
   $inputx = $requestx->all();
   Log::info($inputx);
   $zname1=$requestx->kname1; //ikey
   $zname2=$requestx->kname2; //email
   $zname3=$requestx->kname3; //name
   $zname5=$requestx->kname5; //pass1
   $zname6=$requestx->kname6; //pass2
   $zname7=$requestx->kname7; //code
   $datamt=\DB::table('members')->where('storeid', $storeid);
   $dataja=$datamt->value('storename');
   $email=$datamt->value('email');
   $password=$datamt->value('password');
   $pre_userid=$datamt->value('pre_userid'); //b8PYeo67
   if($zname7==$pre_userid){ $sname=$dataja;  }else{     $login='false1';   }


//---------------------------------------
/*
$validated = $requestx->validate([
'email'     => ['required', 'email:rfc'],
'namek'      => ['required', 'max:20'],
'pass1'      => ['required', 'max:20'],
'pass2'      => ['required', 'same:codek'],
'codek'   => ['max:10', 'max:20'],
], [
'email.required' => ':attributeは必須です。',
'namek.required' => ':attributeは必須です。',
'pass1.required' => ':確認コードは必須です。',
'pass2.required' => ':入力コードは必須です。',
'codek.required' => ':attributeは必須です。',
], [
'email' => 'メールアドレス',
'namek' => '名前',
'pass1' => '確認コード',
'pass2' => '入力コード',
'codek' => 'パスワード',
]
);
*/





 return response()->json(['zname1' => $zname1,'zname2' => $zname2,'zname3' => $zname3,
  'zname5' => $zname5,'zname6' => $zname6,'zname7' => $zname7,'zname8' => $sname,'zname9' => $login
]);
}
//----------------------------------------------------------------
public function login() {  return view('meisis.login');   }
public function loginpost(Request $requestx) {
  $sname='';$login='';$email='';$password='';
   $inputx = $requestx->all();
   Log::info($inputx);
   $zname1=$requestx->kname1; //email
   $zname2=$requestx->kname2; //pass
   $datamt=\DB::table('members')->where('email', $zname1);
   $dataja=$datamt->value('storename');
   $email=$datamt->value('email');
   $password=$datamt->value('password');
  if($zname1==$email&&$password==$zname2){ $sname='passok';  }else{
    $sname='false1';
    //DBに書き込み　email code date ???????

  }


 return response()->json(['zname1' => $email,'zname2' => $password,'zname3' => $sname    ]);
}
//------------------------------------------------------------------
public function forget() {  return view('meisis.forget');   }
public function forgetpost(Request $requestx) {
  $email='';$zname2='';$zname8='';$zname3='';
  $dateto = new Carbon('now');
  $datetof=$dateto->format('YmdHis');
   $inputx = $requestx->all();
   Log::info($inputx);
   $zname1=$requestx->kname1; //ikey
   $zname2=$requestx->kname2; //mail
   $zname3=$requestx->kname3; //pass1
   $zname5=$requestx->kname5; //pass2
   $zname6=$requestx->kname6; //code

   $datamt=\DB::table('members')->where('email', $zname2);
   $email=$datamt->value('email');
   $codef=$datamt->value('pre_userid');
   $strcode=Str::random(8);
   //----------------------------------------------------------
   if($email!=''&&$zname1=="162"){
    \DB::table('members')->where('email', $zname2)->update(['pre_userid' => $strcode,'datet' => $datetof ]);
    Mail::to($zname2)->send(new LogsinMail('確認コード：　'.$strcode.'','登録メール：　'.$zname2,''));
   }
   //-----------------------------------------------------------------------
   $cnt=0;
   if($zname3==$zname5&&$zname1=="165"){

     \DB::table('members')->where('email', $zname2)->where('pre_userid', $zname6)->update(['password' => $zname3,'datet' => $datetof ]);
        Mail::to($zname2)->send(new LogsinMail('新パスワード：　'.$zname3.'','登録メール：　'.$zname2,''));
 }


   //-----------------------------------------------------------------
  if($zname3!=$zname5){  $zname8='xx165';        }

 return response()->json(['zname1' => $zname1,'zname2' =>$zname2,'zname3' =>$zname3,
 'zname5' =>$zname5,'zname8' =>$zname8 ]);
}
//----------------------------------------------------------------
public function creat() {

//  Mail::to('can@applyex.com')->send(new LogsinMail('can@applyex.com 様  がログインしました','vvvv','8787'));

  return view('meisis.creat');   }
public function creatpost(Request $requestx) {
  $sname='';$login=''; $arrmail=array(); $arrmail2=array();$email='';$strcode='';$storeiddb='';
  $zname2='';
  $dateto = new Carbon('now');
  $datetof=$dateto->format('YmdHis');
   $inputx = $requestx->all();
   Log::info($inputx);
   $zname1=$requestx->kname1; //ikey
   $zname2=$requestx->kname2; //email
   $zname3=$requestx->kname3; //name
   $zname5=$requestx->kname5; //pass1
   $zname6=$requestx->kname6; //pass2
   $zname7=$requestx->kname7; //code
   $strcode=$codet= Str::random(8);
   $storeid=Str::random(5).$datetof;
   $datamt=\DB::table('members')->where('email', $zname2);
   $email=$datamt->value('email');
   $storeiddb=$datamt->value('storeid');
   //-------------------------152--------------------------------------------
   if($zname2!=''&&$zname1=='152'){
   if($email==$zname2){
     if($storeiddb!=''){   $sname='88888';     }else{  $sname='7777';
       \DB::table('members')->where('email', $zname2)->update(['pre_userid' => $strcode,'datet' => $datetof ]);
       Mail::to($zname2)->send(new LogsinMail('確認コード：　'.$strcode.'','登録メール：　'.$zname2,''));
     }
   }else{    $sname='7777';
  \DB::table('members')->insert(['email' => $zname2,'pre_userid' => $strcode,'datet' => $datetof ]);// 'storeid' => $storeid]
   Mail::to($zname2)->send(new LogsinMail('確認コード：　'.$strcode.'','登録メール：　'.$zname2,''));
 }}
//----------------------------153-----------------------------------------------------------
if($zname2!=''&&$zname1=='153'){$sname='6666';

  \DB::table('members')->where('pre_userid', $zname7)->update(['password' => $zname5,'name' => $zname3,
  'datet' => $datetof,'userid' => $zname2,'storeid' => $storeid ]);
  Mail::to($zname2)->send(new LogsinMail('名前：　'.$zname3.'','登録メール：　'.$zname2,''));
}
//-----------------------------------------------------------------


//  Mail::to('can@applyex.com')->send(new LogsinMail('can@applyex.com 様  がログインしました','vvvv','8787'));

   return response()->json(['zname1' => $zname1,'zname2' => $zname2,'zname3' => $zname3,
    'zname5' => $zname5,'zname6' => $zname6,'zname7' => $zname7,'zname8' => $sname//,'zname9' => $login
  ]);
}
//----------------------------------------------------------------
public function meisis() {  return view('meisis.meisis');   }
public function memo() {  return view('meisis.memo');   }







}
