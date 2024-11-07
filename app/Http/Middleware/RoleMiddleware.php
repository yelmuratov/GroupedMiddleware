<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string  ...$roles
     * @return mixed
     */
    public function handle(Request $request, Closure $next, ...$roles)
    {
        $user = Auth::user();

        // Agar foydalanuvchi "admin" bo'lsa, barcha sahifalarga kirishga ruxsat beriladi
        if ($user && $user->roles->pluck('name')->contains('admin')) {
            return $next($request);
        }

        // Foydalanuvchi ko‘rsatilgan rollardan biriga ega bo‘lishi kerak
        if (!$user || !$user->roles->pluck('name')->intersect($roles)->count()) {
            abort(403, 'Sizga ushbu sahifaga kirishga ruxsat berilmagan.');
        }

        return $next($request);
    }
}
