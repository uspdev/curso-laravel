@extends('main')

@section('content')
    @forelse($livros as $livro)
        @include('livros_alessandrooliveira.partials.fields')
        @empty
          Ainda não há livros cadastrados no sistema!
    @endforelse
@endsection
  