@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Dati fumetto {{ $comic->title }}</h2>
        <img class="w-50" src="{{ $comic->thumb }}" alt="">
        <ul class="list-group">
            <li class="list-group-item">
                <strong>Prezzo: </strong> {{ $comic->price }}
            </li>
        </ul>
        <p>
            {{ $comic->description }}
        </p>
    </div>
@endsection