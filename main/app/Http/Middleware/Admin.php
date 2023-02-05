<?php

namespace App\Http\Middleware;

use App\Models\User;
use Auth;
use Closure;
use Illuminate\Http\Request;

class Admin
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
        $auth = auth()->user();
        if ($auth && $auth->role == 'ADMIN') {
            return $next($request);
        } else {
            return redirect()->route('login');
        }
    }
}
