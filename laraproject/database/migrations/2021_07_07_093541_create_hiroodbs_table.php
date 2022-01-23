<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHiroodbsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hiroodbs', function (Blueprint $table) {
            $table->id();
        $table->unsignedBigInteger('id')->nullable();
$table->string('userid');    $table->string('password');   $table->string('name');
$table->string('catagory');  $table->string('classm');     $table->string('itemk');
$table->string('product');   $table->string('itemcode');   $table->string('storeid');
$table->string('storename'); $table->string('numitem');    $table->string('featherm');
$table->string('quantity');  $table->string('size');       $table->string('color');
$table->string('datet');     $table->string('custcode');   $table->string('status');
$table->string('pcname');    $table->string('sessionid');  $table->string('pricem');
$table->string('jancode');    $table->string('picture');  $table->string('weight');
$table->string('codeitem');
//-----------sendto----------------------------
$table->string('loginid');    $table->string('custcode');  $table->string('post');
$table->string('addresst');    $table->string('receiver');  $table->string('phone');
$table->string('codeaddress');
//------------------------------------------------------------------------
$table->string('paycode');   $table->string('paystatus');   $table->string('ponumbers');
$table->string('paymethod');   $table->string('paycompany');
//----------------------------------------------------------
$table->string('comprofile');   $table->string('establish');   $table->string('capital');
$table->string('president');   $table->string('message'); $table->string('piconer');
//----------------------------------------------------------
$table->string('picfab');  $table->string('picnews'); $table->string('bank');
$table->string('homepage');
//----------------------------------------------------------

$table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('hiroodbs');
    }
}
