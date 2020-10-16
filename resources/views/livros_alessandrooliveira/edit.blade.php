<!-- ###### edit.blade.php ###### -->
@extends('main')
@section('content')
    <form method="POST" action="/livros_alessandrooliveira/{{ $livro->id }}">
        @csrf
        @method('patch')
        @include('livros_alessandrooliveira.partials.form')
    </form>
@endsection