@extends('layouts.app')

@section('title', 'Modifica un fumetto')

@section('content')
    <div class="container">
        <h2 class="text-center text-primary">
            <span class="text-secondary"> Modifica i dati di #{{ $comic->id }} - </span>{{ $comic->title }}
        </h2>

        <br>

        <form action="{{ route('comics.update', $comic->id) }}" method="POST">
            @method('PUT')
            @csrf

            <label for="title">Titolo</label>
            <input type="text" name="title" id="title" value="{{ $comic->title }}">

            <br>

            <label for="series">Serie</label>
            <input type="text" name="series" id="series" value="{{ $comic->series }}">

            <br>

            <label for="type">Tipo</label>
            <input type="text" name="type" id="type" value="{{ $comic->type }}">

            <br>

            <label for="sale_date">Data messa in vendita</label>
            <input type="text" name="sale_date" id="sale_date" value="{{ $comic->sale_date }}">

            <br>

            <label for="price">Prezzo</label>
            <input type="text" name="price" id="price" value="{{ $comic->price }}">

            <br>

            <label for="description">Descrizione</label>
            <textarea name="description" id="description" rows="10">{{ $comic->description }}</textarea>

            <br>

            <label for="thumb">Thumbnail</label>
            <textarea name="thumb" id="thumb" rows="10">{{ $comic->thumb }}</textarea>

            <br>

            <button class="btn btn-success" type="submit">Modifica</button>

            <button class="btn btn-secondary" type="reset">annulla</button>
        </form>
    </div>

@endsection
