<?php

namespace App\Http\Middleware;

use App\Models\User;
use Closure;
use Illuminate\Http\Request;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next)
    {
        $user = auth()->user();
        if(!$user){
            return redirect()->route('login');
        }
        if ((int) auth()->user()->role !== User::ROLE_ADMIN) {
            abort(404);
        }
        return $next($request);
    }
}
