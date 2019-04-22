<?php

use Illuminate\Database\Seeder;
use App\Models\State;

class StatesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        State::Create([
            'name'             => 'fct-abuja',
        ]);

        State::Create([
            'name'             => 'abia',
        ]);

        State::Create([
            'name'             => 'adamawa',
        ]);
        
        State::Create([
        	'name'             => 'akwa-Ibom',
        ]);

        State::Create([
            'name'             => 'anambra',
        ]);

        State::Create([
        	'name'             => 'bauchi',
        ]);

        State::Create([
            'name'             => 'bayelsa',
        ]);

        State::Create([
            'name'             => 'benue',
        ]);
        
        State::Create([
        	'name'             => 'borno',
        ]);

        State::Create([
            'name'             => 'cross-River',
        ]);

        State::Create([
        	'name'             => 'delta',
        ]);

        State::Create([
            'name'             => 'ebonyi',
        ]);

        State::Create([
            'name'             => 'edo',
        ]);
        
        State::Create([
        	'name'             => 'ekiti',
        ]);

        State::Create([
            'name'             => 'enugu',
        ]);

        State::Create([
        	'name'             => 'gombe',
        ]);

        State::Create([
            'name'             => 'imo',
        ]);

        State::Create([
            'name'             => 'jigawa',
        ]);

        State::Create([
            'name'             => 'kaduna',
        ]);
        
        State::Create([
        	'name'             => 'kano',
        ]);

        State::Create([
            'name'             => 'kastina',
        ]);

        State::Create([
        	'name'             => 'kebbi',
        ]);

        State::Create([
            'name'             => 'kogi',
        ]);

        State::Create([
            'name'             => 'kwara',
        ]);
        
        State::Create([
        	'name'             => 'lagos',
        ]);

        State::Create([
            'name'             => 'nassarawa',
        ]);

        State::Create([
        	'name'             => 'niger',
        ]);

        State::Create([
            'name'             => 'ogun',
        ]);

        State::Create([
            'name'             => 'ondo',
        ]);

        State::Create([
            'name'             => 'osun',
        ]);
        
        State::Create([
        	'name'             => 'oyo',
        ]);

        State::Create([
            'name'             => 'plateau',
        ]);

        State::Create([
        	'name'             => 'rivers',
        ]);

        State::Create([
            'name'             => 'sokoto',
        ]);

        State::Create([
            'name'             => 'taraba',
        ]);
        
        State::Create([
        	'name'             => 'yobe',
        ]);

        State::Create([
            'name'             => 'zamfara',
        ]);
    }
}
