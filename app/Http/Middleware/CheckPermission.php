<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;


class CheckPermission
{
    /**
     * Handle an incoming request.
     *
     * @param \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response) $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        /** @var \App\Models\User $user */
        $user = Auth::user();

        if (!$user || !$user->role) {
            abort(403,'Bạn không có quyền truy cập');
        }

        $user->loadMissing('role.permissions');

        $userPermissions = $user->role->permissions->pluck('name')->toArray();

        $currentRoute = $request->route()->getName();
        if (!in_array($currentRoute, $userPermissions)) {
            abort(403, 'Bạn không có quyền truy cập');
        }

        return $next($request);
    }
}
