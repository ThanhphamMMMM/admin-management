<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PermissionSeeder extends Seeder
{

    /**
     * Run the database seeds.
     */
    public function run(): void

    {
        DB::table('permissions')->insert([
            ['name' => 'user.index', 'description' => 'Xem danh sách người dùng'],
            ['name' => 'user.create', 'description' => 'Tạo người dùng'],
            ['name' => 'user.edit', 'description' => 'Chỉnh sửa người dùng'],
            ['name' => 'user.destroy', 'description' => 'Xoá người dùng'],

            ['name' => 'role.index', 'description' => 'Xem danh sách vai trò'],
            ['name' => 'role.create', 'description' => 'Tạo vai trò'],
            ['name' => 'role.edit', 'description' => 'Chỉnh sửa vai trò'],
            ['name' => 'role.destroy', 'description' => 'Xoá vai trò'],
        ]);
    }
}
