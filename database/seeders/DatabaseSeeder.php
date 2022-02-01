<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([AdminSeeder::class,CustomerSeeder::class,CategorySeeder::class,ProductSeeder::class,ServiceSeeder::class,BookingSeeder::class,OrderSeeder::class,PaymentSeeder::class,SettingsSeeder::class]);
    }
}
