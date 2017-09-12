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
            'name' => 'Seaboard',
            'contact_name' => 'Emily',
            'street' => '704 Seaboard Street',
            'street2' => 'Unit F',
            'city' => 'Myrtle Beach',
            'state' => 'SC',
            'zip' => '29577',
            'phone' => '843-232-7261',
            'customer_id' => 3,
            'created_at' => date("Y-m-d H:i:s")
        ],
        [
            'name' => 'Surfside',
            'contact_name' => 'John',
            'street' => '1706 Hwy 17 N.',
            'street2' => ' ',
            'city' => 'Surfside Beach',
            'state' => 'SC',
            'zip' => '29575',
            'phone' => '8439459181',
            'customer_id' => 3,
            'created_at' => date("Y-m-d H:i:s")
        ],
        [
            'name' => 'North Myrtle Beach',
            'contact_name' => 'Charles',
            'street' => '3802 Hwy 17',
            'street2' => 'unit D',
            'city' => 'North Myrtle Beach',
            'state' => 'sc',
            'zip' => '29582',
            'phone' => '843-2721211',
            'customer_id' => 1,
            'created_at' => date("Y-m-d H:i:s")
        ],
        [
            'name' => 'Dunkin',
            'contact_name' => 'William',
            'street' => '3001 N Kings Hwy',
            'street2' => 'Unit C-1',
            'city' => 'Myrtle Beach',
            'state' => 'Sc',
            'zip' => '29577',
            'phone' => '843444-0627',
            'customer_id' => 2,
            'created_at' => date("Y-m-d H:i:s")
        ],
        [
            'name' => 'Chuck',
            'contact_name' => 'Steve',
            'street' => '778 folly rd',
            'street2' => 'unit A2',
            'city' => 'Charleston',
            'state' => 'sc',
            'zip' => '29412',
            'phone' => '84372495-56',
            'customer_id' => 4,
            'created_at' => date("Y-m-d H:i:s")
        ]
    ]
);
    }
}
