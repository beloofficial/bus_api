<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('buses')->insert([
            'name' => 'Tulpar',
            'user_id' => 1,
            'seat_number' => 45,
            'car_number'=>'404err07',
            'brand'=>'toyota'
        ]);

        DB::table('buses')->insert([
            'name' => 'RoadArystan',
            'user_id' => 1,
            'seat_number' => 90,
            'car_number'=>'400frb13',
            'brand'=>'bmw'
        ]);
    }
}
