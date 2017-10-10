<?php

namespace App\Http\Middleware;

use Closure;

class UserCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        //todo 条件过滤
        if($request->input('age')<=200){
            return '检测不通过';
        }

        return $next($request);
    }
}
