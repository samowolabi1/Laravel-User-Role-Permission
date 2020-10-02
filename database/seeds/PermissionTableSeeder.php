<?php

use Illuminate\Database\Seeder;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Models\Permission::create([

        	'name' => 'Create User',
        ]);

        App\Models\Permission::create([

            'name' => 'Delete Vendor',
        ]);

        App\Models\Permission::create([

            'name' => 'Create Vendor',
        ]);

        App\Models\Permission::create([

        	'name' => 'Delete User',
        ]);

        App\Models\Permission::create([

        	'name' => 'Edit User',
        ]);

        App\Models\Permission::create([

        	'name' => 'Edit Vendor',
        ]);
    }
}
