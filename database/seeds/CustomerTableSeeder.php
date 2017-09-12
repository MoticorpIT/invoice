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
				    'phone1' => '843-222-4910',
				    'phone2' => '843-712-2371',
				    'fax' => '843-712-2024',
				    'email' => 'mike@moticorp.com',
				    'active' => '1',
		            'created_at' => date("Y-m-d H:i:s")
	        	],
	        	[
		            'company' => 'High Times',
				    'contact_first' => 'Dave',
				    'contact_last' => 'Thimble',
				    'phone1' => '8432224627',
				    'phone2' => '',
				    'fax' => '843-712-2024',
				    'email' => 'dave@hightimes.com',
				    'active' => '1',
		            'created_at' => date("Y-m-d H:i:s")
	        	],
	        	[
		            'company' => 'The Times',
				    'contact_first' => 'Larry',
				    'contact_last' => 'Huskerson',
				    'phone1' => '913-736-1183',
				    'phone2' => '913-967-2244',
				    'fax' => '913-774-1142',
				    'email' => 'larry@the-times.com',
				    'active' => '1',
		            'created_at' => date("Y-m-d H:i:s")
	        	],[
		            'company' => 'Blue Times',
				    'contact_first' => 'Lisa',
				    'contact_last' => 'Turtle',
				    'phone1' => '3449984432',
				    'phone2' => '3447728844',
				    'fax' => '',
				    'email' => 'lisa@bellsavers.com',
				    'active' => '1',
		            'created_at' => date("Y-m-d H:i:s")
	        	]
	        ]
	    );
    }
}
