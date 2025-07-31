<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Auth;
use App\Models\Permission;
use Illuminate\Support\Facades\Schema;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        /** @var \App\Models\User $user */
        if ($user = Auth::user()) {
            $user->loadMissing('role.permissions');
            Paginator::useBootstrapFive();

            if (Schema::hasTable('permissions')) {
                foreach (Permission::with('roles')->get() as $permission) {
                    Gate::define($permission->name, function ($user) use ($permission) {
                        return $user->role && $user->role->permissions->contains('name', $permission->name);
                    });
                }
            }

        }
    }
}
