<?php

use Illuminate\Database\Seeder;

class VendorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		factory(App\Address::class, 25)->create()->each(function($address) {
		    factory(App\Vendor::class, 1)->create(['address_id' => $address->id])->each(function($vendor) {
		    	factory(App\Component::class,20)->create(['vendor_id'=>$vendor->id]);
		    });
		});

    }
}
