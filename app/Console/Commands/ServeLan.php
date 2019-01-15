<?php

namespace App\Console\Commands;

use Artisan;
use Illuminate\Console\Command;

class ServeLan extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'servelan {--host= : Host to serve} {--port= : Port to use}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Starts built in artisan serve with LAN IP instead of localhost';

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
    public function handle()
    {
        // we find host and port
        [$host, $port] = $this->findHostAndPort();

        // we call `artisan serve` with the right arguments
        Artisan::call('serve', [
            '--host' => $host,
            '--port' => $port
        ]);
    }


    /**
     * Uses configuration or options to find host and port
     *
     * @return array of 2 elements [$host, $port]
     */
    protected function findHostAndPort()
    {
        // we try to find the LAN IP address here (backtick notation). This would work on linux
        // todo: make a windows version or possibly a Mac OS X version (maybe still works)
        if ($this->option('host')) {
            $host = $this->option('host');
        } else {
            if (env('SERVE_HOST') == 'linuxfind') {
                $host = trim(`ip addr | grep 'state UP' -A2 | tail -n1 | awk '{print $2}' | cut -f1 -d'/'`);
            }
            elseif (env('SERVE_HOST') == 'darwinfind') {
                $host = trim(`ifconfig | awk '/broadcast/ { print $2 }'`);
            }
            else {
                $host = env('SERVE_HOST');
            }
        }

        if ($this->option('port')) {
            $port = $this->option('port');
        } else {
            $port = env('SERVE_PORT', 8000);
        }

        // return what we found
        return [$host, $port];
    }
}
