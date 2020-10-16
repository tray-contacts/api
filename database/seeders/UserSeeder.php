<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [ 'name' => 'leonardo', 'email' => 'leeosilva0909@gmail.com', 'password' => Hash::make('batata'), ],
        ];

        foreach($users as $user) {
            \App\Models\User::create($user); 
        }
    }
}
