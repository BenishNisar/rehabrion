<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;
use Closure;
use Illuminate\Http\Request;

class AccountLogin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if(Auth::check()){
            $user = Auth::user();

            if ($user->role_id == 1) {
                // Only redirect if user is NOT already on dashboard
                if ($request->path() !== 'dashboard') {
                    return redirect('/dashboard');
                }
            } else {
                Auth::logout();
                return redirect("/accountlogin")->withErrors(["error" => "Unauthorized access."]);
            }
        }
        return $next($request);
    }
}
