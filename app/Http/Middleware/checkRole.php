<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class checkRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, ...$roles): Response
    {
        $user = Auth::user();

        if ($user && in_array($user->role, $roles)) {
            return $next($request);
        }

        // $roles = array_splice($request->route()->parameters(), 2);
        // foreach ($roles as $role) {
        //     $user = Auth::user()->role;
        //     if ($user == $role) {
        //         return $next($request);
        //     }
        // }
        return redirect('/');
    }
}
