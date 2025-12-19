<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AccountLogin
{
    public function handle(Request $request, Closure $next)
    {
        if (!Auth::check()) {
            return redirect()->route('auth.accountlogin');
        }

        $user = Auth::user();

        // ADMIN allow only dashboard area
        if ((int)$user->role_id === 1) {
            if (!$request->is('dashboard') && !$request->is('dashboard/*')) {
                return redirect()->route('Dashboard.admin.dashboard');
            }
            return $next($request);
        }

        // PATIENT allow only medical history routes
        if ((int)$user->role_id === 2) {
            if (
                $request->routeIs('Home.submit-medical-history') ||
                $request->routeIs('Home.patient-medical-history.store') ||
                $request->routeIs('Home.patient-consent.store')
            ) {
                return $next($request);
            }

            return redirect()->route('Home.submit-medical-history');
        }

        Auth::logout();
        return redirect()->route('auth.accountlogin')
            ->withErrors(['error' => 'Unauthorized access']);
    }
}
