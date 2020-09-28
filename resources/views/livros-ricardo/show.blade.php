@extends('main')

@section('content')
<h2 class="mb-3 mt-5">Livro</h2>
<ul class="list-group">
    @if ($livro->titulo !== '')
        <li class="list-group-item">Título: {{ $livro->titulo }}</li>
    @endif
    @if ($livro->autor !== '')
        <li class="list-group-item">Autor: {{ $livro->autor }}</li>
    @endif
    @if ($livro->isbn !== '')
        <li class="list-group-item">ISBN: {{ $livro->isbn }}</li>
    @endif
</ul>
<a href="javascript:history.back(-1)" class="btn btn-dark mt-3">Voltar</a>
@endsection