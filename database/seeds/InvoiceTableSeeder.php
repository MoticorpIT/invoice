<?php

use Illuminate\Database\Seeder;

class InvoiceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('invoices')->insert(
	        [
	        	[
	        		'due' => '09-23-17',
			        'shipping' => '126.36',
			        'add_1_text' => 'handling',
			        'add_1' => '25.00',
			        'add_2_text' => 'cause we can',
			        'add_2' => '50.00',
			        'sub_total' => '1725.26',
			        'total' => '1851.62',
			        'status_id' => '1',
			        'customer_id' => '2',
			        'invoice_num' => '10001',
			        'inv_note' => 'hey man nice shot',
			        'created_at' => date("Y-m-d H:i:s")
	        	],
	        	[
		            'due' => '09-27-17',
			        'shipping' => '96.36',
			        'add_1_text' => 'handline',
			        'add_1' => '75.00',
			        'add_2_text' => 'gold brackets',
			        'add_2' => '144.11',
			        'sub_total' => '1695.26',
			        'total' => '1821.62',
			        'status_id' => '1',
			        'customer_id' => '1',
			        'invoice_num' => '10002',
			        'inv_note' => 'hey man nice shot too',
			        'created_at' => date("Y-m-d H:i:s")
	        	],
	        	[
		            'due' => '09-23-17',
			        'shipping' => '26.36',
			        'add_1_text' => 'bundling',
			        'add_1' => '200.00',
			        'add_2_text' => 'strapping',
			        'add_2' => '175.00',
			        'sub_total' => '725.26',
			        'total' => '851.62',
			        'status_id' => '1',
			        'customer_id' => '2',
			        'invoice_num' => '10003',
			        'inv_note' => 'hey man nice shot three',
			        'created_at' => date("Y-m-d H:i:s")
	        	]
	        ]
	    );
    }
}
