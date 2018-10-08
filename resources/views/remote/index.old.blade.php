<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Aye</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            .sessionData {
                background-color:lightgreen;
                padding: 10px;

                border-radius: 10px;
            }

            .failed {
                background-color: plum;
            }

            .sessionData .sessionHeader {
                font-weight: 900;
            }

            .sessionData .sessionBody {
                font-family: monospace;
            }

            .sessionBody pre {
                text-align: left;
            }

            .sessionData .command {
                font-weight: 900;
            }

            .sessionData .returnCode:before {
                content:'(';
            }
            .sessionData .returnCode:after {
                content:')';
            }
            .sessionData .returnCode {
                font-size: 12px;
            }


        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Register</a>
                    @endif
                </div>
            @endif
            
            <div class="content">
                <div class="title m-b-md">
                    Aye
                </div>

                @if (session()->has('returnCode'))
                <div class="sessionData {{ session()->get('returnCode') != 'Ok' ? 'failed' : '' }}">
                    <div class="sessionHeader">
                        <span class="command">{{ session()->get('lastCommand') }}</span>
                        <span class="returnCode">{{ session()->get('returnCode') }}</span>
                    </div>
                    <div class="sessionBody">
                        @if (count(session()->get('output')) > 0)
                        <pre>
                        @foreach (session()->get('output') as $line)
                            {{ $line }}
                        @endforeach
                        </pre>
                        @endif
                    </div>


                </div>
                @endif

                <div class="links">
                    <a href="{{ route('commands.execute', 'VolumeUp') }}">Vol +</a>
                    <a href="{{ route('commands.execute', 'VolumeDown') }}">Vol -</a>
                    <a href="{{ route('commands.execute', 'Space') }}">Space</a>
                    <a href="{{ route('commands.execute', 'LightUp') }}">Backlight +</a>
                    <a href="{{ route('commands.execute', 'LightDown') }}">Backlight -</a>
                    <a href="{{ route('commands.execute', 'MPVPause') }}">MPV.Pause</a>
                    <a href="{{ route('commands.execute', 'MPVResume') }}">MPV.Resume</a>
                    <a href="{{ route('commands.execute', 'Dfh') }}">Disk Space</a>                    
                </div>
            </div>
        </div>
    </body>
</html>
