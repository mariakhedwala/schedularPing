<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Sites;
use App\PingDetail;
use Ping;

class pingIt extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'ping';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'this command will ping to url';

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
     * @return mixed
     */
    public function handle(Sites $site)
    {
        $sites = Sites::all();
        // PingDetail::truncate();
        foreach ($sites as $site):
            $urlNew = $site->url;
            echo $urlNew;

            $health = Ping::check($urlNew);

            if($health == 200) {
                $detail = PingDetail::create(['test_url' => $urlNew , 'site_status' => 1]);
                $detail->save();
                echo ' - Alive!'. "\n";
            } else {
                $detail = PingDetail::create(['test_url' => $urlNew , 'site_status' => 0]);
                $detail->save();
                echo ' - Dead :('. "\n";
            }
        endforeach;
    }
}
