<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class AuthenticateAdminMiddleware
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
        if(Auth::user()->admin_status == false){
        // not the admin
            return view('noaccess');
        
        } else {

            return $next($request);
            
        }
    }
    
}
