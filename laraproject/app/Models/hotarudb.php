<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class hotarudb extends Model
{
  protected $table = 'members';

protected $guarded = array('id');

public $timestamps = false;

public function getData()
{
$data = DB::table($this->table)->get();

return $data;
}
}
