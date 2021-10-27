<?php

namespace App\Http\Controllers\AutoFeed;

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
        var_dump(sizeof($lineas));

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
}

