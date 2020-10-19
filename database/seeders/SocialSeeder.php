<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SocialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $socials = [
            ['contacts_id' => 1, ],
            ['linkedin' => 'linkedin.com/fernanda', 'contacts_id' => 2, ],
            ['facebook' => 'facebook.com/carolina', 'contacts_id' => 3, ],
            ['facebook' => 'facebook.com/gabriel' , 'linkedin' => 'linkedin.com/gabriel', 'contacts_id' => 4, ],
        ];

        foreach($socials as $social) {
            \App\Models\Social::create($social); 
        }
    }
}
