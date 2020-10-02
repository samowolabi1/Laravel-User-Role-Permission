<?php

use Illuminate\Database\Seeder;

use App\Admin;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
            	App\Admin::create([
	            'email' => 'solaa@gmail.com',
	            'username' => 'Sola',
	            'password' => bcrypt('Admin'),
	            'role' => 'Admin',
	        ]);

        	App\Admin::create([

        		'email' => 'steven@gmail.com',
        		'username' => 'Steve',
        		'password' => bcrypt('Steve'),
        		'role' => 'SubAdmin',
        	]);
    	


    }
}
