@extends('layouts.app')

@section('title', 'Comics - Admin')

@section('content')
    <div class="container">
        <h1>Comics - Admin setion</h1>

        <a href="{{ route('comics.create') }}" class="btn btn-success">+ ADD</a>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Titolo</th>
                    <th scope="col">Serie</th>
                    <th scope="col">Tipo</th>
                    <th scope="col">Prezzo</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($comics as $comic)
                    <tr>
                        <th scope="row">{{ $comic->title }}</th>
                        <td>{{ $comic->series }}</td>
                        <td>{{ $comic->type }}</td>
                        <td>{{ $comic->price }}</td>
                        <td>
                            <a href="{{ route('comics.show', $comic->id) }}">
                                Show
                            </a>
                        </td>
                        <td>
                            <a href="{{ route('comics.edit', $comic->id) }}">
                                Modifica
                            </a>
                        </td>
                        <td>
                            <form action="{{ route('comics.destroy', $comic->id) }}" method="POST">
                                @method('DELETE')
                                @csrf
                                <button type="submit">
                                    Cancella
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>

@endsection
