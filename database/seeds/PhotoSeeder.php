<?php

use Illuminate\Database\Seeder;

class PhotoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('photos')->insert([
            ['trip_id' => 1, 'path' => 'trip/1/nusapenida.jpg'],
            ['trip_id' => 1, 'path' => 'trip/1/nusapenida1.jpg'],
            ['trip_id' => 1, 'path' => 'trip/1/nusapenida2.jpg'],

            ['trip_id' => 2, 'path' => 'trip/2/lumajang.jpg'],
            ['trip_id' => 2, 'path' => 'trip/2/lumajang1.jpeg'],
            ['trip_id' => 2, 'path' => 'trip/2/lumajang2.jpg'],

            ['trip_id' => 3, 'path' => 'trip/3/rinjani.jpg'],
            ['trip_id' => 3, 'path' => 'trip/3/rinjani1.jpg'],
            ['trip_id' => 3, 'path' => 'trip/3/rinjani2.jpg'],
            ['trip_id' => 3, 'path' => 'trip/3/rinjani3.jpg'],

            ['trip_id' => 4, 'path' => 'trip/4/danautoba.jpg'],
            ['trip_id' => 4, 'path' => 'trip/4/danautoba1.jpg'],
            ['trip_id' => 4, 'path' => 'trip/4/danautoba2.jpg'],

            ['trip_id' => 5, 'path' => 'trip/5/desabaliem.jpg'],
            ['trip_id' => 5, 'path' => 'trip/5/desabaliem1.jpg'],
            ['trip_id' => 5, 'path' => 'trip/5/desabaliem2.jpg'],

            ['trip_id' => 6, 'path' => 'trip/6/kampunglolai.jpg'],
            ['trip_id' => 6, 'path' => 'trip/6/kampunglolai1.jpg'],
            ['trip_id' => 6, 'path' => 'trip/6/kampunglolai2.jpg'],
            
            ['trip_id' => 7, 'path' => 'trip/7/pulaukomodo.jpg'],
            ['trip_id' => 7, 'path' => 'trip/7/pulaukomodo1.jpeg'],
            ['trip_id' => 7, 'path' => 'trip/7/pulaukomodo2.jpeg'],

            ['trip_id' => 8, 'path' => 'trip/8/tanahlot.jpg'],
            ['trip_id' => 8, 'path' => 'trip/8/tanahlot1.jpg'],
            ['trip_id' => 8, 'path' => 'trip/8/tanahlot2.jpg'],

            ['trip_id' => 9, 'path' => 'trip/9/tanjungputing.jpg'],
            ['trip_id' => 9, 'path' => 'trip/9/tanjungputing1.jpg'],
            ['trip_id' => 9, 'path' => 'trip/9/tanjungputing2.jpg'],

            ['trip_id' => 10, 'path' => 'trip/10/flat06trips.jpg'],
            ['trip_id' => 10, 'path' => 'trip/10/flat06trips1.jpg'],
            ['trip_id' => 10, 'path' => 'trip/10/flat06trips2.jpg'],
        ]);
    }
}
