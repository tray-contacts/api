<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $contacts = [
            [ 'name' => 'Gabriel Perez', 'email' => 'gabriel.perez@tray.net.br', 'socials_id' => 1, 'user_id' => 1, 'telephone_id' => 1, ],
            [ 'name' => 'Fernanda Mazuquini', 'email' => 'fmazuquini@tray.net.br', 'socials_id' => 2, 'user_id' => 1, 'telephone_id' => 2, ],
            [ 'name' => 'Carolina Ribeiro', 'email' => 'clivolis@tray.net.br', 'socials_id' => 3, 'user_id' => 1, 'telephone_id' => 3, ],
        ];

        foreach($contacts as $contact) {
            \App\Models\Contacts::create($contact); 
        }
    }
}
