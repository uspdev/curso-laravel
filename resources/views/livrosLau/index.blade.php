@extends('main')

@section('content')

@forelse($livros as $livro)

@include('livrosLau.partials.fields')

@empty
  Não há livros cadastrados nesses sistema ainda!
@endforelse

@endsection