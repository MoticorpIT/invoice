<?php

use Illuminate\Database\Seeder;

class LocationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('locations')->insert(
	[
		[
			'name' => 'Location 1',
            'contact_name' => 'Joe Shmoe',
            'street' => '123 somewhere ave.',
            'street2' => '',
            'city' => 'Myrtle Beach',
            'state' => 'SC',
            'zip' => '29577',
            'phone' => '8433333333',
            'customer_id' => 3,
	        'created_at' => date("Y-m-d H:i:s")
		],
		[
	        'name' => 'Surfside Location',
            'contact_name' => 'Jon Snow',
            'street' => 'somewhere in ss',
            'street2' => 'unit 3',
            'city' => 'Surfside Beach',
            'state' => 'SC',
            'zip' => '29572',
            'phone' => '',
            'customer_id' => 3,
	        'created_at' => date("Y-m-d H:i:s")
		],
		[
	        'name' => 'Surfside Location',
            'contact_name' => 'Jon Snow',
            'street' => 'somewhere in ss',
            'street2' => 'unit 3',
            'city' => 'Surfside Beach',
            'state' => 'SC',
            'zip' => '29572',
            'phone' => '',
            'customer_id' => 1,
	        'created_at' => date("Y-m-d H:i:s")
		],
		[
	        'name' => 'Surfside Location',
            'contact_name' => 'Jon Snow',
            'street' => 'somewhere in ss',
            'street2' => 'unit 3',
            'city' => 'Surfside Beach',
            'state' => 'SC',
            'zip' => '29572',
            'phone' => '',
            'customer_id' => 2,
	        'created_at' => date("Y-m-d H:i:s")
		],
		[
	        'name' => 'Surfside Location',
            'contact_name' => 'Jon Snow',
            'street' => 'somewhere in ss',
            'street2' => 'unit 3',
            'city' => 'Surfside Beach',
            'state' => 'SC',
            'zip' => '29572',
            'phone' => '',
            'customer_id' => 4,
	        'created_at' => date("Y-m-d H:i:s")
		]
	]
);
    }
}
