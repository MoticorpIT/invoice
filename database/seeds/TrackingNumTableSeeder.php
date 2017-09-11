<?php

use Illuminate\Database\Seeder;

class TrackingNumTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tracking_nums')->insert(
	        [
	        	[
	        		'track_num' => '797600544620',
	        		'invoice_id' => '1',
		            'created_at' => date("Y-m-d H:i:s")
	        	],
	        	[
	        		'track_num' => '406155620654',
	        		'invoice_id' => '2',
		            'created_at' => date("Y-m-d H:i:s")
	        	],
	        	[
	        		'track_num' => '406153782781',
	        		'invoice_id' => '2',
		            'created_at' => date("Y-m-d H:i:s")
	        	],
	        	[
	        		'track_num' => '406153782818',
	        		'invoice_id' => '3',
		            'created_at' => date("Y-m-d H:i:s")
	        	],
	        ]
	    );
    }
}
