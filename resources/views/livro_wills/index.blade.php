@extends('main')

@section('content')
    <ul>
    @foreach ($livros as $livro)
        <a href="{{ route('will.show', $livro) }}"><li>{{ $livro->titulo }}</li></a>
    @endforeach
    </ul>
@stop
