@extends('layouts.app')

@section('title', 'Admin')

@section('actions')
    <a href="{{ route('comics.create') }}" class="btn btn-success">
        <i class="fa-solid fa-circle-plus"></i> Nuovo
    </a>
@endsection

@section('content')
    <div class="container">
        <h1>Comics - Admin section</h1>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Titolo</th>
                    <th scope="col">Serie</th>
                    <th scope="col">Tipo</th>
                    <th scope="col">Prezzo</th>
                    <th scope="col">Azioni</th>
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
                            <a class="btn" href="{{ route('comics.show', $comic->id) }}">
                                <i class="fa-solid fa-circle-info text-primary"></i>
                            </a>

                            <a class="btn" href="{{ route('comics.edit', $comic->id) }}">
                                <i class="fa-solid fa-pen-to-square text-primary"></i>
                            </a>

                            <form class="d-inline" action="{{ route('comics.destroy', $comic->id) }}" method="POST">
                                @method('DELETE')
                                @csrf
                                <button class="btn" type="submit" onclick="return wantDelete()">
                                    <i class="fa-solid fa-trash-can text-danger"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>

    <script>
        function wantDelete() {
            if (!confirm('Sei sicuro/a di volere eleminare questo fumetto?')) event.preventDefault();
        }
    </script>
@endsection
