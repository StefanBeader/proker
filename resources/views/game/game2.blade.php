@extends('layouts.board')

@section('content')
    {!! Form::open(['url' => '/firstHand', 'method' => 'GET']) !!}
    <div class="game">
        <div class="cards">
            @foreach($cards as $card)
                <div class="card">
                    <img src="{{ asset($card) }}" alt="">
                </div>
            @endforeach
        </div>
        <button type="submit" id="submit">Deal</button>
    </div>
    {!! Form::close() !!}
@endsection