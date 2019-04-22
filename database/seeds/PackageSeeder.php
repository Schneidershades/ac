<?php

use Illuminate\Database\Seeder;
use App\Models\Package;

class PackageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
    	Package::Create([
        	'name'                            => 'Dream',
          	'amount'                      => 0,
          'percentage'                      => 0,
        	'bonus'                      => 0,
          	'description'                  => 'For Infinite Day Only',
        ]);

        Package::Create([
        	'name'                            => 'Bronze',
          	'amount'                      => 5000,
        	'percentage'                      => 20,
          'bonus'                      => 20,
          	'description'                  => 'For Infinite Day Only',
        ]);

        Package::Create([
        	'name'                            => 'Silver',
          	'amount'                      => 10000,
        	'percentage'                      => 20,
          'bonus'                      => 50,
          	'description'                  => 'For Infinite Day Only',
        ]);

        Package::Create([
        	'name'                            => 'Gold',
          	'amount'                      => 30000,
        	'percentage'                      => 20,
          'bonus'                      => 100,
          	'description'                  => 'For Infinite Day Only',
        ]);

        Package::Create([
        	'name'                            => 'Ultimate',
          	'amount'                      => 50000,
        	'percentage'                      => 20,
          'bonus'                      => 200,
          	'description'                  => 'For Infinite Day Only',
        ]);
    }
}
