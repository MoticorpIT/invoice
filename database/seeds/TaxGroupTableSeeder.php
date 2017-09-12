<?php

use Illuminate\Database\Seeder;

class TaxGroupTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tax_groups')->insert(
	        [
	        	[
	        		'name' => 'Tax Free',
	        		'rate' => '0.00',
		            'created_at' => date("Y-m-d H:i:s")
	        	],
	        	[
	        		'name' => 'SC',
	        		'rate' => '9',
		            'created_at' => date("Y-m-d H:i:s")
	        	]
	        ]
	    );
    }
}
