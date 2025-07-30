<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PermissionScreenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('permission_screen')->insert([
            ['permission_id' => 1, 'screen_id' => 1],
            ['permission_id' => 2, 'screen_id' => 1],
            ['permission_id' => 3, 'screen_id' => 1],
            ['permission_id' => 4, 'screen_id' => 1],
            ['permission_id' => 5, 'screen_id' => 1],
            ['permission_id' => 6, 'screen_id' => 1],
            ['permission_id' => 7, 'screen_id' => 1],
            ['permission_id' => 8, 'screen_id' => 1],
        ]);
        DB::table('permission_screen')->insert([
            ['permission_id' => 1, 'screen_id' => 2],
            ['permission_id' => 3, 'screen_id' => 2],
            ['permission_id' => 5, 'screen_id' => 2],
            ['permission_id' => 7, 'screen_id' => 2],
        ]);
    }
}
