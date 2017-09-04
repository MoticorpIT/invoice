<?php

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert(
	        [
	        	[
	        		'name' => 'powders',
	        		'slug' => str_slug('powders', '-'),
				    'description' => 'Kratom in powder form',
				    'active' => '1',
		            'created_at' => date("Y-m-d H:i:s")
	        	],[
	        		'name' => 'capsules',
	        		'slug' => str_slug('capsules', '-'),
				    'description' => 'Kratom in capsule form',
				    'active' => '1',
		            'created_at' => date("Y-m-d H:i:s")
	        	],[
	        		'name' => 'extracts',
	        		'slug' => str_slug('extracts', '-'),
				    'description' => 'Kratom in liquid form',
				    'active' => '1',
		            'created_at' => date("Y-m-d H:i:s")
	        	],
	        ]
	    );
    }
}
