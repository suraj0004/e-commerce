<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  ...$guards
     * @return mixed
     */
    public function handle(Request $request, Closure $next, ...$guards)
    {
        $guards = empty($guards) ? [null] : $guards;

        foreach ($guards as $guard) {
            if (Auth::guard($guard)->check()) {
                if(auth()->user()->role_id == User::ROLES["ADMIN"]){
                    return redirect()->route("admin.home");
                }else if(auth()->user()->role_id == User::ROLES["USER"]){
                    return redirect(RouteServiceProvider::HOME);
                } else{
                    Auth::logout();
                    return redirect()->back()->withErrors(["email"=>"These credentials do not match our records."]);
                }
            }
        }

        return $next($request);
    }
}
