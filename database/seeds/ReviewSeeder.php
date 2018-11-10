<?php

use Illuminate\Database\Seeder;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('reviews')->insert([
            ['trip_id' => 1, 'user_id' => 1, 'star' => 4, 'description' => 'My husband and I booked Nice tour bali for our first year anniversary. This is our first visit to Bali. We had a fantastic time and have lots of wonderful memories from all our trips. Thank you to Mr.Dwi, for organising well our transfers and trips. Mr. Budi was good driver, excellent guide and flexible. I would totally recommend them to anyone :)'],
            ['trip_id' => 1, 'user_id' => 2, 'star' => 5, 'description' => 'Terima kasih pak dwi untuk persiapan. Terima kasih khusus saja. Budi adalah pemandu wisata dan sopir kami. Dia adalah orang yang ramah. Dia sangat senang untuk membantu kami mengambil gambar. Terima Kasih Pak. Budi. Yah, sayang sekali kami tidak tinggal untuk villa.'],
            ['trip_id' => 2, 'user_id' => 1, 'star' => 4, 'description' => 'Itu adalah perjalanan yang sangat baik. Dia adalah sangat ramah dengan semua orang. Jangan lewatkan ini pengalaman yang luar biasa.'],
            ['trip_id' => 2, 'user_id' => 2, 'star' => 5, 'description' => 'the most enjoyable trip to explore the beautiful place. Friendly, Comprehensive , trustworthy tour guide. Arrangement are good and as communicated . Definitely will make future trips here.'],
            ['trip_id' => 3, 'user_id' => 1, 'star' => 4, 'description' => 'the most enjoyable trip to explore the beautiful place. Friendly, Comprehensive , trustworthy tour guide. Arrangement are good and as communicated . Definitely will make future trips here.'],
            ['trip_id' => 3, 'user_id' => 2, 'star' => 4.5, 'description' => 'Itu adalah perjalanan yang sangat baik. Dia adalah sangat ramah dengan semua orang. Jangan lewatkan ini pengalaman yang luar biasa.'],
        ]);
    }
}
