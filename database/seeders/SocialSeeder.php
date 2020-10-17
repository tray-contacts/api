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
            ['facebook' => 'facebook.com/gabriel' , 'linkedin' => 'linkedin.com/gabriel', ],
            ['facebook' => 'facebook.com/fernanda', 'linkedin' => 'linkedin.com/fernanda', ],
            ['facebook' => 'facebook.com/carolina', 'linkedin' => 'linkedin.com/carolina', ],
        ];

        foreach($socials as $social) {
            \App\Models\Social::create($social); 
        }
    }
}
