
@extends('layouts.master')

@section('title', 'Roll Some Dice!')

@section('content')
    <h1>Let's see what we rolled...</h1>
    @foreach($rolls as $roll)
        <p>
            {{ $roll }}
            @if($guess == $roll)
                You Got It!
            @endif
        </p>
        <hr>
    @endforeach
    <h2>Make another guess</h2>
    <ul>
    @for($i = 1; $i <= 6; $i ++)
        <li>
            <a href="/roll-dice/{{ $i }}">
                Guess {{ $i }}
            </a>
        </li>
    @endfor
    </ul>
@stop