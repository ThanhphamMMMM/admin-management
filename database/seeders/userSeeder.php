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
                'descride' => ' quyền-vip pro(1)',
            ],
            [
                'name' => 'HR',
                'descride' => ' quyền-pro(2)',
            ],

            [
                'name' => 'nhan viên',
                'descride' => 'ko quyền(3)',
            ]
        ]);

        $user = User::create([
            'email' => 'vuvanhoa@gmail.com',
            'password' => Hash::make('thanh134d232'),
            'role_id' => Role::first()->id,
        ]);

        $user->profile()->create([
            'full_name' => 'vu van hoa',
            'phone' => '0792879231',
            'address' => 'ha noi moi',
            'birthday' => '2001-11-08',
        ]);
    }
}
