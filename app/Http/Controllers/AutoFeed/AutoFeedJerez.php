<?php

namespace App\Http\Controllers\AutoFeed;

use App\Models\Stop;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Log;
use Goutte\Client;
use App\Models\Agency;
use App\Models\Route;


class AutoFeedJerez extends Controller
{
    public function feed($agency)
    {
        $this->getLineas();
        $lineas = Route::all();

        //$this->getStops(Route::find(1));
        foreach ($lineas as $linea){
           $this->getStops($linea);
        }


    }


    public function getLineas()
    {
        $url = 'https://web.jerez.es/webs-municipales/autobuses-urbanos';
        $client = new Client();
        $crawler = $client->request('GET', $url);
        $crawler->filter('#c13421 select option')->each(function ($node) {
            $linea_id = intval($node->attr('value'));
            $linea_nombre = $node->text();

            if (intval($node->attr('value'))) {
                $data = [
                    'route_id' => $linea_id,
                    'route_short_name' => $linea_nombre,
                    'route_long_name' => $linea_nombre,
                    'route_type' => 3,
                ];
                Route::firstOrCreate($data);
            }
        });

        return true;
    }

    public function getStops(Route $linea)
    {
        $url = "https://web.jerez.es/webs-municipales/autobuses-urbanos/index.php?id=listar_consultas";
        //$url = "https://web.jerez.es/webs-municipales/autobuses-urbanos/lineas-paradas-y-horarios/linea-" . $linea->route_id;

        $client = new Client();
        $crawler = $client->request('POST', $url, [
            'valorLinea' => $linea->route_id,
        ]);
        $crawler->filter('#first-choice option')->each(function ($node) {

            $parada_id = intval($node->attr('value'));
            $parada_nombre = $node->text();

            if (intval($node->attr('value'))) {
                $data = [
                    'stop_id' => $parada_id,
                    'stop_name' => $parada_nombre,
                    'stop_lat' => null,
                    'stop_lon' => null,
                ];
                Stop::firstOrCreate($data);
            }

        });
        return true;
    }
}

