<?php

namespace App\Http\Controllers;
//use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
//use Request;
//use App\Models\Snsdb;
use App\Models\Hiroodb;
use Log;
class HelloController extends Controller
{

  public function indexw(){   return view('welcome');   }
//public function hellow(){   return view('hello');   }
public function hellow3(){  // return view('hello3');
$datas3 = \DB::table('members')->get();

$asd='';
if(isset($_GET['asd'])){   $asd=$_GET['asd'];             }

 return view('hello3',[  'datas3'=>$datas3,  'datas5'=>$asd,     ]);
}


public function hogehogehoge1(Request $request) {
         return response()->json([
              'value' => 'あいうえお',
              'name'  => 'かきくけこ',
              ]);
   }

public function ajax5a() {return view('ajax5a');    }
public function ajax5apost(Request $requestx) {
   $inputx = $requestx->all();
   Log::info($inputx);
   $emailx=$requestx->email;
   $namex=$requestx->name;
//---------------------------------------
$menux = \DB::table('menuk')->get();
 return response()->json(['menux'=> $menux,'name' => $namex,'email' => $emailx]);
}
//-------------------------------------------------------
public function ajax7a() {return view('ajax7a');    }
public function ajax7apost(Request $request7) {
   $input7 = $request7->all();
   Log::info($input7);
   $email7=$request7->email;
   $name7=$request7->name;
//---------------------------------------
$menux7 = \DB::table('menuk')->get();
//-------files------------------------------
// $fnamed1=array();
// $dpath="../storage/app/public/home_top";
// $dir = $dpath ;
// if( is_dir( $dir ) && $handle = opendir( $dir ) ) {
//     while( ($file2 = readdir($handle)) !== false ) {
//       if( filetype( $path = $dir .'/'. $file2 ) == "file" ) {
//       $fnamed1[]=$file2;
//     }
//     }
// }
//for($i=0;$i<count($fnamed1);$i++){

//echo '<img src="../storage/home_top/'.$fnamed1[$i].'" width="100" height="100"alt="">';

//}


//-----------------------------------
 return response()->json(['menux7'=> $menux7,'name7' => $name7,'email7' => $emailx]);
}
//---------------------------------------------------------------------------
   public function ajax3apost(Request $requestz) {
     $input = $requestz->all();
     $pass=$requestz->password;
      $email=$requestz->email;
       $name=$requestz->name;
            Log::info($input);

            return response()->json([
              'email'=>$email,
              'name'  => $name,
              'pass'  => $pass,
            ]);


   }


public function ajaxtk1() {return view('ajax1');    }
public function ajax3a() {return view('ajax3a');    }

public function write3(Request $request3)
  {
      $json11 = $request3->input('bangou1');
      $json21 = $request3->input('name1');
      return response()->json([
          'code' => '1',
         'name' => 'eigyou',
          'code2' => $json11,
          'name2' => $json21

       ]);
  }
public function ajaxtk3() {return view('ajax3');    }
//public function hellow5() {return view('hello5');    }
public function index2(){
//$datas = \DB::table('members')->get();
//  $datas = Members::get();   //xxx
//$datas = \DB::table('customs')->get();
/*
$datast=\DB::table('Members')->where('id', '52');
$dat1=$datast->value('userid');
$dat2=$datast->value('password');
$arrk=[$dat1, $dat2  ];
\DB::table('members')->insert(['email' => $email,'pre_userid' => $codet,'date' => $datetof ] );
*/

//$datas = \DB::table('Members')->where('id', '!=', 52)->get();
$datas = \DB::table('Members')->where('id', '>', '1')->get();
//$data2=\DB::table('Members')->where('id', '52')->value('userid');
  //$per_page = 2;
//  $datas = \DB::table('Members')->paginate($per_page);

$datas = \DB::table('Members')->where('password', 'like', '12%')->get();

//$datas = \DB::table('Members')->where('userid', 'like', '%m')->get();
//$datas = \DB::table('Members')->where('userid', 'like', '%zz%')->get();

//\DB::table('Members')->where('userid', 'aki12')->update(['userid' => 'akiaki']);
//\DB::table('Members')->where('id', 51)->delete();
//Bookmark::destroy(4);
//\DB::table('Members')->where('id', 53)->update(['name' => '新しい名前']);
//\DB::table('Members')->insert([ 'userid' => 'aki17','name' => '秋山17' ]);
//$datas = \DB::table('Members')->firstOrCreate(['userid' => 'aaa11']);????

  // $datas = \DB::table('Members')->first();
  //$datas = \DB::table('Members')->where('userid', 'aki11')->first();
    //$datas = \DB::table('Members')->find(3);    ??????????????????
   //$datas = \DB::table('Members')->find([1,3]);  ??????????

   //$datas= Bookmark::where('id', 1)->orWhere('url', 'bbb')->get();

    //$datas = Bookmark::where('id', [1, 3])->value('url'); //ng

    //  $datas = Bookmark::select('title as url')->get();

    /* $dates = new Bookmark();
       $dates->fill(['title' => '山田太5郎','url' => '5yamada@test.com']);
       $dates->save();*/

// $dates = Bookmark::create(['title' => '山田3太郎','url' => '3yamada@test.com']);
//$datas = Bookmark::all();

  //  $arr = ['required11', 'required22'];
  //return view('hello2',compact('arr'));
/*
  \Session::put('contact', 'chen3');
  if ( ! \Session::has('_old_input') ){
  $datas=\Session::get('contact', 'xxx'); // 取得できない場合 xxx を返す
  }
  */
  //\Session::flush();




return view('hello2',[  'datas'=>$datas  ]  );
//  return view('hello2',[  'datas'=>$datas  ],[  'datask'=>$datask   ]   );


/*
    $value = 'aaaaSnome';
    $arr = ['xSnome1', 'xSnome2', 'xSnome3'];
    return view('hello2',compact('value', 'arr'));
*/
//return view('hello2');
  }

//------------------------------------------------------------
public function ajax8apost(Request $requestz8) {

         $upload_file_path = storage_path().'/app/public/upload/';
         $result = $requestz8->has('text');
         if ($result) {
             $text = $requestz8->input('text');
         }
         $result2 = $requestz8->file('file')->isValid();
         if($result2){
             $file = $requestz8->file('file')->move($upload_file_path , $text.".jpg");
         }



      $name="sdg";
        // return view('ajax8b')->with("ret",$text);
         return response()->json(['ret'=>$text, 'name'  => $name   ]);
//---------------------------------------------------------------

}

public function ajax8a() {return view('ajax8a');    }

//------------------------------------------------------------
public function ajax9apost(Request $requestz9) {
  $upload_file = storage_path().'/app/public/company/';
  $arrtx=array();
  $result = $requestz9->has('text');
  if ($result) {
      $text9 = $requestz9->input('text');
  }

  if ($requestz9->TotalImages > 0) {
            for ($x= 0; $x < $requestz9->TotalImages; $x++) {
    $result2k = $requestz9->file('images' . $x)->isValid();
    if($result2k){
$file = $requestz9->file('images' . $x)->move($upload_file , $text9.$x.".jpg");
$arrtx[]=$text9.$x;
}   }  }

$text9=count($arrtx);
  return response()->json(['ret'=>$text9, 'name'  => $arrtx   ]);
//---------------------------------------------------------------

}

public function ajax9a() {return view('ajax9a');    }
//=====================================================================
public function ajax6a() {


  return view('ajax6a');    }
public function ajax6apost(Request $requestz6) {
$name6='333333';$text6='333333';
return response()->json(['ret'=>$text6, 'name'  => $name6   ]);
}


}
