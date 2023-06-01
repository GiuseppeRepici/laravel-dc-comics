@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Crea una nuova pasta</h2>

        <form action="{{ route('comics.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Titolo</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title">
                @error('title')
                    <div class="mt-1 alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Descrizione</label>
                <textarea class="form-control @error('description') is-invalid @enderror" name="description" id="description" rows="3"></textarea>
                @error('description')
                    <div class="mt-1 alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="image" class="form-label">Immagine</label>
                <input type="text" class="form-control @error('thumb') is-invalid @enderror" id="thumb" name="thumb">
                @error('thumb')
                    <div class="mt-1 alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="price" class="form-label">Prezzo</label>
                <input type="text" class="form-control @error('price') is-invalid @enderror" id="price" name="price">
                @error('price')
                    <div class="mt-1 alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="series" class="form-label">Serie</label>
                <input type="text" class="form-control @error('series') is-invalid @enderror" id="series" name="series">
                @error('series')
                    <div class="mt-1 alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="sale_date" class="form-label">Data uscita</label>
                <input type="date" class="form-control @error('sale_date') is-invalid @enderror" id="sale_date" name="sale_date">
                @error('sale_date')
                    <div class="mt-1 alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="type" class="form-label">Tipologia</label>
                <select id="type" name="type" class="form-select @error('type') is-invalid @enderror">
                    <option selected value="">Seleziona</option>
                    <option value="comic">comic book</option>
                    <option value="novel">graphic novel</option>
                </select>
                @error('type')
                    <div class="mt-1 alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            

            <button type="submit" class="btn btn-primary">Invia</button>

        </form>
    </div>
@endsection