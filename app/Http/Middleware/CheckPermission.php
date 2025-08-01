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
    public function handle(Request $request, Closure $next, ...$permissionNames): Response
    {
        /** @var \App\Models\User $user */
        $user = Auth::user();
        if (!$user) {
            return redirect()->route('auth.login');
        }

        $user->loadMissing('role.permissions');

        $userPermissions = $user->role->permissions->pluck('name')->toArray();


        foreach ($permissionNames as $permissionName) {

            if (in_array($permissionName, $userPermissions)) {
                return $next($request);
            }
        }
        abort(403, 'Bạn không có quyền truy cập');
    }
}
