<?php

namespace bayusa\Http\Middleware;

use Closure;

class CheckRoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next,$role)
    {
        if($request->user()){
            if($request->user()->rol->name == $role){
                return $next($request);
            }else{
                return redirect('/');
            }
        }
        
    }
}
