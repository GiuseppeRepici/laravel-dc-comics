@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Aggiorna la pasta: {{ $comic->title }}</h2>
        <form action="{{ route('comics.update', $comic->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="title" class="form-label">Titolo</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ old('title',$comic->title) }}">
                @error('title')
                    <div class="mt-1 alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Descrizione</label>
                <textarea class="form-control @error('description') is-invalid @enderror" name="description" id="description" rows="3">{{ old('description', $comic->description)  }}</textarea>
                @error('description')
                    <div class="mt-1 alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="image" class="form-label">Immagine</label>
                <input type="text" class="form-control @error('thumb') is-invalid @enderror" id="thumn" name="thumb" value="{{ old('thumb',$comic->thumb) }}">
                @error('thumb')
                    <div class="mt-1 alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="price" class="form-label">Prezzo</label>
                <input type="text" class="form-control @error('price') is-invalid @enderror" id="price" name="price" value="{{ old('price', $comic->price)  }}">
                @error('price')
                    <div class="mt-1 alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="series" class="form-label">Serie</label>
                <input type="text" class="form-control @error('series') is-invalid @enderror" id="series" name="series" value="{{ old('series', $comic->series)  }}">
                @error('series')
                    <div class="mt-1 alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="sale_date" class="form-label">Data uscita</label>
                <input type="date" class="form-control @error('sale_date') is-invalid @enderror" id="sale_date" name="sale_date" value="{{ old('sale_date', $comic->sale_date)  }}">
                @error('sale_date')
                    <div class="mt-1 alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="type" class="form-label">Tipologia</label>
                <select id="type" name="type" class="form-select @error('type') is-invalid @enderror">
                    <option @selected(old('type', $comic->type)  === 'comic book') value="comic book">comic book</option>
                    <option @selected(old('type', $comic->type)  === 'graphic novel') value="graphic novel">graphic novel</option>
                </select>
                @error('type')
                    <div class="mt-1 alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Invia</button>

        </form>
    </div>
    

@endsection