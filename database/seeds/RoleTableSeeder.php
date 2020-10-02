<?php

use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Models\Role::create([

        	'name' => 'SuperAdmin',
            'description' => 'A SuperAdmin has access to all menu items, can make changes or delete any information',
        ]);

        App\Models\Role::create([

        	'name' => 'Admin',
             'description' => 'Create Vendor, Edit Vendor',
        ]);

        App\Models\Role::create([

        	'name' => 'User',
            'description' => 'Basic Things',
        ]);
    }
}
