<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Log; //Ajaxには必要
use App\Mail\MailTest;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\InquiryRequest;
use App\Models\Hiroodb;
//use Request;

//use App\Http\Controllers\Controller;
//use Illuminate\Support\Facades\Storage;
/*
use Carbon\Carbon;
use Illuminate\Support\Str;
*/


class ContactController extends Controller
{
public function show() {
$datas3 = \DB::table('Members')->where('id', '=', 52)->get();
//$datas3 = \DB::table('Members')->where('id', '=', 52)->get();
//$datas3=\DB::table('Members')->where('id', '52')->value('userid');
$datastm=\DB::table('Members')->where('id', '52');
$dat1m=$datastm->value('userid');
$dat2m=$datastm->value('password');
$arrk=[$dat1m, $dat2m  ];

  return view('hello77a',[  'datas3'=>$datas3 ],compact( 'arrk'));    }


private const FORM_DATA_KEY = 'inquiry.form';

public function confirm2(InquiryRequest $request)
{
   $form_data = $request->validated();
    $request->session()->put(self::FORM_DATA_KEY, $form_data);
    return view('hello77b', $form_data);

}

//--------------------------------------------------------
  public function hellow75(Request $moji) {
//$data2=\DB::table('Members')->where('id', '52')->value('userid');
$datast=\DB::table('Members')->where('id', '52');
$dat1=$datast->value('userid');
$dat2=$datast->value('password');



    $contact = $moji::all();
    $name=$contact['textbox1'];
    $email=$contact['textbox2'];
    //$message=$contact['textbox3'];
$message=$dat2;

    $arr = [$name, $email,$message];
    //Mail::to($contact['email'])
    Mail::to('meisis@applyex.com')
    ->send(new MailTest($name,$email,$message)); // 引数にリクエストデータを渡す
//$arrk2=['xxxx', 'DDD' ];
return view('hello76',compact( 'arr'));//['value' => $value],

  }

    public function hellow77() {return view('hello77');    }


//^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^

public function signin() {return view('meisis.signin');    }

public function signinpost(Request $requestx3) {
  $id='';$zname2='';
   $inputx3 = $requestx3->all();
   Log::info($inputx3);
   $zname1=$requestx3->kname1;
   $zname2=$requestx3->kname2;
   $zname3=$requestx3->kname3;
 //$id='zxc1' //$named='chen';
 if($zname1=='zxc1'){ $zname2='7777';  }
 return response()->json(['zname1' => $zname1,'zname2' => $zname2,'zname3' => $zname3 ]);

//---------------------------------------


}






}
