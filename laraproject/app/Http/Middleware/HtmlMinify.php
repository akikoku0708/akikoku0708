<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class HtmlMinify
{

    public function handle(Request $request, Closure $next)
    {
      $user = Auth::user();
              if(!$user->test()){
                  return redirect('/');
              }

              return $next($request);
     }


}
