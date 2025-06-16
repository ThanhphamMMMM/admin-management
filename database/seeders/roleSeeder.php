<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Role;

class roleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $role = Role::create([
            // 'name'=>'admin',
            // 'descride'=>'full quyền-vip pro',

            // 'name'=>'giám đốc',
            // 'descride'=>' quyền-vip pro',

            // 'name'=>'HR',
            // 'descride'=>' quyền-pro',

            'name'=>'nhan viên',
            'descride'=>'ko quyền',
        ]);
    }
}
