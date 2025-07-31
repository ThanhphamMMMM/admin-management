<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;
use App\Models\User;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response) $next
     */
    public function handle(Request $request, Closure $next, ...$roleName): Response
    {
        /** @var User $user */
        $user = Auth::user();

        $user->loadMissing('role');


        if (!$user->role) {
            abort(403, 'Bạn không có quyền truy cập');
        }

        if (in_array($user->role->name, $roleName)) {
            abort(403, 'Bạn không có quyền truy cập đâsd');
        }

        return $next($request);
    }
}
