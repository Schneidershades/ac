<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	
        Package::Create([
        	'user_id'                            => 1,
        	'role_id'                            => 1,
        ]);
    }
}
