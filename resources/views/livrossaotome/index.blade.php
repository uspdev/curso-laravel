@extends('mainsaotome')

@section('title')
Index Livros
@endsection

@section('content')
@forelse($livros as $livro)
@include('livrossaotome.partials.fields')
@empty
Não há livros cadastrados no sistema.
@endforelse
@endsection
