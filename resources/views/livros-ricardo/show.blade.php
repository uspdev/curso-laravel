@extends('main_ricardo')

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
        <li class="list-group-item">ISBN:  <span class="isbn">{{ $livro->isbn }}</span></li>
    @endif
    @if ($livro->preco !== '')
        <li class="list-group-item">Preço:  <span class="preco">{{ $livro->preco }}</span></li>
    @endif
    @if ($livro->tipo !== '')
        <li class="list-group-item">Tipo:  <span class="tipo">{{ $livro->tipo }}</span></li>
    @endif
    @if ($livro->user != null)
        <li class="list-group-item">Cadastrado por:  {{ $livro->user->name }}</li>
    @endif
</ul>
<a href="/livros-ricardo" class="btn btn-success mt-3">Início</a>
<a href="javascript:history.back(-1)" class="btn btn-dark mt-3">Voltar</a>
@can('admin')
<a class="btn btn-warning mt-3 " href="/livros-ricardo/{{ $livro->id ?? '' }}/edit">Editar</a>

<form action="/livros-ricardo/{{$livro->id}}" method="post" class="d-inline-block">
    @csrf
    @method('delete')
    <button type="submit" onclick="return confirm('Tem certeza?');" class="btn btn-danger mt-3 ">Deletar</button>
</form>
@endcan

@endsection