<?php

namespace App\Http\Middleware;

use Closure;
use App\Auth;
use App\User;
use App\Role;
use Illuminate\Support\Facades\Auth as FacadesAuth;

class Admin
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
            $adminRole = FacadesAuth::user()->roles()->pluck('name');
            if($adminRole->contains('admin')){

            return $next($request);
          }
        }

}
