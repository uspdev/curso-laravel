@extends('main_ebonilha')

@section('content')
    @forelse ($livros as $livro)
        @include('livro_ebonilha.partials.fields')
    @empty
        Não há livros cadastrados
    @endforelse
@endsection