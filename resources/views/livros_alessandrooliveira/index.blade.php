<!-- ###### index.blade.php ###### -->
@extends('main_alessandrooliveira')
@section('content')
    @forelse ($livros as $livro)
        @include('livros_alessandrooliveira.partials.fields')
        @empty
        Não há livros cadastrados
    @endforelse
@endsection
  