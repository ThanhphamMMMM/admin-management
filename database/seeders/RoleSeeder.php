<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('roles')->insert([
            ['name' => 'admin', 'description' => 'Quản trị hệ thống'],
            ['name' => 'editor', 'description' => 'Biên tập nội dung'],
            ['name' => 'manage', 'description' => 'Quản lí app'],
            ['name' => 'check', 'description' => 'Kiểm tra dự án'],
            ['name' => 'user', 'description' => 'Người dùng thông thường'],

        ]);
    }
}
