<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
  public function test(){
       if($this->role_id=='1'){
           return true;
       }
       return false;
   }
}
