<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

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
            'name' => Str::random(10),
            'surname' => Str::random(10),
            'phone' => '87768222414',
            'password' => Hash::make('12345678'),
        ]);

        DB::table('users')->insert([
            'name' => Str::random(10),
            'surname' => Str::random(10),
            'phone' => '87770886336',
            'password' => Hash::make('12345678'),
        ]);

    }
}
