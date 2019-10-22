<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;//este es para que haga la autenticacion admin Kernel web AuthenticatesUser app 

class CheckAdmin
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
        //Condicional para que revise el tipo de usuario
        if(Auth::check()){


        if (Auth::user()->role_id!=1) {
          return redirect('/login'); 
        }
        return $next($request);
    }else{
        return redirect('/login');
    }
}
}
