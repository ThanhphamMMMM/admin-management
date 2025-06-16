<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       $user = User::create([

        'email'=>'vungocquangg@gmail.com',
        'password'=>Hash::make('thanh134d232'),
        'role_id'=>'4',
            
        ]);

        $user->profile()->create([
            'full_name'=>' ngoc quang',
            'phone'=>'1235567751',
            'address'=>'quang ninh',
            'birthday'=>'2002-11-08',

        ]);
    }
}
