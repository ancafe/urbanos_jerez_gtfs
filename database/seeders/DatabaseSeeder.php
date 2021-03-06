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
        $this->call(AgencySeeder::class);
        $this->call(ShapesTableSeeder::class);
        $this->call(RouteTableSeeder::class);
        $this->call(CalendarTableSeeder::class);
        $this->call(TripsTableSeeder::class);
    }
}
