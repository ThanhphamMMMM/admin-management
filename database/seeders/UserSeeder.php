<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::insert([
            ['name' => 'admin',
                'descride' => 'full quyền-vip pro'
            ],

            ['name' => 'giám đốc',
                'descride' => ' quyền-vip pro',
            ],
            [
                'name' => 'HR',
                'descride' => ' quyền-pro',
            ],

            [
                'name' => 'nhan viên',
                'descride' => 'ko quyền'
            ]
        ]);

        $user = User::create([
            'email' => 'vungocquangg@gmail.com',
            'password' => Hash::make('thanh134d232'),
            'role_id' => Role::first()->id,
        ]);

        $user->profile()->create([
            'full_name' => 'ngoc quang',
            'phone' => '1235567751',
            'address' => 'quang ninh',
            'birthday' => '2002-11-08',
        ]);
    }
}
