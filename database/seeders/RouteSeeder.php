<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RouteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('routes')->insert([
            'bus_id' => 1,
            'from_place' => 1,
            'to_place' => 4,
            'status_id' => 2,
            'min_price' => 10000,
            'max_price' => 14000,
        ]);

        DB::table('routes')->insert([
            'bus_id' => 1,
            'from_place' => 4,
            'to_place' => 1,
            'status_id' => 2,
            'min_price' => 14000,
            'max_price' => 15000,
        ]);
    }
}
