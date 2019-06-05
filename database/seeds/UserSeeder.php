<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user2 = User::Create([
            'name'                            => 'Genesis',
            'email'                            => 'info@admin.com',
            'password'                      => bcrypt('password'),
            'package_id'                      => 1,
        ]);



        $user4 = User::Create([
        	'name'                            => 'Alpha Archibong Attang',
            'slug'                            => str_slug('Alpha Archibong Attang'),
        	'email'                            => 'archi.infinite@gmail.com',
        	'organization'                      => 'Infinite Holdings Ltd',
            'phone1'                      => '08169556004',
            'how_did_you_hear_about_ac'                      => 'online-advert',
            'category_id'                      => '13',
            'password'                      => bcrypt('archi1965'),
        	'package_id'                      => 1,
        ]);

        $user4 = User::Create([
            'name'                            => 'Archibong Williams Attang',
            'slug'                            => str_slug('Archibong Williams Attang'),
            'email'                            => 'info@infiniteholdingsltd.net',
            'organization'                      => 'Infinite Holdings Ltd',
            'phone1'                      => '08023271927',
            'how_did_you_hear_about_ac'        => 'radio',
            'category_id'                      => '6',
            'password'                      => bcrypt('archi1965'),
            'package_id'                      => 1,
        ]);

 

        $user5 = User::Create([
        	'name'                            => 'Col Frank Ofodile (rtd)',
        	'email'                            => 'info@rokada.co',
        	'password'                      => '$2y$10$Y83i/sDI.x3/Ow7sub8h6O2lq.NZa5rn3pCMlzweUXrDNa.g0lAOO',
        	'package_id'                      => 1,
        ]);

    }
}
