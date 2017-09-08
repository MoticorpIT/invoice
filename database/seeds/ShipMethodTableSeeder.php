<?php

use Illuminate\Database\Seeder;

class ShipMethodTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ship_methods')->insert(
	        [
	        	[
	        		'name' => 'Ground',
		            'created_at' => date("Y-m-d H:i:s")
	        	],
	        	[
		            'name' => 'Overnight',
		            'created_at' => date("Y-m-d H:i:s")
	        	],
	        	[
		            'name' => '2-Day',
		            'created_at' => date("Y-m-d H:i:s")
	        	],
	        	[
		            'name' => 'Freight',
		            'created_at' => date("Y-m-d H:i:s")
	        	]
	        ]
	    );
    }
}
