<!-- ###### index.blade.php ###### -->

@extends('main')

@section('content')

  @forelse ($livrosMarceloDaudt as $livroMarceloDaudt)
    @include('livros_marcelo_daudt.partials.fields')

  @empty
    Não há livros cadastrados
  @endforelse

@endsection