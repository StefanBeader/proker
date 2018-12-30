@extends('layouts.board')

@section('content')
    <div class="menu">
        <div class="cards">
            @foreach($cards as $card)
                <div class="card">
                    <img src="{{ asset($card) }}" alt="">
                </div>
            @endforeach
        </div>
    </div>
@endsection