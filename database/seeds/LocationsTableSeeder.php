<?php

use Illuminate\Database\Seeder;

class LocationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('locations')->insert([
            ['name' => 'Van'],
            ['name' => 'Union'],
            ['name' => 'Kermit'],
            ['name' => 'Gonzo'],
            ['name' => 'Fozzy'],
        ]);
    }
}
