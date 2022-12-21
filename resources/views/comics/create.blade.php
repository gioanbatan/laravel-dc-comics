@extends('layouts.app')

@section('title', 'Crea nuovo fumetto')

@section('content')
    <div class="container">

        <h2 class="text-center text-primary my-2">
            Inserisci i dati
        </h2>

        <form action="" method="POST">
            @csrf

            <label for="title">Titolo</label>
            <input type="text" name="title" id="title">

            <br>

            <label for="series">Serie</label>
            <input type="text" name="series" id="series">

            <br>

            <label for="type">Tipo</label>
            <input type="text" name="type" id="type">

            <br>

            <label for="sale_date">Data messa in vendita</label>
            <input type="text" name="sale_date" id="sale_date">

            <br>

            <label for="price">Prezzo</label>
            <input type="text" name="price" id="price">

            <br>

            <label for="thumb">Thumbnail</label>
            <textarea name="thumb" id="thumb" rows="10"></textarea>
        </form>
    </div>
@endsection
