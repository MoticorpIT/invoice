<?php

use Illuminate\Database\Seeder;

class NoteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('notes')->insert(
	        [
	        	[
	        		'note' => 'These guys are AWESOME!! Talk to Mike.',
				    'customer_id' => '1',
				    'user_id' => '1',
		            'created_at' => date("Y-m-d H:i:s")
	        	],
	        	[
	        		'note' => 'Ordered again, this time I talked to Joe',
				    'customer_id' => '1',
				    'user_id' => '2',
		            'created_at' => date("Y-m-d H:i:s")
	        	],
	        	[
	        		'note' => 'They ran out of Kratom - gotta check more often',
				    'customer_id' => '1',
				    'user_id' => '1',
		            'created_at' => date("Y-m-d H:i:s")
	        	],
	        	[
	        		'note' => 'Holywood location is slammed - they\'re trying it out',
				    'customer_id' => '2',
				    'user_id' => '2',
		            'created_at' => date("Y-m-d H:i:s")
	        	],
	        	[
	        		'note' => 'going good for them',
				    'customer_id' => '2',
				    'user_id' => '3',
		            'created_at' => date("Y-m-d H:i:s")
	        	]
	        ]
	    );
    }
}
