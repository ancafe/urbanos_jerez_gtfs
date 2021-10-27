<?php

namespace App\Console\Commands;

use App\Models\Agency;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\App;

class AgencyFeed extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'agency:feed';

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
        $agencias = Agency::all();

        foreach($agencias as $agencia) {
            if ($agencia->feed_controller) {
                $this->info('Agencia: '. $agencia->agency_name);
                $parameters = [
                    'agency' => $agencia
                ];
                $controller = App::make($agencia->feed_controller);
                $controller->callAction('feed', $parameters);
            }
        }
        return Command::SUCCESS;
    }
}
