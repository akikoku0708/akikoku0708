<?php
use App\Http\Controllers\HelloController;
//use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\HotaController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ValiDemoController;
use App\Http\Controllers\ContestController;
use App\Http\Controllers\CreatController;
use App\Http\Controllers\ManagerController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\CustomsController;
use App\Http\Controllers\StoremanaController;
use App\Http\Controllers\LinepayController;

use App\Http\Middleware\TestMiddleware;
use App\Http\Middleware\HelloMiddleware;


Route::get('/', function () {    return view('welcome');  });



Route::get('/', [HelloController::class, 'indexw']);

Route::get('/hello3', [HelloController::class, 'hellow3']);

Route::get('/ajax1', [HelloController::class, 'ajaxtk1']);
Route::get('/ajax2', [HelloController::class, 'hogehogehoge1']);
Route::get('/ajax3a', [HelloController::class, 'ajax3a']);
Route::post('/ajax3a', [HelloController::class, 'ajax3apost'])->name('ajax3b');
Route::get('/ajax3b', [HelloController::class, 'ajax3b']);

Route::get('/ajax5a', [HelloController::class, 'ajax5a']);
Route::post('/ajax5a', [HelloController::class, 'ajax5apost'])->name('ajax5b');
Route::get('/ajax5b', [HelloController::class, 'ajax5b']);

Route::get('/ajax6a', [HelloController::class, 'ajax6a']);
Route::post('/ajax6a', [HelloController::class, 'ajax6apost'])->name('ajax6b');
Route::get('/ajax6b', [HelloController::class, 'ajax6b']);

Route::get('/ajax8a', [HelloController::class, 'ajax8a']);
Route::post('/ajax8a', [HelloController::class, 'ajax8apost'])->name('ajax8b');
Route::get('/ajax8b', [HelloController::class, 'ajax8b']);

Route::get('/ajax9a', [HelloController::class, 'ajax9a']);
Route::post('/ajax9a', [HelloController::class, 'ajax9apost'])->name('ajax9b');
Route::get('/ajax9b', [HelloController::class, 'ajax9b']);

Route::get('/ajax7a', [HelloController::class, 'ajax7a']);
Route::post('/ajax7a', [HelloController::class, 'ajax7apost'])->name('ajax7b');
Route::get('/ajax7b', [HelloController::class, 'ajax7b']);

Route::get('/form1', [HotaController::class, 'write10']);
Route::post('/form2', [HotaController::class, 'write11']);

Route::get('/hello2', [HelloController::class, 'index2']);
Route::get('/hotaru', [HotaController::class, 'hotaruw']);
Route::get('/hotaru2', [HotaController::class, 'hotaru2']);

Route::get('/hello', [HotaController::class, 'hellow']);
Route::get('/hello5', [HotaController::class, 'hellow5']);
Route::get('/hello6', [HotaController::class, 'hellow6']);

Route::get('/hello71a', [MainController::class, 'show']);
Route::post('/hello71b', [MainController::class, 'confirm']);
Route::get('/hello71', [MainController::class, 'hellow71']);
Route::post('/hello72', [MainController::class, 'hellow72']);
Route::get('/hello73', [MainController::class, 'hellow73']);

Route::post('/hello75', [ContactController::class, 'hellow75']);
Route::get('/hello76', [ContactController::class, 'hellow76']);
Route::get('/hello77a', [ContactController::class, 'show']);
Route::post('/hello77b', [ContactController::class, 'confirm2']);
Route::get('/hello77', [ContactController::class, 'hellow77']);
Route::get('/hello75', [ContactController::class, 'hello75']);

Route::get('/meisis/signin', [ContactController::class, 'signin']);
Route::post('/meisis/signin', [ContactController::class, 'signinpost'])->name('/meisis/signinajax');
Route::get('/meisis/signinajax', [ContactController::class, 'signinajax']);

Route::get('/meisis/ajax5a', [ContestController::class, 'majax5a']);
Route::post('/meisis/ajax5a', [ContestController::class, 'majax5apost'])->name('/meisis/ajax5b');
Route::get('/meisis/ajax5b', [ContestController::class, 'majax5b']);

Route::get('/meisis/login', [ContestController::class, 'login']);
Route::post('/meisis/login', [ContestController::class, 'loginpost'])->name('/meisis/meisisajax/loginajax');
Route::get('/meisis/meisisajax/loginajax', [ContestController::class, 'loginajax']);

Route::get('/meisis/forget', [ContestController::class, 'forget']);
Route::post('/meisis/forget', [ContestController::class, 'forgetpost'])->name('/meisis/meisisajax/forgetajax');
Route::get('/meisis/meisisajax/forgetajax', [ContestController::class, 'forgetajax']);

Route::get('/meisis/creat', [ContestController::class, 'creat']);
Route::post('/meisis/creat', [ContestController::class, 'creatpost'])->name('/meisis/meisisajax/creatajax');
Route::get('/meisis/meisisajax/creatajax', [ContestController::class, 'creatajax']);

Route::get('/meisis/meisis', [ContestController::class, 'meisis']);
Route::get('/meisis/memo', [ContestController::class, 'memo']);

Route::get('/inquiry/', [ValiDemoController::class, 'show']);
Route::post('/inquiry/confirm', [ValiDemoController::class, 'confirm']);
Route::post('/inquiry/finish', [ValiDemoController::class, 'finish']);
Route::get('/inquiry/kindex2', [ValiDemoController::class, 'showk2']);
Route::post('/inquiry/kconfirm2', [ValiDemoController::class, 'confirmk2']);
Route::post('/inquiry/kfinish2', [ValiDemoController::class, 'finishk2']);

Route::get('/layouts/add', [ValiDemoController::class, 'add']);
Route::get('/layouts/add2', [ValiDemoController::class, 'add3']);
Route::get('/layouts/add3', [ValiDemoController::class, 'add3']);

Route::get('contact', [ContactController::class, 'input']);
Route::patch('contact/confirm', [ContactController::class, 'confirm']);
Route::post('contact/finish', [ContactController::class, 'finish']);

Route::get('conttest/complete/', [ContestController::class, 'complete']);
Route::get('conttest/', [ContestController::class, 'index']);
Route::get('conttest/confirm/', [ContestController::class, 'confirmk']);
Route::get('conttest/process/', [ContestController::class, 'process']);
Route::get('conttest/lastpage/', [ContestController::class, 'lastpage']);

Route::get('/members/signin', [CreatController::class, 'signin']);
Route::post('/members/signin2', [CreatController::class, 'signin2']);
Route::post('/members/signin3', [CreatController::class, 'signin3']);

Route::get('/members/lay_sample', [ContestController::class, 'lay']);
Route::get('/members/lay_sample2', [ContestController::class, 'lay2']);

Route::get('/members/creat0', [CreatController::class, 'creat0']);
Route::get('/members/creat1', [CreatController::class, 'creat1k']);
Route::post('/members/creat1', [CreatController::class, 'creat1']);
Route::get('/members/creat2', [CreatController::class, 'creat2k']);
Route::post('/members/creat2', [CreatController::class, 'creat2']);
Route::post('/members/creat3', [CreatController::class, 'creat3']);

Route::get('/members/sforget0', [CreatController::class, 'sforget0']);
Route::get('/members/sforget1', [CreatController::class, 'sforget1']);
Route::post('/members/sforget1', [CreatController::class, 'sforget1post']);
Route::get('/members/sforget2', [CreatController::class, 'sforget2']);
Route::post('/members/sforget2', [CreatController::class, 'sforget2post']);
Route::post('/members/sforget3', [CreatController::class, 'sforget3']);

Route::get('/main/homet', [ContestController::class, 'homet']);
Route::get('/main/homet2', [ContestController::class, 'homet2']);
//Route::get('/main/logout', [ContestController::class, 'logout']);

//--------------------manager ---------------------------------
Route::get('/manager/home', [ManagerController::class, 'home1']);
Route::get('/manager/home2', [ManagerController::class, 'home2']);
Route::post('/manager/home2', [ManagerController::class,'home2']);

Route::get('/manager/home8', [ManagerController::class, 'home8']);
Route::post('/manager/home8', [ManagerController::class, 'home8post'])->name('manager/ajaxform1/home8ajax');
Route::get('/manager/ajaxform1/home8ajax', [ManagerController::class, 'home8ajax']);

Route::get('/manager/home3', [ManagerController::class, 'home3']);
Route::post('/manager/home3', [ManagerController::class, 'home3post'])->name('manager/ajaxform1/home3ajax');
Route::get('/manager/ajaxform1/home3ajax', [ManagerController::class, 'home3ajax']);

Route::get('/manager/product', [ManagerController::class, 'product']);
Route::post('/manager/product', [ManagerController::class, 'productpost'])->name('/manager/productajax');
Route::get('/manager/productajax', [ManagerController::class, 'productajax']);

Route::get('/manager/cart', [ManagerController::class, 'cart']);
Route::post('/manager/cart', [ManagerController::class, 'cartpost'])->name('manager/cartajax');
Route::get('/manager/cartajax', [ManagerController::class, 'cartajax']);

Route::get('/manager/orderlist', [ManagerController::class, 'orderlist']);
Route::post('/manager/orderlist', [ManagerController::class, 'orderlistpost'])->name('manager/orderlist2');
Route::get('/manager/orderlist2', [ManagerController::class, 'orderlist2']);

Route::get('/manager/payment', [ManagerController::class, 'payment']);
Route::post('/manager/payment', [ManagerController::class, 'paymentpost'])->name('manager/paymentajax');
Route::get('/manager/paymentajax', [ManagerController::class, 'paymentajax']);

Route::post('/manager/payment2', [ManagerController::class, 'payment2']);
Route::get('/manager/payment3', [ManagerController::class, 'payment3']);

Route::get('/manager/mypage', [ManagerController::class, 'mypage']);
Route::post('/manager/mypage', [ManagerController::class, 'mypagepost'])->name('manager/mypage2');
Route::get('/manager/mypage2', [ManagerController::class, 'mypage2']);

Route::get('/manager/payline', [ManagerController::class, 'payline']);
Route::post('/manager/payline', [ManagerController::class, 'paylinepost'])->name('manager/paylineajax');
Route::get('/manager/paylineajax', [ManagerController::class, 'paylineajax']);

Route::get('/manager/instock', [ManagerController::class, 'instock']);
Route::get('/manager/inquiry', [ManagerController::class, 'inquiry']);

Route::get('/manager/profile', [ManagerController::class, 'profile']);
Route::post('/manager/profile', [ManagerController::class, 'profilepost'])->name('/manager/ajaxform1/profileajax');
Route::get('/manager/ajaxform1/profileajax', [ManagerController::class, 'profileajax']);


Route::get('/manager/browsing', [ManagerController::class, 'browsing']);
Route::get('/manager/favorite', [ManagerController::class, 'favorite']);

Route::get('/manager/address', [ManagerController::class, 'address']);
Route::post('/manager/address', [ManagerController::class, 'addresspost'])->name('manager/address2');
Route::get('/manager/address2', [ManagerController::class, 'address2']);

Route::get('/manager/ajax5a', [ManagerController::class, 'majax5a']);
Route::post('/manager/ajax5a', [ManagerController::class, 'majax5apost'])->name('/manager/ajax5b');
Route::get('/manager/ajax5b', [ManagerController::class, 'majax5b']);



//-------------------------client ---------------------------------------------
Route::get('/client/clientproduct', [ClientController::class, 'cproduct']);
Route::get('/client/clientedit6a', [ClientController::class, 'cedit6a']);
Route::post('/client/clientedit6a', [ClientController::class, 'ajax6apost'])->name('client/ajaxedit6b');
Route::get('/client/ajaxedit6b', [ClientController::class, 'ajaxedit6b']);

Route::get('/client/clientdele', [ClientController::class, 'clientdele']);
Route::post('/client/clientdele', [ClientController::class, 'clientdelepost'])->name('client/clientdele2');
Route::get('/client/clientdele2', [ClientController::class, 'clientdele2']);

Route::get('/client/clientimg', [ClientController::class, 'cimg']);
Route::post('/client/clientimg', [ClientController::class, 'cimgpost'])->name('client/clientimg2');
Route::get('/client/clientimg2', [ClientController::class, 'cimg2']);

Route::get('/client/clientimgdele1', [ClientController::class, 'cimgdele1']);
Route::post('/client/clientimgdele1', [ClientController::class, 'cimgdele1post'])->name('client/clientimgdele2');
Route::get('/client/clientimgdele2', [ClientController::class, 'cimgdele2']);

Route::get('/client/clientpic1', [ClientController::class, 'clientpic1']);
Route::post('/client/clientpic1', [ClientController::class, 'clientpic1ajaxpost'])->name('client/clientajax/clientpic1ajax');
Route::get('/client/clientajax/clientpic1ajax', [ClientController::class, 'clientpic1ajax']);

Route::get('/client/ajax51a', [ClientController::class, 'ajax51a']);
Route::post('/client/ajax51a', [ClientController::class, 'clientajax51apost'])->name('client/ajax51b');
Route::get('/client/ajax51b', [ClientController::class, 'ajax51b']);


//--------------------------------------------------------------------------
Route::get('/main/homet3', [ContestController::class, 'homet3'])->middleware(HelloMiddleware::class);
Route::get('/', [ContestController::class, 'homet2'])->middleware('testMid');
//-----------------customs----------------------------------------------------------------
Route::get('/customs/creat0', [CustomsController::class, 'creat0']);
Route::get('/customs/creat1', [CustomsController::class, 'creat1k']);
Route::post('/customs/creat1', [CustomsController::class, 'creat1']);
Route::get('/customs/creat2', [CustomsController::class, 'creat2k']);
Route::post('/customs/creat2', [CustomsController::class, 'creat2']);
Route::post('/customs/creat3', [CustomsController::class, 'creat3']);

Route::get('/customs/sforget0', [CustomsController::class, 'sforget0']);
Route::get('/customs/sforget1', [CustomsController::class, 'sforget1']);
Route::post('/customs/sforget1', [CustomsController::class, 'sforget1post']);
Route::get('/customs/sforget2', [CustomsController::class, 'sforget2']);
Route::post('/customs/sforget2', [CustomsController::class, 'sforget2post']);
Route::post('/customs/sforget3', [CustomsController::class, 'sforget3']);
Route::get('/customs/signin', [CustomsController::class, 'signin']);
Route::post('/customs/signin2', [CustomsController::class, 'signin2']);

Route::post('/customs/signin3', [CustomsController::class, 'signin3']);
Route::get('/customs/logout', [CustomsController::class, 'logout']);

//----------------------------------------------------------------------------
Route::get('/applyex/ecapply', [ClientController::class, 'ecapply']);

//^^^^^^^^^^^^^^^^^^^^^^^StoreController^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^
Route::get('/manastore/manaprofile', [StoremanaController::class, 'manaprofile']);
Route::post('/manastore/manaprofile', [StoremanaController::class, 'manaprofilepost'])->name('manastore/manastoreajax/manaprofileajax');
Route::get('/manastore/manastoreajax/manaprofileajax', [StoremanaController::class, 'manaprofileajax']);

Route::get('/manastore/manasales', [StoremanaController::class, 'manasales']);
Route::post('/manastore/manasales', [StoremanaController::class, 'manasalespost'])->name('manastore/manastoreajax/manasales2');
Route::get('/manastore/manastoreajax/manasales2', [StoremanaController::class, 'manasales2']);

Route::get('/manastore/ajax5a', [StoremanaController::class, 'ajax5a']);
Route::post('/manastore/ajax5a', [StoremanaController::class, 'ajax5apost'])->name('/manastore/ajax5b');
Route::get('/manastore/ajax5b', [StoremanaController::class, 'ajax5b']);

Route::get('/manastore/manadelivery', [StoremanaController::class, 'manadelivery']);
Route::post('/manastore/manadelivery', [StoremanaController::class, 'manadeliverypost'])->name('/manastore/manastoreajax/manadelivery2');
Route::get('/manastore/manastoreajax/manadelivery2', [StoremanaController::class, 'manadelivery2']);

Route::get('/manastore/manadelivery3', [StoremanaController::class, 'manadelivery3']);
Route::post('/manastore/manadelivery3', [StoremanaController::class, 'manadelivery3post'])->name('/manastore/manastoreajax/manadelivery4');
Route::get('/manastore/manastoreajax/manadelivery4', [StoremanaController::class, 'manadelivery4']);
Route::get('/manastore/manadelivery5', [StoremanaController::class, 'manadelivery5']);

Route::get('/manastore/manasales3', [StoremanaController::class, 'manasales3']);
Route::post('/manastore/manasales3', [StoremanaController::class, 'manasales3post'])->name('/manastore/manastoreajax/manasales3ajax');
Route::get('/manastore/manastoreajax/manasales3ajax', [StoremanaController::class, 'manasales3ajax']);

Route::get('/manastore/manasales5', [StoremanaController::class, 'manasales5']);
Route::post('/manastore/manasales5', [StoremanaController::class, 'manasales5post'])->name('/manastore/manastoreajax/manasales5ajax');
Route::get('/manastore/manastoreajax/manasales5ajax', [StoremanaController::class, 'manasales5ajax']);

Route::get('/manastore/manadelivery6', [StoremanaController::class, 'manadelivery6']);
Route::post('/manastore/manadelivery6', [StoremanaController::class, 'manadelivery6post'])->name('/manastore/manastoreajax/manadelivery6k');
Route::get('/manastore/manastoreajax/manadelivery6k', [StoremanaController::class, 'manadelivery6k']);

Route::get('/manastore/manadelivery7', [StoremanaController::class, 'manadelivery7']);
Route::post('/manastore/manadelivery7', [StoremanaController::class, 'manadelivery7post'])->name('/manastore/manastoreajax/manadelivery7aj');
Route::get('/manastore/manastoreajax/manadelivery7aj', [StoremanaController::class, 'manadelivery7aj']);

Route::get('/manastore/manacustom', [StoremanaController::class, 'manacustom']);
Route::get('/manastore/storeprofile', [StoremanaController::class, 'storeprofile']);

Route::get('/manastore/storeproduct', [StoremanaController::class, 'storeproduct']);
Route::post('/manastore/storeproduct', [StoremanaController::class, 'storeproductpost'])->name('/manastore/manastoreajax/storeproductajax');
Route::get('/manastore/manastoreajax/storeproductajax', [StoremanaController::class, 'storeproductajax']);

Route::get('/manastore/manapayment', [StoremanaController::class, 'manapayment']);
Route::get('/manastore/manainquiry', [StoremanaController::class, 'manainquiry']);
Route::get('/manastore/manapromain', [StoremanaController::class, 'manapromain']);

Route::get('/manastore/manadisprofile', [StoremanaController::class, 'manadisprofile']);

Route::get('/manastore/sitemana1', [StoremanaController::class, 'sitemana1']);
Route::post('/manastore/sitemana1', [StoremanaController::class, 'sitemana1post'])->name('/manastore/manastoreajax/sitemana1ajax');
Route::get('/manastore/manastoreajax/sitemana1ajax', [StoremanaController::class, 'sitemana1ajax']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
