<?php

use Illuminate\Database\Seeder;
use App\Models\Permission;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Permission::Create([
            'name'             => 'event',
        ]);
        
        Permission::Create([
            'name'             => 'users',
        ]);

        Permission::Create([
            'name'             => 'payments',
        ]);
        
        Permission::Create([
            'name'             => 'roles',
        ]);

        Permission::Create([
            'name'             => 'permissions',
        ]);

        Permission::Create([
            'name'             => 'posts',
        ]);
    }
}
