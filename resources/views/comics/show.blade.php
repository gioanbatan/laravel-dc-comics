@extends('layouts.app')

@section('title', $comic->title)

@section('content')
    <div class="container">
        <h2 class="text-center my-2">
            <span class="text-secondary">{{ $comic->id }} - </span><span class="text-primary">{{ $comic->title }}</span>
        </h2>

        <div class="image-container text-center mb-2">
            @if (!empty($comic->thumb))
                <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
            @else
                <h2>Immagine non presente</h2>
            @endif
        </div>

        <dl>
            <div class="row">
                <div class="col-6">
                    <dt>Serie:</dt>
                    <dd>{{ $comic->series }}</dd>
                </div>

                <div class="col-4">
                    <dt>Tipo:</dt>
                    <dd>{{ $comic->type }}</dd>
                </div>

                <div class="col-2">
                    <dt>Data messa in vendita:</dt>
                    <dd>{{ $comic->sale_date }}</dd>
                </div>
            </div>


            <dt>Descrizione:</dt>
            <dd>
                <p>
                    {{ $comic->description }}
                </p>
            </dd>
        </dl>

        <a href="{{ route('comics.index') }}">
            Torna indietro
        </a>


    @endsection
