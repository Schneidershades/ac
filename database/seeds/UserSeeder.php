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
        $user1 = User::Create([
        	'name'                            => 'Busayo Schneider',
        	'email'                            => 'admin@admin.com',
        	'password'                      => bcrypt('password'),
        	'package_id'                      => 1,
        ]);


        
        $user2 = User::Create([
        	'name'                            => 'Genesis',
        	'email'                            => 'info@admin.com',
        	'password'                      => bcrypt('password'),
        	'package_id'                      => 1,
        ]);

  

        $user3 = User::Create([
        	'name'                            => 'ichoc ken',
        	'email'                            => 'ikoc3333h@example.com',
        	'password'                      => bcrypt('password'),
        	'package_id'                      => 1,
        ]);




        $user4 = User::Create([
        	'name'                            => 'Banny Throw Schneider',
        	'email'                            => 'btrantow5434@example.com',
        	'password'                      => bcrypt('password'),
        	'package_id'                      => 1,
        ]);

 

        $user5 = User::Create([
        	'name'                            => 'sadiya Mustafa',
        	'email'                            => 'sadiya446@yahoo.com',
        	'password'                      => bcrypt('password'),
        	'package_id'                      => 1,
        ]);

    }
}
