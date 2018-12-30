@extends('layouts.board')

@section('content')
    {!! Form::open(['url' => '/secondHand']) !!}
    <div class="game">
        <div class="cards">
            @foreach($cards as $key => $card)
                <div class="card" data-position="{{ $key + 1 }}">
                    <input type="checkbox" name="card_{{ $key + 1 }}" id="card{{ $key + 1 }}">
                    <label for="card{{ $key + 1 }}">
                            <img src="{{ asset($card) }}" alt="">
                    </label>
                </div>
            @endforeach
        </div>
        <button type="submit" id="submit">Deal</button>
    </div>
    {!! Form::close() !!}
@endsection