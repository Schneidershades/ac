<?php

use Illuminate\Database\Seeder;
use App\Models\EventPackage;

class EventPackageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        EventPackage::Create([
            'event_package_description'     => 'Conference Fee',
            'amount'             	=> 20000,
            'event_id'              => '1'
        ]);

        EventPackage::Create([
            'event_package_description'     => 'Exhibition Fee',
            'amount'             	=> 100000,
            'event_id'              => '1'
        ]);

        EventPackage::Create([
            'event_package_description'     => 'Membership Fee',
            'amount'             	=> 10000,
            'event_id'              => '1'
        ]);
    }
}
