@extends('main')

@section('content')
  @forelse($livros as $livroedmar)
    @include('livro_edmar.partials.fields')
  @empty
    Não há livros cadastrados nesse sistema ainda.
  @endforelse
@endsection
