<?php

use Illuminate\Database\Seeder;

class PaymentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('payments')->insert(
	        [
	        	[
			        'amount' => '122',
			        'invoice_id' => '1',
			        'payment_type_id' => '2',
			        'created_at' => date("Y-m-d H:i:s")
	        	],
	        	[
			        'amount' => '122',
			        'invoice_id' => '2',
			        'payment_type_id' => '1',
			        'created_at' => date("Y-m-d H:i:s")
	        	],
	        	[
			        'amount' => '122',
			        'invoice_id' => '2',
			        'payment_type_id' => '1',
			        'created_at' => date("Y-m-d H:i:s")
	        	],
	        ]
	    );
    }
}
