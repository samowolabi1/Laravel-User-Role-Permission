<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        	App\User::create([
	            'email' => 'chris@chris.com',
	            'name' => 'Sola',
                'tenant_id' => '1',
                'role_id' => '1',
	            'password' => bcrypt('password'),
	            'activate' => 1,
	        ]);

        	App\User::create([
                'email' => 'diva@diva.com',
                'name' => 'Diva',
                'tenant_id' => '1',
                'role_id' => '2',
                'password' => bcrypt('password'),
                'activate' => 1,
            ]);
    	
    }
}
