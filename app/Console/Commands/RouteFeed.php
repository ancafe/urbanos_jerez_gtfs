<?php

namespace App\Console\Commands;

use App\Models\Route;
use App\Models\Stop;
use App\Models\StopSequence;
use App\Models\StopTime;
use App\Models\Trip;
use Goutte\Client;
use Illuminate\Console\Command;

class RouteFeed extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'route:feed {linea}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Obtiene datos de forma automatizada';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $linea_id = $this->argument('linea');
        $route = Route::find($linea_id);
        $this->feedParadas($route);
        $paradas = StopSequence::where('route_id', $route->route_id)->orderBy('order')->get();

        foreach ($paradas as $parada) {
            $stop = Stop::find($parada->stop_id);
            $this->feedHorarios($stop, $route);
        }

        return Command::SUCCESS;
    }

    public function feedParadas(Route $route)
    {
        $client = new Client();
        $url = "https://web.jerez.es/webs-municipales/autobuses-urbanos/lineas-paradas-y-horarios/index.php?id=listar_c";
        $crawler = $client->request('POST', $url, [
            'valorLinea' => $route->route_id,
        ]);

        $crawler->filter('select option')->each(function ($node, $orden) use ($route) {
            $stop_id = intval($node->attr('value'));
            $stop_name = $node->text();

            if (intval($node->attr('value'))) {
                $data = [
                    'stop_id' => $stop_id,
                    'stop_name' => $stop_name,
                ];
                Stop::firstOrCreate($data);

                $data = [
                    'route_id' => $route->route_id,
                    'stop_id' => $stop_id,
                    'order' => $orden,
                ];
                StopSequence::firstOrCreate($data);
            }
        });
    }

    public function feedHorarios(Stop $stop, Route $route)
    {
        $client = new Client();
        $url = "https://web.jerez.es/webs-municipales/autobuses-urbanos/lineas-paradas-y-horarios/index.php?id=listar_b";
        $crawler = $client->request('POST', $url, [
            'valorCaja1' => $stop->stop_id,
            'valorLinea' => $route->route_id,
        ]);


        $crawler->filter('.tx-jn-phpcontentelement > div')->each(function ($node) use ($stop, $route) {
            $caja = $node->text();

            $service_id = null;
            if (str_contains($caja, 'Laborales')) {
                $service_id = 'INVLAB';
            }

            if (str_contains($caja, 'Sábados')) {
                $service_id = 'INVSAB';
            }

            if (str_contains($caja, 'Domingos y Festivos')) {
                $service_id = 'INVDOM';
            }

            if ($service_id) {
                $this->info($route->route_short_name . " >> " . $stop->stop_name . " >> " . $service_id);

                $trip = Trip::where('service_id', $service_id)->where('route_id', $route->route_id)->first();

                $buscaHorarios = "/([0-9]{2}:[0-9]{2})/";

                $check_hash = preg_match_all($buscaHorarios, $caja, $esHorario);
                foreach ($esHorario[1] as $horario) {
                    $sq = StopSequence::where('route_id', $route->route_id)
                        ->where('stop_id', $stop->stop_id)->first();

                    $data = [
                        'trip_id' => $trip->trip_id,
                        'arrival_time' => $horario,
                        'departure_time' => $horario,
                        'stop_id' => $stop->stop_id,
                        'stop_sequence' => $sq->order,
                    ];
                    StopTime::firstOrCreate($data);
                }
            }
        });
    }
}
