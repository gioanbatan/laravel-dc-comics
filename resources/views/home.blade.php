@extends('layouts.app')

@section('title', 'Comics')

@section('content')
    <a href="{{ route('comics.index') }}" class="btn btn-primary">
        ADMIN
    </a>
@endsection
