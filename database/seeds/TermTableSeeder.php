<?php

use Illuminate\Database\Seeder;

class TermTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('terms')->insert(
	        [
	        	[
	        		'name' => 'Prepay',
		            'created_at' => date("Y-m-d H:i:s")
	        	],
	        	[
	        		'name' => 'Due Now',
		            'created_at' => date("Y-m-d H:i:s")
	        	],
	        	[
		            'name' => 'COD',
		            'created_at' => date("Y-m-d H:i:s")
	        	],
	        	[
		            'name' => '14 Days',
		            'created_at' => date("Y-m-d H:i:s")
	        	],
	        	[
		            'name' => '30 Days',
		            'created_at' => date("Y-m-d H:i:s")
	        	]
	        ]
	    );
    }
}
