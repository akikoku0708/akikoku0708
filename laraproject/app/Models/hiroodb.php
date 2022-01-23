<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class hiroodb extends Model
{

  protected $table = ['menuk','members','productlist','cart','orderlist',
  'sendto','favobrows','payment','storeinfo'                     ];
  //  protected $table = 'members';
protected $guarded = array('id');

public $timestamps = false;

public function getData()
{
$data = DB::table($this->table)->get();

return $data;
}

}
