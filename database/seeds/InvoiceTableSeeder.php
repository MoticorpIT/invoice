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
					'inv_number' => '10023',
					'subtotal' => '1500.00',
					'shipping' => '240.00',
					'total' => '1900.00',
					'user_id' => '1',
					'term_id' => '1',
					'ship_method_id' => "3",
					'status_id' => '1',
					'customer_id' => '1',
					'location_id' => '3',
					'created_at' => date("Y-m-d H:i:s")
				],
				[
					'due' => '09-26-17',
					'inv_number' => '10024',
					'subtotal' => '1240.00',
					'shipping' => '190.00',
					'total' => '1700.00',
					'user_id' => '2',
					'term_id' => '4',
					'ship_method_id' => "2",
					'status_id' => '2',
					'customer_id' => '3',
					'location_id' => '1',
					'created_at' => date("Y-m-d H:i:s")
				],
				[
					'due' => '09-29-17',
					'inv_number' => '10025',
					'subtotal' => '978.00',
					'shipping' => '165.00',
					'total' => '1279.00',
					'user_id' => '1',
					'term_id' => '2',
					'ship_method_id' => "3",
					'status_id' => '3',
					'customer_id' => '3',
					'location_id' => '2',
					'created_at' => date("Y-m-d H:i:s")
				],[
					'due' => '10-07-17',
					'inv_number' => '10026',
					'subtotal' => '1780.00',
					'shipping' => '286.32',
					'total' => '2124.32',
					'user_id' => '1',
					'term_id' => '3',
					'ship_method_id' => "1",
					'status_id' => '2',
					'customer_id' => '1',
					'location_id' => '3',
					'created_at' => date("Y-m-d H:i:s")
				],
	        ]
	    );
    }
}
