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
            [ 'id' => 1, 'name' => 'leonardo', 'email' => 'tray@tray.net.br', 'password' => Hash::make('tray'), ],
            [ 'id' => 2, 'name' => 'test', 'email' => 'test@gmail.com', 'password' => Hash::make('tray'), ],
        ];

        foreach($users as $user) {
            \App\Models\User::create($user); 
        }
    }
}
