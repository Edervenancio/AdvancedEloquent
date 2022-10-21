<?php

use Illuminate\Database\Seeder;
use App\Models\Address;
class AddressTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        return Address::factory(20)->create();  

    }
}
