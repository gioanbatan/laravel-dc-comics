@extends('layouts.app')

@section('title', 'Crea nuovo fumetto')

@section('content')
    <div class="container">
        <h2 class="text-center text-primary my-2">
            Inserisci i dati
        </h2>

        @if ($errors->any())
            <br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif

        <br>
        <form action="{{ route('comics.store') }}" method="POST">
            @csrf

            <label for="title">Titolo</label>
            <input type="text" name="title" id="title" value="{{ old('title') }}">

            <br>

            <label for="series">Serie</label>
            <input type="text" name="series" id="series" value="{{ old('series') }}">

            <br>

            <label for="type">Tipo</label>
            <select name="type" id="type">
                <option value="" hidden selected>Seleziona una tipologia</option>
                <option value="comic book" @selected(old('type') === 'comic book')>Comic Book</option>
                <option value="graphic novel" @selected(old('type') === 'graphic novel')>Graphic Novel</option>
            </select>

            <br>

            <label for="sale_date">Data messa in vendita</label>
            <input type="text" name="sale_date" id="sale_date" value="{{ old('sale_date') }}">

            <br>

            <label for="price">Prezzo</label>
            <input type="text" name="price" id="price" value="{{ old('price') }}">

            <br>

            <label for="description">Descrizione</label>
            <textarea name="description" id="description" rows="10">{{ old('description') }}</textarea>

            <br>

            <label for="thumb">Thumbnail</label>
            <textarea name="thumb" id="thumb" rows="10">{{ old('thumb') }}</textarea>

            <br>

            <button type="submit" class="btn btn-success">Invia</button>
            {{-- <button type="reset" class="btn btn-secondary">Svuota campi</button> --}}
        </form>
    </div>
@endsection
