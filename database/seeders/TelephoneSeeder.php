<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class TelephoneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $residential = 0;
        $comercial = 1;
        $cellular = 2;

        $testUser = User::find(1)->id;

        $phones = [
            ['phone_number' => '14996443023', 'user_id' => $testUser, 'phone_type_id' => $cellular],
        ];

        foreach($phones as $phone) {
            \App\Models\Telephone::create($phone); 
        }
    }
}
