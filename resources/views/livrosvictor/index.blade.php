@extends('mainVictor')

@section('content')

<h4 style="text-align:center;"><b>Livros Cadastrados</b></h4>
<a href="/livrosvictor/create" class="btn btn-primary">Cadastrar Livro</a>
<br>
<br>

@forelse($livrosvictor as $livrovictor)

@include('livrosvictor.partials.fields')
<br>
@empty
  Não há livros cadastrados nesses sistema ainda!
@endforelse

@endsection
