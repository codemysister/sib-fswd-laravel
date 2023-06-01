<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RoleMiddleware
{
    public function handle($request, Closure $next, $role)
    {
        $user = Auth::user();
        if ($user->getRoleName() !== $role) {
            return redirect()->back()->with('error', 'Unauthorized');
        }

        return $next($request);
    }
}
