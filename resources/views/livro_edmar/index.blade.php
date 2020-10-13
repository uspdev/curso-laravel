@extends('main')

@section('title')
  Teste Laravel Edmar index
@endsection

@section('content')
  @forelse($livros as $livro)
    @include('livro_edmar.partials.fields')
  @empty
    Não há livros cadastrados nesse sistema ainda.
  @endforelse
@endsection
