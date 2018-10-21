<?php

namespace App\Console;

use App\Console\Commands\ServeLan;
use Symfony\Component\Finder\Finder;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;


class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        ServeLan::class,
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        // $schedule->command('inspire')
        //          ->hourly();
    }

    /**
     * Register the Closure based commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        require base_path('routes/console.php');

        // load all Aye commands, cannot use load as it namespace starting with App
        $files = (new Finder)->files()->in(base_path('Aye/Commands'));
        foreach ($files as $command) {
            $class = str_replace('.php', '', $command->getBasename());

            $this->commands[] = 'Aye\Commands\\'.$class;
        }
    }
}
