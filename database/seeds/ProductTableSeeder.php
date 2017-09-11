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
		            'slug' => str_slug('30g Maeng Da', '-'),
		            'default_price' => '7.95',
		            'msrp' => '24.95',
		            'pack_size' => '3',
		            'description' => '30 grams of maeng da kratom powder',
		            'short_descript' => '30g Maeng Da Powder - 3 Pack',
		            'upc' => '710928946686',
		            'active' => '1',
		            'created_at' => date("Y-m-d H:i:s")
	        	],[
		            'name' => '30g Trainwreck',
		            'slug' => str_slug('30g Trainwreck', '-'),
		            'default_price' => '7.95',
		            'msrp' => '24.95',
		            'pack_size' => '3',
		            'description' => '30 grams of trainwreck kratom powder',
		            'short_descript' => '30g Trainwreck Powder - 3 Pack',
		            'upc' => '707129254467',
		            'active' => '1',
		            'created_at' => date("Y-m-d H:i:s")
	        	],[
		            'name' => '30g Bali',
		            'slug' => str_slug('30g Bali', '-'),
		            'default_price' => '7.95',
		            'msrp' => '24.95',
		            'pack_size' => '3',
		            'description' => '30 grams of bali kratom powder',
		            'short_descript' => '30g Bali Powder - 3 Pack',
		            'upc' => '707129254344',
		            'active' => '1',
		            'created_at' => date("Y-m-d H:i:s")
	        	]
	        ]
	    );
    }
}
