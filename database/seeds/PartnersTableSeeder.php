<?php

use Illuminate\Database\Seeder;
use App\Models\Partner;

class PartnersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Partner::Create([
        	'name'          	 			=> 'SIT Consulting',
        	'image'          				=> 'assets-web/img/partners/sit.png',
        ]);
    }
}
