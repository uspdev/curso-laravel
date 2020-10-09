@extends('main')

@section('title')
  Teste Laravel Priscila index
@endsection

@section('content')
  @forelse($livros as $livro)
    @include('livro_priscilas.partials.fields')
  @empty
    Não há livros cadastrados nesse sistema ainda.
  @endforelse
@endsection