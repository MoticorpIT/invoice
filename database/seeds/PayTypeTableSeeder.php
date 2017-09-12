<?php

use Illuminate\Database\Seeder;

class PayTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pay_types')->insert(
	        [
	        	[
	        		'name' => 'Check',
		            'created_at' => date("Y-m-d H:i:s")
	        	],
	        	[
	        		'name' => 'Cash',
		            'created_at' => date("Y-m-d H:i:s")
	        	],
	        	[
		            'name' => 'Credit Card',
		            'created_at' => date("Y-m-d H:i:s")
	        	],
	        	[
		            'name' => 'PayPal',
		            'created_at' => date("Y-m-d H:i:s")
	        	]
	        ]
	    );
    }
}
