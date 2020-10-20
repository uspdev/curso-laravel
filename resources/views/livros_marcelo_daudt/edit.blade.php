@extends('mainMarceloDaudt')

@section('content')
    <form method="POST" action="/livrosMarceloDaudt/{{ $livro->id }}">
        @csrf
        @method('patch')
        @include('livros_marcelo_daudt.partials.form')
    </form>
@endsection