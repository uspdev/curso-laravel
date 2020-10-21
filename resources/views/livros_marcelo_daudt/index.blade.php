@extends('mainMarceloDaudt')

@section('content')

  @forelse ($livros as $livro)
    @include('livros_marcelo_daudt.partials.fields')
    <br>
  @empty
    Não há livros cadastrados
  @endforelse

@endsection