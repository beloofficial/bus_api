<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class StopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('stops')->insert([
            'name' => 'Taraz',
            'time' => '30',
            'route_id' => '1',
        ]);

        DB::table('stops')->insert([
            'name' => 'Oral',
            'time' => '85',
            'route_id' => '1',
        ]);
    }
}
