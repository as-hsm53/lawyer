<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class lawyer
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $r, Closure $next)
    {
        if($r->session()->has('LAWYER_LOGIN')){

        }
        else{
            
            return redirect('login')->with('error', 'Acces Denied Please Login');
        }
        return $next($r);
    }
}
