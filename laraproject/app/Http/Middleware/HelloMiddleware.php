<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class HelloMiddleware
{
    public function handle(Request $requestx, Closure $nextx)
    {
      $usersx = [
             ['name'=>'山田', 'mail'=>'yamada@sample.com'],
             ['name'=>'田中', 'mail'=>'tanaka@sample.com'],
             ['name'=>'鈴木', 'mail'=>'suzuki@sample.com'],
         ];
         $requestx->merge(['usersx'=>$usersx]);
         return $nextx($requestx);
    }
}
