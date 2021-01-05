<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cities')->insert([
            'name' => 'Алматы',
        ]);
        DB::table('cities')->insert([
            'name' => 'Уральск',
        ]);
        DB::table('cities')->insert([
            'name' => 'Шымкент',
        ]);
        DB::table('cities')->insert([
            'name' => 'Актау',
        ]);
    }
}
