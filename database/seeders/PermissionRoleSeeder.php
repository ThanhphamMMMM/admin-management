<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Permission;
use App\Models\Role;

class PermissionRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
//            $adminRole = Role::where('name', 'admin')->first();
//
//            $permissions = Permission::all();
//
//            if($adminRole) {
//                $adminRole->permissions()->sync($permissions->pluck('id')->toArray());
//            }
        $editorRole = Role::where('name', 'editor')->first();

        $permissions = Permission::whereIn('id',[1,3,5,7])->get();

        if($editorRole) {
            $editorRole->permissions()->sync($permissions->pluck('id'));
        }
    }
}
