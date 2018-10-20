<?php

namespace Aye\Commands;

use Aye\BaseCommand;
use Aye\Traits\BasicCommand;


class DfhCommand extends BaseCommand
{
    use BasicCommand;

    /**
     * The command to actually execute
     *
     * @var string
     */
    protected $command = 'df -hl --total';

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'aye:df';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Check disk space usage with df';
}