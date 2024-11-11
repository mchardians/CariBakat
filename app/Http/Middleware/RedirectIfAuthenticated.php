<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, string ...$guards): Response
    {
        $guards = empty($guards) ? [null] : $guards;

        foreach ($guards as $guard) {
            if (Auth::guard($guard)->check()) {
                switch(Auth::user()->role->name) {
                    case "pelamar":
                        return redirect(route('pelamar.dashboard'));
                    case "hrd":
                        return redirect(route('hrd.dashboard'));
                    case "manajer":
                        return redirect(route('manajer.dashboard'));
                    default:
                        abort(403, 'Forbidden: You don’t have permission to access on this server ');
                        break;
                }
            }
        }

        return $next($request);
    }
}
