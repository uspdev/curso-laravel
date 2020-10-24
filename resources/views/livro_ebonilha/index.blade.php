@extends('main_ebonilha')

@section('content')
    @forelse ($livrosEbonilha as $livros_ebonilha)
        @include('livro_ebonilha.partials.fields')
    @empty
        Não há livros cadastrados
    @endforelse
@endsection