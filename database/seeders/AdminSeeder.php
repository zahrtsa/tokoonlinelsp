<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $users = [
            [
                'name' => 'admin',
                'email' => 'admin@seeder.com',
                'password' => Hash::make('passwordadmin'),
                'level' => 'admin',
                'email_verified_at' => now()

            ],
            [
                'name' => 'user',
                'email' => 'user@seeder.com',
                'password' => Hash::make('passworduser'),
                'level' => 'customer',
                'email_verified_at' => now()

            ],
        ];

        foreach($users as $user){
            User::create($user);
        }
    }
}
