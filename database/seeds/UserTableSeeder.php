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
        DB::table('users')->insert(
	        [
	        	[
	        		'name' => 'Yosi B.',
				    'email' => 'yosi@moticorp.com',
				    'password' => bcrypt('password'),
				    'mobile' => '843-555-1234'
	        	],
	        	[
		            'name' => 'Joey B.',
				    'email' => 'joey@moticorp.com',
				    'password' => bcrypt('password'),
				    'mobile' => '843-777-9876'
	        	],
	        	[
		            'name' => 'Chad C.',
				    'email' => 'chad@moticorp.com',
				    'password' => bcrypt('password'),
				    'mobile' => '843-555-4321'
	        	]
	        ]
	    );
    }
}
