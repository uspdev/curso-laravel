@extends('main_leonardo')
@section('content')
  @forelse ($livros as $livro)
    @include('livros-leonardo.partials.fields')
  @empty
    Não há livros cadastrados
  @endforelse
@endsection
