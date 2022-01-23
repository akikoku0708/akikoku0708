<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
//use Request;
use App\Mail\ContactMail;
use App\Mail\SigninMail;
use App\Mail\SforgetMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;

class CustomsController extends Controller
{
//-----------------------signin-------------------------------
public function signin() {  return view('customs.signin');  }
public function signin2(Request $requestsign11) {
  //------------date----------------------------------------
      $dateto11 = new Carbon('now');
      $datetof11=$dateto11->format('YmdHis');
  //-------------Request-------------------------------------
      $email11=$requestsign11->email;
      $password11=$requestsign11->password;
      $che11=$requestsign11->che1;
      $manakeyword=$requestsign11->manakeyword;
      //-----------------DB-----------------------------------
      $dbsign11=\DB::table('customs')->where('email', $email11);
      $passwordb11=$dbsign11->value('password');
      $name11=$dbsign11->value('name');
      $custcode=$dbsign11->value('custcode');
     $requestsign11['passwordb11']=$passwordb11;
      //----------------validation-------------------------------------
      $requestsign11->validate([
        'email'     => ['required', 'email:rfc','max:100'],
        'passwordb11'      => ['required', 'max:20'],
        'password'     => ['required', 'max:20','same:passwordb11'],
        ], [
          'email.required' => ':attributeは必須です。',
          'password.required' => ':attributeは必須です。',
          'passwordb11.required' => ':attributeは必須です。',
      ], [
        'email' => '',
        'password' => '',
        'passwordb11' => 'パスワードは一致していません！',
      ] );
//------------------mail-------------------------------------------------
if($passwordb11==$password11){
  Mail::to($email11)
  ->send(new SigninMail(''.$name11.' 様  がログインしました',$email11,$dateto11));
}
//-------------Cookies-----------------------------------------------
//\Session::put('custsesspass', $password11);
//\Session::put('custsessemail', $email11);
\Session::put('custsessname', $name11);
\Session::put('custsesscode', $custcode);
//----------------------session-------------------------------
if($che11=='checkbox'){
  \Cookie::queue('custpass', $password11,2592000);
  \Cookie::queue('custemail',$email11,2592000);

}else{
  \Cookie::queue('custpass', null);
  \Cookie::queue('custemail', null);
}
//-------------------------------------------------------------------
  $arrsign=[ $dateto11, $email11, $password11,$che11,$passwordb11, $name11.'様' ,$manakeyword   ];
return view('customs.signin2',compact( 'arrsign'));
//return view('manager.home2');

}

public function signin3() {return view('customs.signin3');    }

//------------------------sforget-------------------------------------------------
public function sforget0() {return view('customs.sforget0');    }
public function sforget1() {  return view('customs.sforget1');    }
public function sforget2() {return view('customs.sforget2');    }
public function sforget3() {return view('customs.sforget3');    }

public function sforget1post(Request $requestsign12) {
  //----------------------date-------------------------
  $dateto12 = new Carbon('now');
  $datetof12=$dateto12->format('YmdHis');
  //------------request------------------------------------
  $email12=$requestsign12->email;
  //--------------db-----------------------------------
  $datast12=\DB::table('customs')->where('email', $email12);
  $pre_userid12=$datast12->value('pre_userid');
  $codet12= Str::random(8);

 if($pre_userid12!=''){ $email12b=$email12;  }else{$email12b='xxxxxzz'; }
$requestsign12['email12']=$email12b;
//-------------------------validation-----------------------------

  $validated = $requestsign12->validate([
    'email12'      => ['required', 'max:20'],
     'email'     => ['required', 'email:rfc','max:20','same:email12'],

      ], [
      'email.required' => ':attributeは必須です。',
'email12.required' => ':attributeは必須です。',
  ], [
     'email' => '',
     'email12' => '同じメールアドレスが存在してる',
  ]
    );


  //----------------mail------------------------------------

  if($email12b==$email12){
  //---------------------db----------------------------------
  \DB::table('customs')->where('email', $email12)->update(['pre_userid' => $codet12,'datet' => $datetof12  ]);
  //-------------------------------------------------
  Mail::to($email12)
    ->send(new SforgetMail('確認コード: '.$codet12,$email12,$dateto12));
  }else{}

$arr12=['確認コード: '.$codet12,$email12,$dateto12 ];
    return view('customs.sforget1',compact( 'arr12'));

}
//--------------------------------------------------------------
public function sforget2post(Request $requestsign13) {
  $dateto13 = new Carbon('now');
  $datetof13=$dateto13->format('YmdHis');
  $email13=$requestsign13->email;
  $password13=$requestsign13->password;
  $password13b=$requestsign13->password2;
  $pre13=$requestsign13->code2z;

  $datast13=\DB::table('customs')->where('email', $email13);
  $pre_userid13=$datast13->value('pre_userid');

  $requestsign13['prek13']=$pre_userid13;
  $validated2 = $requestsign13->validate([
     'prek13'     => ['required', 'max:20'],
     'code2z'      => ['required', 'max:20', 'same:prek13'],
     'password2'     => ['required', 'max:20'],
     'password'      => ['required', 'max:20', 'same:password2'],
      ], [
      'prek13.required' => ':attributeは必須です。',
      'code2z.required' => ':attributeは必須です。',

      'password.required' => ':attributeは必須です。',
    'password2.required' => ':attributeは必須です。',

  ], [
     'prek13' => '',
     'code2z' => '確認コードが正しくない',
     'password' => '',
     'password2' => 'パスワードの入力が間違っています。',
  ] );

    \DB::table('customs')->where('email', $email13)->update(['password' => $password13,'datet' => $datetof13  ]);
    Mail::to($email13)
      ->send(new SforgetMail('新パスワードを設定しました',$email13,$dateto13));
    $arr13=['新パスワードを設定しました',$email13,$dateto13 ];

  return view('customs.sforget3',compact( 'arr13'));
}

//-------------------------creat--------------------------------------

public function creat0() {return view('customs.creat0');    }
public function creat1k() {return view('customs.creat1');    }

public function creat1(Request $request){
  $dateto = new Carbon('now');
  $datetof=$dateto->format('YmdHis');
  $email=$request->email;
  $datast=\DB::table('customs')->where('email', $email);
$datastv=$datast->value('email');
  if (empty($datastv)) {  $email12 ='xxx@xxzz' ;
  }else{ $email12 =$datastv;    }

  $request['email12']=$email12;

  $validated = $request->validate([
       'email'     => ['required', 'email:rfc','max:100','different:email12'],
     'email12'      => ['required', 'max:20'],
      ], [
      'email.required' => ':attributeは必須です。',
      'email12.required' => ':attributeは必須です。',
  ], [
     'email' => '',
     'email12' => '同じメールアドレスが存在してる',
  ]
    );
  //----------------mail------------------------------------
  $custcode=Str::random(5).$datetof;
  $codet= Str::random(8);
  if($email12==$email){}else{
  //---------------------db----------------------------------
\DB::table('customs')->insert(['email' => $email,'pre_userid' => $codet,'datet' => $datetof,'custcode' => $custcode ] );
  //-------------------------------------------------
  Mail::to($email)
  ->send(new ContactMail('確認コード: '.$codet,$email,$dateto));
  }
  $arr50=['確認コード: '.$codet,$email,$dateto ];

return view('customs.creat1',compact( 'arr50'));

}
//--------------------------------------------------------------
public function creat2(Request $request1)
{
$dateto1 = new Carbon('now');
$datetof1=$dateto1->format('YmdHis');
$name1=$request1->name;
$email1=$request1->email;
$password1=$request1->password;
$password2=$request1->password2;
$code2=$request1->code2;

$datast=\DB::table('customs')->where('email', $email1);
$dat1=$datast->value('pre_userid');

$request1['code']=$dat1;
$validated = $request1->validate([
'email'     => ['required', 'email:rfc'],
'name'      => ['required', 'max:20'],
'code'      => ['required', 'max:20'],
'code2'      => ['required', 'same:code'],
'password'   => ['max:10', 'max:20'],
'password2'   => ['max:10', 'same:password'],
], [
'email.required' => ':attributeは必須です。',
  'name.required' => ':attributeは必須です。',
'code.required' => ':確認コードは必須です。',
'code2.required' => ':入力コードは必須です。',
'password.required' => ':attributeは必須です。',
'password2.required' => ':attributeは必須です。',


], [
'email' => 'メールアドレス',
'name' => '名前',
'code' => '確認コード',
'code2' => '入力コード',
'password' => 'パスワード',
'password2' => 'パスワード確認',

]
);

if($code2==$dat1){
//---------------------db----------------------------------
\DB::table('customs')->where('email', $email1)
->update(['name' => $name1,'password' => $password1,'datet' => $datetof1  ]);
//-------------------------------------------------
Mail::to($email1)
->send(new ContactMail(''.$name1.'様が新規登録を成功しました',$email1,$dateto1));
}
$arr51=[''.$name1.'様が新規登録を成功しました',$email1,$dateto1];

return view('customs.creat3',compact( 'arr51'));
}


public function creat2k(){  return view('customs.signin');  }


//-------------------------------------------------------------------
}
