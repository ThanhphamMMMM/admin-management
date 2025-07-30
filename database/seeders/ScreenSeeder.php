<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ScreenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('screens')->insert([
            ['name' => 'Role người dùng', 'description' => 'Quản lí người dùng'],
            ['name' => 'Role vai trò', 'description' => 'Quản lí vai trò']
        ]);
    }
}
