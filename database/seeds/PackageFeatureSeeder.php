<?php

use Illuminate\Database\Seeder;
use App\Models\PackageFeature;

class PackageFeatureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PackageFeature::Create([
        	'package_id'                      => 1,
            'description'                  => 'Zero Wallet Credit',
          	'value'                        => '0',
        ]);

        PackageFeature::Create([
        	'package_id'                      => 1,
            'description'                  => 'Point Value Earned: 0PVs',
            'value'                        => '0',
        ]);

        PackageFeature::Create([
        	'package_id'                      => 1,
          	'description'                  => '1  Featured ads availability',
            'value'                        => '1',
        ]);


        PackageFeature::Create([
        	'package_id'                      => 1,
          	'description'                  => '5  Regular ads availability',
            'value'                        => '5',
        ]);

        PackageFeature::Create([
        	'package_id'                      => 1,
            'description'                  => 'For  Infinite  Day Only',
          	'value'                  => 'Infinite',
        ]);

        PackageFeature::Create([
        	'package_id'                      => 1,
            'description'                  => '100% Secure!',
          	'value'                  => '100%',
        ]);


        PackageFeature::Create([
        	'package_id'                      => 2,
            'description'                  => '1,000SKC Wallet Credit',
          	'value'                  => '1000',
        ]);

        PackageFeature::Create([
        	'package_id'                      => 2,
          	'description'                  => 'Point Value Earned: 20PVs',
            'value'                  => '20',
        ]);

        PackageFeature::Create([
        	'package_id'                      => 2,
          	'description'                  => '2  Featured ads availability',
            'value'                         => '2',
        ]);


        PackageFeature::Create([
        	'package_id'                      => 2,
          	'description'                  => '5  Regular ads availability',
            'value'                  => '5',
        ]);

        PackageFeature::Create([
        	'package_id'                      => 2,
          	'description'                  => 'For  Infinite  Day Only',
            'value'                         => 'Infinite',
        ]);

        PackageFeature::Create([
        	'package_id'                      => 2,
          	'description'                  => '100% Secure!',
            'value'                         => '100',
        ]);


        PackageFeature::Create([
        	'package_id'                      => 3,
          	'description'                  => ' 2,000SKC Wallet Credit',
            'value'                         => '2000',
        ]);

        PackageFeature::Create([
        	'package_id'                      => 3,
          	'description'                  => 'Point Value Earned: 50PVs',
            'value'                         => '50',
        ]);

        PackageFeature::Create([
        	'package_id'                      => 3,
          	'description'                  => '3  Featured ads availability',
            'value'                         => '3',
        ]);


        PackageFeature::Create([
        	'package_id'                      => 3,
          	'description'                  => '7  Regular ads availability',
            'value'                         => '7',
        ]);

        PackageFeature::Create([
        	'package_id'                      => 3,
          	'description'                  => 'For  Infinite  Day Only',
            'value'                         => 'Infinite',
        ]);

        PackageFeature::Create([
        	'package_id'                      => 3,
          	'description'                  => '100% Secure!',
            'value'                         => '100',
        ]);



        PackageFeature::Create([
        	'package_id'                      => 4,
          	'description'                  => ' 6,000SKC Wallet Credit',
            'value'                         => '6000',
        ]);

        PackageFeature::Create([
        	'package_id'                      => 4,
          	'description'                  => 'Point Value Earned: 100PVs',
            'value'                         => '100',
        ]);

        PackageFeature::Create([
        	'package_id'                      => 4,
          	'description'                  => '5  Featured ads availability',
            'value'                         => '5',
        ]);


        PackageFeature::Create([
        	'package_id'                      => 4,
          	'description'                  => '10  Regular ads availability',
            'value'                         => '10',
        ]);

        PackageFeature::Create([
        	'package_id'                      => 4,
          	'description'                  => 'For  Infinite  Day Only',
            'value'                         => 'Infinite',
        ]);

        PackageFeature::Create([
        	'package_id'                      => 4,
          	'description'                  => '100% Secure!',
            'value'                         => '100',
        ]);


        PackageFeature::Create([
        	'package_id'                      => 5,
          	'description'                  => ' 10,000SKC Wallet Credit',
            'value'                         => '10000',
        ]);

        PackageFeature::Create([
        	'package_id'                      => 5,
          	'description'                  => 'Point Value Earned: 200PVs',
            'value'                         => '200',
        ]);

        PackageFeature::Create([
        	'package_id'                      => 5,
          	'description'                  => 'Unlimited Featured ads availability',
            'value'                         => 'Unlimited',
        ]);


        PackageFeature::Create([
        	'package_id'                      => 5,
          	'description'                  => 'Unlimited  Regular ads availability',
            'value'                         => 'Unlimited',
        ]);

        PackageFeature::Create([
        	'package_id'                      => 5,
          	'description'                  => 'For  Infinite  Day Only',
            'value'                         => 'Infinite',
        ]);

        PackageFeature::Create([
        	'package_id'                      => 5,
          	'description'                  => '100% Secure!',
            'value'                         => '100',
        ]);
    }
}





