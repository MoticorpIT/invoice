<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CustomerTableSeeder::class);
        $this->call(NoteTableSeeder::class);
        $this->call(UserTableSeeder::class);
        $this->call(LocationTableSeeder::class);
        $this->call(ProductTableSeeder::class);
        $this->call(InvoiceTableSeeder::class);
        $this->call(StatusTableSeeder::class);
        $this->call(CategoryTableSeeder::class);
        $this->call(TermTableSeeder::class);
        $this->call(LineItemTableSeeder::class);
        $this->call(ShipMethodTableSeeder::class);
    }
}
