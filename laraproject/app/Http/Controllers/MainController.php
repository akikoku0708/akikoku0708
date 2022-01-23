<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
//use Illuminate\Http\Request;
use Request;
use Illuminate\Support\Facades\Mail; //追記
use App\Mail\HotaruMail; //追記
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\InquiryRequest;
use App\Models\Hiroodb;
class MainController extends Controller
{


public function show() {return view('hello71a');    }
private const FORM_DATA_KEY = 'inquiry.form';
public function confirm(InquiryRequest $request)
{
    $form_data = $request->validated();
    $request->session()->put(self::FORM_DATA_KEY, $form_data);

    return view('hello71b', $form_data);

}


//------------------------------------------------------------
  public function hellow72(Request $moji) //mail()
     {
       $data1 = $moji::all();
$idk1=$data1['textbox1'];
$idk2=$data1['textbox2'];
$idk3=$data1['textbox3'];
$mkk='お問い合わせに関する';
$value=$idk3;
         $stream = Storage::readStream('ak1.jpg');
         $imgData = stream_get_contents($stream);
         fclose($stream);

         Mail::to("meisis@applyex.com")
             ->cc("ken2014ji@yahoo.co.jp")
             ->bcc("aomenu@applyex.com")
            // ->send(new SampleMail('hello6'));
      ->send(new HotaruMail($mkk,$idk1,$idk2,$idk3,'ak1.jpg', 'image/jpg', $imgData));
      $arr = [$idk1,$idk2,$idk3];



return view('hello73',compact( 'arr'));
     }
  public function hellow71() {

    return view('hello71');    }

}
