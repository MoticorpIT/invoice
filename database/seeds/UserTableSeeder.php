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
				    'password' => bcrypt('password')
	        	],
	        	[
		            'name' => 'Joey B.',
				    'email' => 'joey@moticorp.com',
				    'password' => bcrypt('password')
	        	],
	        	[
		            'name' => 'Chad C.',
				    'email' => 'chad@moticorp.com',
				    'password' => bcrypt('password')
	        	]
	        ]
	    );
    }
}
