@extends('layouts.app')

@section('title', 'Modifica un fumetto')

@section('content')
    <div class="container">
        <h2 class="text-center text-primary py-2">
            <span class="text-secondary"> Modifica i dati di #{{ $comic->id }} - </span>{{ $comic->title }}
        </h2>

        <div class="row justify-content-center">
            <div class="col-8">

                <form action="{{ route('comics.update', $comic->id) }}" method="POST">
                    @method('PUT')
                    @csrf

                    <label for="title" class="form-label">Titolo</label>
                    <input type="text" class="form-control @error('title') is-invalid @enderror mb-3" name="title"
                        id="title" value="{{ $comic->title }}">

                    <label for="series" class="form-label">Serie</label>
                    <input type="text" class="form-control @error('series') is-invalid @enderror mb-3" name="series"
                        id="series" value="{{ $comic->series }}">

                    <label for="type">Tipo</label>
                    <select class="form-select @error('type') is-invalid @enderror  mb-3" name="type" id="type"
                        aria-label="type selection">
                        <option value="" hidden selected>Seleziona una tipologia</option>
                        <option value="comic book" @selected($comic->type === 'comic book')>Comic Book</option>
                        <option value="graphic novel" @selected($comic->type === 'graphic novel')>Graphic Novel</option>
                    </select>

                    <label for="sale_date" class="form-label">Data messa in vendita</label>
                    <input type="text" class="form-control @error('sale_date') is-invalid @enderror mb-3"
                        name="sale_date" id="sale_date" value="{{ $comic->sale_date }}">

                    <label for="price" class="form-label">Prezzo</label>
                    <input type="text" class="form-control @error('price') is-invalid @enderror mb-3" name="price"
                        id="price" value="{{ $comic->price }}">

                    <label for="description" class="form-label">Descrizione</label>
                    <textarea name="description" class="form-control @error('description') is-invalid @enderror mb-3" id="description"
                        rows="8">{{ $comic->description }}</textarea>

                    <label for="thumb" class="form-label">Thumbnail</label>
                    <textarea name="thumb" class="form-control @error('thumb') is-invalid @enderror mb-4" id="thumb" rows="4">{{ $comic->thumb }}</textarea>

                    <button class="btn btn-success" type="submit">Modifica</button>

                    <button class="btn btn-secondary" type="reset">Ripristina</button>
                </form>
            </div>
        </div>
    </div>
@endsection
