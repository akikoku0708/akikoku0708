<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
//use Request;
use App\Http\Requests\InquiryRequest;

use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;


class ValiDemoController extends Controller
{
//public function index() {return view('inquiry.index');    }
//public function confirm() {return view('inquiry.confirm');    }
//public function finish() {return view('inquiry.finish');    }
//public function add() {return view('layouts.add');    }
public function add(){  return view('layouts.add');   }
public function add2(){  return view('layouts.add2');   }
public function add3(){  return view('layouts.add3');   }

private const FORM_DATA_KEY = 'inquiry.form';

   public function show(){  return view('inquiry.index');   }

   public function confirm(InquiryRequest $request)
   {


       $form_data = $request->validated();
       $request->session()->put(self::FORM_DATA_KEY, $form_data);

       return view('inquiry.confirm', $form_data);
   }

   public function finish(Request $request)
     {


/*
       $input= 'kkkk';$input2= 'kkkk';
      //Mail::to('meisis@applyex.com')->send(new ContactMail( $data1 ));
      Mail::to('meisis@applyex.com')->send(new ContactMail('inquiry.finish', 'お問い合わせありがとうございます', $input));
*/
         if (!$request->session()->has(self::FORM_DATA_KEY)) {
             return redirect()->route('inquiry');
         }

         $form_data = $request->session()->pull(self::FORM_DATA_KEY);

        //----------------------------------
//$arr = [$idk1, $idk2];
//---------------------------------------
         return view('inquiry.finish');
     }
//--------------------------------------------------------------
//private const FORM_DATA_KEY2 = 'inquiry.form2';

   public function confirmk2(Request $request2)
   {
      $name2=$request2->name;
      $email2=$request2->email;
      $message2=$request2->message;
      $mkk='zxaaxxx';
      $request2['code']=$mkk;

    $validated = $request2->validate([
      'name'      => ['required', 'max:20'],
      'email'     => ['required', 'email:rfc'],
      'code'      => ['required', 'max:20'],
      'message'   => ['max:10', 'same:code'],
        ], [
        'name.required' => ':attributeは必須です。',
        'email.required' => ':attributeは必須です。',
        'code.required' => ':Codeは必須です。',
        'message.required' => ':attributeは必須です。',
    ], [
        'name' => 'name',
        'email' => 'email',
        'code' => 'confirm code',
        'message' => 'Input code',
    ]
      );

       return view('inquiry.kconfirm2',$request2);
   }

 public function showk2(){  return view('inquiry.kindex2');   }

 public function finishk2(Request $request3)
   {
       return view('inquiry.kfinish2');
   }



}
