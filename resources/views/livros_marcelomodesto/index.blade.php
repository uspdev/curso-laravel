@extends('main')

@section('content')

<a href="/livros_marcelomodesto/create">Criar novo livro</a>


@forelse($livrosMarceloModesto as $livroMarceloModesto)

@include('livros_marcelomodesto.partials.fields')
<br>
@empty
  Não há livros cadastrados nesses sistema ainda!
@endforelse

@endsection