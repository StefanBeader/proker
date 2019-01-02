@extends('layouts.board')

@section('content')
    <div class="game">
        <div class="cards">
            <div class="">
                <img src="{{ asset('images/cards/default/back.png') }}" alt="">
            </div>
            <div class="">
                <img src="{{ asset('images/cards/default/back.png') }}" alt="">
            </div>
            <div class="">
                <img src="{{ asset('images/cards/default/back.png') }}" alt="">
            </div>
            <div class="">
                <img src="{{ asset('images/cards/default/back.png') }}" alt="">
            </div>
            <div class="">
                <img src="{{ asset('images/cards/default/back.png') }}" alt="">
            </div>
        </div>
    </div>
    <div class="hud">
        {!! Form::open(['url' => '/firstHand']) !!}
        {!! Form::number('amount', '0', ['class' => 'input']) !!}
        <button type="submit" id="submit">Deal</button>
        {!! Form::close() !!}
    </div>
@endsection