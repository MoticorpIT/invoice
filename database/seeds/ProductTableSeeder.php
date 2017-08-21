<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert(
	        [
	        	[
	        		'name' => '30g Maeng Da',
				    'msrp' => '24.95',
				    'retailer_price' => '7.95',
				    'description' => '30 grams of maeng da powder',
				    'short_descript' => '30g Maeng Da Powder',
				    'active' => '1',
		            'created_at' => date("Y-m-d H:i:s")
	        	],
	        	[
		            'name' => '30g Trainwreck',
				    'msrp' => '29.95',
				    'retailer_price' => '8.95',
				    'description' => '30 grams of trainwreck powder',
				    'short_descript' => '30g Trainwreck Powder',
				    'active' => '1',
		            'created_at' => date("Y-m-d H:i:s")
	        	],
	        	[
		            'name' => '30g Bali',
				    'msrp' => '24.95',
				    'retailer_price' => '7.95',
				    'description' => '30 grams of bali powder',
				    'short_descript' => '30g Bali Powder',
				    'active' => '1',
		            'created_at' => date("Y-m-d H:i:s")
	        	]
	        ]
	    );
    }
}
