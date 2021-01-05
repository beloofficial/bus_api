<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PrivilegeRouteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('privilege_route')->insert([
            'privilege_id' => 1,
            'route_id' => 1,
        ]);

        DB::table('privilege_route')->insert([
            'privilege_id' => 2,
            'route_id' => 1,
        ]);
    }
}
