<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       Admin::create([
        "email"=>"tisha@gmail.com",
        "name"=>"Tisha",
        'username'=>'tisha',
        "password"=>bcrypt('123456')
       ]);
    }
}
