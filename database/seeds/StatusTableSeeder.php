<?php

use Illuminate\Database\Seeder;

class StatusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('statuses')->insert(
	        [
	        	[
	        		'status' => 'Draft',
		            'created_at' => date("Y-m-d H:i:s")
	        	],
	        	[
		            'status' => 'Quote',
		            'created_at' => date("Y-m-d H:i:s")
	        	],
	        	[
		            'status' => 'Paid',
		            'created_at' => date("Y-m-d H:i:s")
	        	],
	        	[
		            'status' => 'Partial',
		            'created_at' => date("Y-m-d H:i:s")
	        	],
	        	[
		            'status' => 'Unpaid', 
		            'created_at' => date("Y-m-d H:i:s")
	        	],
	        	[
		            'status' => 'Past Due',
		            'created_at' => date("Y-m-d H:i:s")
	        	]
	        ]
	    );
    }
}
