@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Dati del fumetto {{ $comic->title }}</h2>
        <img class="w-20" src="{{ $comic->thumb }}" alt="">
        <ul class="list-group">
            <li class="list-group-item">
                <strong>Prezzo </strong> {{ $comic->price }}
            </li>
            <li class="list-group-item">
                <strong>Serie: </strong> {{ $comic->series }}
            </li>
            <li class="list-group-item">
                <strong>Data uscita: </strong> {{ $comic->sale_date }}
            </li>
            <li class="list-group-item">
                <strong>Tipo: </strong> {{ $comic->type }}
            </li>
            <li class="list-group-item"><p>
                <strong>Descrizione: </strong>{{ $comic->description }}
            </p></li>
        </ul>
        
    </div>
@endsection