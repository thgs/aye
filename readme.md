

### About Aye

Well this is my small remote control. Ever wanted to change the volume on your laptop that is a couple of meters away from you and had to stand up and do it? Is your phone next to you ? Well.. this app tries to allow you control over your laptop computer from your phone.

### How to use

You can use the custom `artisan servelan` command to start the built-in server, which tries to find the LAN IP and reads from .env if settings are there (see below SERVE_HOST, SERVE_PORT). Note, that calling `artisan servelan` with `--host` or `--port` will override any .env setting and pass them to `artisan serve`.

Otherwise, to start `artisan serve` I use this in zsh, so it starts in correct interface

```zsh
aye() {
    ~/artisan serve --host=$(ip addr | grep 'state UP' -A2 | tail -n1 | awk '{print $2}' | cut -f1 -d'/')
}
```

and also you can just start it manually by running `artisan serve`.

### Configuration

To use the internal `artisan servelan` command, two new settings used: SERVE_HOST and SERVE_PORT. These are set in .env file as per example file. You can use special string `linuxfind` on SERVE_HOST so Aye tries to find the LAN IP by using `ip addr`.

### Creating commands

Commands extend the Aye\BaseCommand class which in turn extends the Illuminate\Console\Command. All commands are in Aye\Commands, namespaced by signature into aye. Below is the Space command as a sample. It sends a space keystroke using xdotool, so you can pause or resume a movie you are watching.

```php
<?php

namespace Aye\Commands;

use Aye\BaseCommand;
use Aye\Traits\BasicCommand;


class SpaceCommand extends BaseCommand
{
    use BasicCommand;

    /**
     * The command to actually execute
     *
     * @var string
     */
    protected $command = 'xdotool key space';

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'aye:space';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send a space keystroke';
}
```

### Contributing

Any contribution is welcome. This is my little fun project and its still under heavy developement.

