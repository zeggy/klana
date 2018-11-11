<?php

use Illuminate\Database\Seeder;

class VendorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('vendors')->insert([
            ['name' => 'Dion Maulana', 'photo' => 'vendor/1/vendor1.png', 'rating' => 4.5, 'phone' => '+62 812 3453 2315'],
            ['name' => 'Alma Al Farisi', 'photo' => 'vendor/2/vendor2.png', 'rating' => 4.5, 'phone' => '+62 823 7554 2421'],
            ['name' => 'Greenhouse', 'photo' => 'vendor/3/vendor3.png', 'rating' => 4.5, 'phone' => '+62 812 2421 8789'],
            ['name' => 'Flat 06 Trips', 'photo' => 'vendor/4/vendor4.png', 'rating' => 4, 'phone' => '+62 811 773 893']
        ]);
    }
}
