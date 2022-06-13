<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class FirstMiddleware
{
    public function handle(Request $request, Closure $next)
    {
      $input = "ミドルウェアが書き換えてます。";
      $request->merge(['conten'=>$input]);
      return $next($request);
    }
}
?>