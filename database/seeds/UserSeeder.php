<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            ['email' => 'ivanwiranata@gmail.com', 'password' => bcrypt('localhost'), 'name' => 'Ivan Wiranata', 'photo' => 'user/ivanwiranata@gmail.com/photo.png', 'phone' => '+62 811 2423 6353'],
            ['email' => 'fadilnylon@gmail.com', 'password' => bcrypt('localhost'), 'name' => 'Fadil Nylon', 'photo' => 'user/fadilnylon@gmail.com/photo.png', 'phone' => '+62 811 2541 5221'],
        ]);
    }
}
