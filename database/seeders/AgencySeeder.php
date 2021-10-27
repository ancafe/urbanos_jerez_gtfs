<?php

namespace Database\Seeders;

use App\Models\Agency;
use Illuminate\Database\Seeder;

class AgencySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Agency::create([
            'agency_id' => 1,
            'agency_name' => 'COMUJESA - Autobuses Urbanos de Jerez',
            'agency_url' => 'https://web.jerez.es/webs-municipales/autobuses-urbanos/',
            'agency_timezone' => 'Europe/Madrid',
            'agency_phone' => '956900003',
            'feed_controller' => 'App\\Http\\Controllers\\AutoFeed\\AutoFeedJerez',
            'feed_url' => 'https://web.jerez.es/webs-municipales/autobuses-urbanos/lineas-paradas-y-horarios',
        ]);

    }
}
