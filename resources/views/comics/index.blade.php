@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Tutte le nostre paste</h2>
        <div class="my-2 text-end">
            <a href="{{ route('comics.create') }}">Crea una nuovo fumetto</a>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">Titolo</th>
                    <th scope="col">prezzo</th>
                    <th scope="col">serie</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($comics as $comic)
                    <tr>
                        <th scope="row">{{ $comic->id }}</th>
                        <td>{{ $comic->series }}</td>
                        <td>{{ $comic->price }}</td>
                        <td>
                            <a class="btn btn-success" href="{{ route('comics.show', $comic->id) }}">
                                <i class="fa-solid fa-eye"></i>
                            </a>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
@endsection