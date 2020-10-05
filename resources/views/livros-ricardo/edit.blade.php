@extends('main')

@section('content')
<h2 class="mb-3 mt-5">Atualizar livro</h2>
<form method="post" action="/livros-ricardo/{{$livro->id}}">
    @csrf
    @method('patch')
    @include('livros-ricardo.partials.form')
    <button type="submit" class="btn btn-success mt-3 mr-2">Atualizar</button>
    <a href="javascript:history.back(-1)" class="btn btn-dark mt-3">Voltar</a>
</form>
@endsection