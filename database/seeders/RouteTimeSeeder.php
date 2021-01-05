<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RouteTimeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('route_times')->insert([
            'route_id' => 1,
            'from_time' => '2021-01-05 13:00:00',
            'to_time' => '2021-01-07 09:00:00',
        ]);

        DB::table('route_times')->insert([
            'route_id' => 1,
            'from_time' => '2021-01-14 13:00:00',
            'to_time' => '2021-01-16 09:00:00',
        ]);

    }
}
