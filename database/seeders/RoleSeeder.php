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
            ['name' => 'admin', 'descride' => 'Quản trị hệ thống'],
            ['name' => 'editor', 'descride' => 'Biên tập nội dung'],
            ['name' => 'monitor', 'descride' => 'Giám sát nội dung'],
            ['name' => 'check', 'descride' => 'Kiểm tra dự án'],
            ['name' => 'user', 'descride' => 'Người dùng thông thường'],

        ]);
    }
}
