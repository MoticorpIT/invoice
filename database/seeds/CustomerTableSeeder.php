<?php

use Illuminate\Database\Seeder;

class CustomerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('customers')->insert(
	        [
	        	[
	        		'company' => 'Purple Haze',
				    'contact_first' => 'Mike',
				    'contact_last' => 'Benezra',
				    'street' => '704 Seaboard St. UNIT G',
				    'city' => 'Myrtle Beach',
				    'state' => 'SC',
				    'zip' => '29577',
				    'phone1' => '843-222-4910',
				    'phone2' => '843-712-2371',
				    'fax' => '843-712-2024',
				    'email' => 'mike@moticorp.com',
				    'active' => '1',
		            'created_at' => date("Y-m-d H:i:s")
	        	],
	        	[
		            'company' => 'High Times',
				    'contact_first' => 'Joe',
				    'contact_last' => 'Shmoe',
				    'street' => '123 Somewhere St.',
				    'city' => 'Holywood',
				    'state' => 'CA',
				    'zip' => '90210',
				    'phone1' => '555-222-4910',
				    'phone2' => '555-712-2371',
				    'fax' => '555-712-2024',
				    'email' => 'joe@high-times.com',
				    'active' => '1',
		            'created_at' => date("Y-m-d H:i:s")
	        	],
	        	[
		            'company' => 'The Times',
				    'contact_first' => 'Joe',
				    'contact_last' => 'Shmoe',
				    'street' => '123 Somewhere St.',
				    'city' => 'Holywood',
				    'state' => 'CA',
				    'zip' => '10312',
				    'phone1' => '555-222-4910',
				    'phone2' => '555-712-2371',
				    'fax' => '555-712-2024',
				    'email' => 'joe@the-times.com',
				    'active' => '0',
		            'created_at' => date("Y-m-d H:i:s")
	        	],[
		            'company' => 'Blue Times',
				    'contact_first' => 'Joe',
				    'contact_last' => 'Shmoe',
				    'street' => '123 Somewhere St.',
				    'city' => 'New York',
				    'state' => 'NY',
				    'zip' => '10312',
				    'phone1' => '555-222-4910',
				    'phone2' => '555-712-2371',
				    'fax' => '555-712-2024',
				    'email' => 'joe@blue-times.com',
				    'active' => '1',
		            'created_at' => date("Y-m-d H:i:s")
	        	]
	        ]
	    );
    }
}
