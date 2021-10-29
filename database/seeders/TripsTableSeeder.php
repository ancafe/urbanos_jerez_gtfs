<?php

namespace Database\Seeders;

use App\Models\Calendar;
use App\Models\Route;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class TripsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        $actual = Carbon::now()->format('Y-m-d H:i:s');

        \DB::table('trips')->delete();

        $trips = array();
        $lineas = Route::all();
        $servicios = Calendar::all();
        $contador = 0;


        foreach ($lineas as $linea) {
            foreach ($servicios as $servicio) {
                $trips[] = array(
                    'route_id' => $linea->route_id,
                    'service_id' => $servicio->service_id,
                    'trip_id' => ++$contador,
                    'trip_headsign' => $linea->route_name,
                    'direction_id' => 1,
                    'shape_id' => 'L'. str_pad($linea->route_id, 2, 0, $pad_type = STR_PAD_LEFT) . "V1",
                    'created_at' => $actual,
                    'updated_at' => $actual,
                );
            }
        }


        \DB::table('trips')->insert($trips);
    }
}
