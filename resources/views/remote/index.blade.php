@extends('layouts.app')


@section('styles')
    .f-cont {
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }

    .f-item {
        border: 1pt solid #B6B6B4;
        border-radius: 15px;
        margin: 4px;
        padding: 8px;
        background-color: white;
        text-align: center;
        font-size: 16px;
        font-family: Raleway;
        font-weight: 900;
    }

    .f-item a {
        display:inline-block;
        width: 100%;
        height: 100%;

        color: #8EA5BD;
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
@endsection


@section('content')

<div class="f-cont">
    @if (session()->has('returnCode'))
    <div class="f-item sessionData {{ session()->get('returnCode') != 'Ok' ? 'failed' : '' }}">
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

    @foreach ($commands as $c)
    <div class="f-item">
        <a href="{{ route('commands.execute', $c->getSignature()) }}">{{ $c->getName() }}</a>
    </div>
    @endforeach
    {{--
    <div class="f-item">
        <a href="{{ route('commands.execute', 'VolumeUp') }}">Vol +</a>
    </div>
    <div class="f-item">
        <a href="{{ route('commands.execute', 'VolumeDown') }}">Vol -</a>
    </div>
    <div class="f-item">
        <a href="{{ route('commands.execute', 'Space') }}">Space</a>
    </div>
    <div class="f-item">
        <a href="{{ route('commands.execute', 'LightUp') }}">Backlight +</a>
    </div>
    <div class="f-item">
        <a href="{{ route('commands.execute', 'LightDown') }}">Backlight -</a>
    </div>
    <div class="f-item">
        <a href="{{ route('commands.execute', 'MPVBackward') }}">MPV.Backward(10 sec.)</a>
    </div>
    <div class="f-item">
        <a href="{{ route('commands.execute', 'MPVPause') }}">MPV.Pause</a>
    </div>
    <div class="f-item">
        <a href="{{ route('commands.execute', 'MPVResume') }}">MPV.Resume</a>
    </div>
    <div class="f-item">
        <a href="{{ route('commands.execute', 'MPVForward') }}">MPV.Forward(10 sec.)</a>
    </div>
    <div class="f-item">
        <a href="{{ route('commands.execute', 'Dfh') }}">Disk Space</a>
    </div>
    --}}
</div>
@endsection