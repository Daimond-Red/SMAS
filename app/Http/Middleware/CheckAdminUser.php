<?php

namespace App\Http\Middleware;

use Closure;

class CheckAdminUser
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

        if(  !session('isUser') ) {
            
            auth()->logout();
            return redirect('login');
        }
        
        return $next($request);
    }
}
