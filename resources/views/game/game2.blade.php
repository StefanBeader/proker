@extends('layouts.board')

@section('content')
    {!! Form::open(['url' => '/firstHand']) !!}
    <div class="game">
        <div class="cards">
            @foreach($cards as $card)
                <div class="card">
                    <img src="{{ asset($card) }}" alt="">
                </div>
            @endforeach
        </div>
        <div class="hud">
            {!! Form::hidden('amount', $amount) !!}
            <button type="submit">Repeat</button>
            <a href="{{ URL::to('/bet') }}" class="button">New bet</a>
        </div>
    </div>
    {!! Form::close() !!}
@endsection