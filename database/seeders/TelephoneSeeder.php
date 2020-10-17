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
        $residential = 1;
        $comercial = 2;
        $cellular = 3;


        $phones = [
            ['phone_number' => '14996443023', 'phone_type_id' => $cellular],
            ['phone_number' => '11908814122', 'phone_type_id' => $comercial],
            ['phone_number' => '09123840198', 'phone_type_id' => $residential],
        ];

        foreach($phones as $phone) {
            \App\Models\Telephone::create($phone); 
        }
    }
}
