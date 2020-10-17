<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CredentialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $credentials = [
            [ 'id' => 1, 'name' => 'leonardo', 'email' => 'leeosilva0909@gmail.com', ],
            [ 'id' => 2, 'name' => 'test', 'email' => 'test@gmail.com', ],
        ];

        foreach($credentials as $credential) {
            \App\Models\Credentials::create($credential); 
        }
    }
}
