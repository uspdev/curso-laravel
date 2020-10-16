@extends('main')

<ul>
@section('content')
    <li>Título: {{ $livro->titulo }}</li>
    <li>Autor: {{ $livro->autor }}</li>
    <li>ISBN: {{ $livro->isbn }}</li>
@stop
</ul>
