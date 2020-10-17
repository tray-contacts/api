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
            ['facebook' => 'facebook.com/gabriel' , 'linkedin' => 'linkedin.com/gabriel', 'contacts_id' => 1, ],
            ['facebook' => 'facebook.com/fernanda', 'linkedin' => 'linkedin.com/fernanda', 'contacts_id' => 2, ],
            ['facebook' => 'facebook.com/carolina', 'linkedin' => 'linkedin.com/carolina', 'contacts_id' => 3, ],
        ];

        foreach($socials as $social) {
            \App\Models\Social::create($social); 
        }
    }
}
