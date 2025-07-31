<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class PermissionMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response) $next
     */
    public function handle(Request $request, Closure $next, ...$roleName): Response
    {
        /** @var App\Models\User $user */
        $user = Auth::user();
        $user->loadMissing(['role']);
        if (!$user || !$user->role) {
            abort(403);
        }

        if (!in_array($user->role->name, $roleName)) {
            abort(403);
        }
        return $next($request);
    }
}
