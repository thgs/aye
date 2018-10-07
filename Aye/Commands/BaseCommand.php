<?php

namespace Aye\Commands;

use Aye\ExitCodes as EX;

class BaseCommand
{
    protected $command;

    protected $output;

    protected $returnCode;

    protected $flash_output_to_session = true;


    public function before()
    {
        // extend this to add something to run before execution
    }

    public function execute()
    {
        // call any code before executing the command
        $this->before();

        // if $this->command is an array of commands, we will return arrays as well
        // and execute them sequentially, for now
        if (is_array($this->command)) {
            foreach ($this->command as $key => $cmd) {
                exec($this->command, $this->output[$key], $this->returnCode[$key]);
            }

        // otherwise we just execute the command, not returning arrays
        } else {
            exec($this->command, $this->output, $this->returnCode);
        }

        // call any code after the execution
        $this->after();
    }

    public function after()
    {
        // extend this to add something to run after execution
        if ($this->flash_output_to_session) {
            $this->flashOutput();
        }
    }

    public function flashOutput() 
    {
        session()->flash('returnCode', (new EX)->lookup($this->returnCode));
        session()->flash('output', $this->output);
        session()->flash('lastCommand', $this->getClassName() );
    }

    protected function getClassName() 
    {
        return str_replace('Command', '', (new \ReflectionClass($this))->getShortName());
    }
}