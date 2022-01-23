<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use Request;
use App\Mail\SampleMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;
use Illuminate\Support\Str;

class HotaController extends Controller
{
  //public function hellow6(){   return view('hello6');   }
  public function hotaruw(){
    $dateto1='今 '.new Carbon('now'); // 今
    $dateto2='今日 '.new Carbon('today'); // 今日
    $dateto3='明日 '.new Carbon('tomorrow'); // 明日
    $dateto4='昨日'.new Carbon('yesterday'); // 昨日

    $dateto5='１日後 '.new Carbon('+1 day'); // １日後
    $dateto6='３分後 '.new Carbon('+3 minutes'); // ３分後
    $dateto7='来月の最初の日 '.new Carbon('first day of next month'); // 来月の最初の日
    $dateto8='2020年4月15日 '.new Carbon('2020-04-15'); // 2020年4月15日

    $dateto9='2020年4月15日 00時00分00秒 '.new Carbon('2020-04-15 00:00:00'); // 2020年4月15日 00時00分00秒
   $dateto10=new Carbon('20210720193518');
    $year = 2020;
     $month = 4;
     $day = 15;
     $hour = 11;
     $minute = 11;
     $second = 11;
    $dateto11 = Carbon::create($year, $month, $day, $hour, $minute, $second, 'Asia/Tokyo' );  // タイムゾーンは指定してもしなくても良い// 2020-04-15 11:11:11
    $dateto12=new Carbon('+0 minutes');//new Carbon('-30 minutes');
    $dateto10=$dateto10->getTimestamp();
    $dateto9=$dateto12->getTimestamp();
    $dateto12=$dateto12->format('YmdHis');
    $dateto11 = Str::random(8);

if($dateto10<$dateto9){  $dateto9='xxxxxxx';    }else{ $dateto9='222222';      }


//$datek=[ $dateto1,$dateto2,$dateto3,$dateto4           ];
//$datek=[ $dateto5,$dateto6,$dateto7,$dateto8           ];
$datek=[ $dateto9,$dateto10,$dateto11,$dateto12           ];

    return view('hotaru',compact('datek'));
  }


  public function index2(){   return view('hello2');   }


  public function hellow5() {return view('hello5');    }
  public function hellow6() {return view('hello6');    }

  public function write10(){    return view('form1');  }

  public function write11(Request $request){
////Storage::disk('local')->put('public/chen/gdat2.jpg', file_get_contents($request->file('post_img')));
//===============================================================

$text1=$request['textbox1'];
$text2=$request['textbox2'];
$files = $request->file('post_img');
$arrk=array(); $cnt=0;
if($request->hasFile('post_img')){
    foreach ($files as $file) { $cnt +=1;
  Storage::disk('local')->put('public/george/gda'.$text1.$cnt.'.jpg', file_get_contents($file));
    }
}
//==============================
//  $request->file('post_img')->store('public/avator');

  return redirect ('/hotaru')->with(['message1'=>$text1, 'message2'=>$text2, 'message3'=>'成功-3']);
  //return redirect ('/hotaru')->with('message1',$text1);

  }

  public function hellow(Request $moji) //mail()
     {





    //   $data11 = $moji::all();
//$files = $request::all();
//$idk2=$data11['textbox2'];
$idk1='AAAAAA';   $idk2='123';
         $stream = Storage::readStream('ak1.jpg');
         $imgData = stream_get_contents($stream);
         fclose($stream);

         Mail::to("hotaru@applyex.com")
             ->cc("meisis@applyex.com")
             ->bcc("aomenu@applyex.com")
            // ->send(new SampleMail('hello6'));
             ->send(new SampleMail('hello6', 'ak1.jpg', 'image/jpg', $imgData));

      //  return view('hello6');
        return view('hello6',compact('idk1','idk2'));
     }
//-------------------------------------------------

public function hotaru2(){    return view('hotaru2');  }







}








//
