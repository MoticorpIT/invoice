<?php

use Illuminate\Database\Seeder;

class LineItemTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('line_items')->insert(
	        [
	        	[
					'name' => '30g Maeng Da Powder',
					'description' => '30g Maeng Da Kratom Powder Bag - 3pk',
					'qty' => '1',
					'price' => '10',
					'product_id' => '1',
					'invoice_id' => '1',
					'created_at' => date("Y-m-d H:i:s")
				],
				[
					'name' => '30g Bali Powder',
					'description' => '30g Bali Kratom Powder Bag - 3pk',
					'qty' => '2',
					'price' => '10',
					'product_id' => '2',
					'invoice_id' => '2',
					'created_at' => date("Y-m-d H:i:s")
				],
				[
					'name' => '30g Trainwreck Powder',
					'description' => '30g Trainwreck Kratom Powder Bag - 3pk',
					'qty' => '5',
					'price' => '12',
					'product_id' => '3',
					'invoice_id' => '2',
					'created_at' => date("Y-m-d H:i:s")
				]
	        ]
	    );
    }
}
