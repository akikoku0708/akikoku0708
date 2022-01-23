<?php

namespace App\Http\Middleware;
//use Illuminate\Support\Facades\Auth;
use Closure;
use Illuminate\Http\Request;

class TestMiddleware
{

    public function handle(Request $request, Closure $next)
    {

      $users = [
             ['name'=>'山田', 'mail'=>'yamada@sample.com'],
             ['name'=>'田中', 'mail'=>'tanaka@sample.com'],
             ['name'=>'鈴木', 'mail'=>'suzuki@sample.com'],
         ];
         $request->merge(['users'=>$users]);
         return $next($request);
    
         //---------------------------------------

    }


}
