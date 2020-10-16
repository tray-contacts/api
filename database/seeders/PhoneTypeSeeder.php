<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PhoneTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $phoneTypes = [
            ['description' => 'Residencial'],
            ['description' => 'Comercial'],
            ['description' => 'Celular'],
        ];

        foreach($phoneTypes as $type) {
            \App\Models\PhoneType::create($type); 
        }
    }
}
