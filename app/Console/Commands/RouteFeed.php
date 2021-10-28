<?php

namespace App\Console\Commands;

use App\Models\Agency;
use App\Models\Route;
use App\Models\Stop;
use Goutte\Client;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\App;

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
        $paradas = Stop::all();

        foreach ($paradas as $parada) {
            //$this->feedHorarios($parada, $route);
        }

        $this->feedHorarios(Stop::find(453), $route);

        return Command::SUCCESS;
    }

    public function feedParadas(Route $route)
    {
        $client = new Client();
        $url = "https://web.jerez.es/webs-municipales/autobuses-urbanos/lineas-paradas-y-horarios/index.php?id=listar_c";
        $crawler = $client->request('POST', $url, [
            'valorLinea' => $route->route_id,
        ]);

        $crawler->filter('select option')->each(function ($node) {
            $stop_id = intval($node->attr('value'));
            $stop_name = $node->text();

            if (intval($node->attr('value'))) {
                $data = [
                    'stop_id' => $stop_id,
                    'stop_name' => $stop_name,
                ];
                Stop::firstOrCreate($data);
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

        $crawler->filter('.tx-jn-phpcontentelement>div')->each(function ($node) {

            $caja = $node->text();
            $buscaHorarios = "/([0-9]{2}:[0-9]{2})/";

            if (str_contains('Laborables', $caja)) {
                var_dump('L');
            }

            if (str_contains('Sábados', $caja)) {
                var_dump('S');
            }

            if (str_contains('Domingos y Festivos', $caja)) {
                var_dump('D');
            }

            $check_hash = preg_match_all($buscaHorarios, $caja, $esHorario);
            foreach ($esHorario[1] as $horario) {
                var_dump($horario);
            }
        });
    }
}
