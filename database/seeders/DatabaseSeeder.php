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
        $this->call([
            UserSeeder::class,
            BusSeeder::class,
            CitySeeder::class,
            StatusSeeder::class,
            RouteSeeder::class,
            PrivilegeSeeder::class,
            PrivilegeRouteSeeder::class,
            RouteTimeSeeder::class,
            StopSeeder::class,
        ]);
    }
}
