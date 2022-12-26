@extends('layouts.app')

@section('title', 'Crea nuovo fumetto')

@section('content')
    <div class="container">
        <h2 class="text-center text-primary py-2">
            Inserisci i dati
        </h2>

        @if ($errors->any())
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif

        <div class="row justify-content-center">
            <div class="col-8">

                <form action="{{ route('comics.store') }}" method="POST">
                    @csrf

                    <label for="title" class="form-label">Titolo</label>
                    <input type="text" class="form-control @error('title') is-invalid @enderror mb-3" name="title"
                        id="title" value="{{ old('title') }}">

                    <label for="series" class="form-label">Serie</label>
                    <input type="text" class="form-control @error('series') is-invalid @enderror mb-3" name="series"
                        id="series" value="{{ old('series') }}">

                    <label for="type">Tipo</label>
                    <select class="form-select @error('type') is-invalid @enderror mb-3" name="type" id="type">
                        <option value="" hidden selected>Seleziona una tipologia</option>
                        <option value="comic book" @selected(old('type') === 'comic book')>Comic Book</option>
                        <option value="graphic novel" @selected(old('type') === 'graphic novel')>Graphic Novel</option>
                    </select>

                    <label for="sale_date" class="form-label">Data messa in vendita</label>
                    <input type="text" class="form-control @error('sale_date') is-invalid @enderror mb-3"
                        name="sale_date" id="sale_date" value="{{ old('sale_date') }}">

                    <label for="price" class="form-label">Prezzo</label>
                    <input type="text" class="form-control @error('price') is-invalid @enderror mb-3" name="price"
                        id="price" value="{{ old('price') }}">

                    <label for="description" class="form-label">Descrizione</label>
                    <textarea name="description" class="form-control @error('description') is-invalid @enderror mb-3" id="description"
                        rows="8">{{ old('description') }}</textarea>

                    <label for="thumb" class="form-label">Thumbnail</label>
                    <textarea name="thumb" class="form-control @error('thumb') is-invalid @enderror mb-4" id="thumb" rows="4">{{ old('thumb') }}</textarea>

                    <button type="submit" class="btn btn-success">Invia</button>

                    <button type="reset" class="btn btn-secondary">Svuota campi</button>
                </form>
            </div>
        </div>
    </div>
@endsection
