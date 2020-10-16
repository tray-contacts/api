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
        const Residential = 0;
        const Comercial = 1;
        const Cellular = 2;

        $testUser = User::where('name', 'leonardo')->get()->id;

        $phones = [
            ['phone_number' => '14996443023', 'user_id' => $testUser, 'phone_type_id' => Cellular],
        ];

        foreach($phones as $phone) {
            \App\Models\Telephone::create($phone); 
        }
    }
}
