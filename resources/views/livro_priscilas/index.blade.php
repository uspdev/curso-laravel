@extends('main_priscilas')

@section('title')
  Teste Laravel Priscila index
@endsection

@section('content')
  <a href="{{ route('livro_priscilas.create') }}">Novo</a>
  @forelse($livros as $livro)
    @include('livro_priscilas.partials.fields') 
  @empty
    Não há livros cadastrados nesse sistema ainda.
  @endforelse
@endsection
