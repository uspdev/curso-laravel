@extends('mainsaotome')

@section('title')
Index Livros
@endsection

@section('content')
@forelse($livrosSaotome as $livroSaotome)
@include('livrossaotome.partials.fields')
@empty
Não há livros cadastrados no sistema.
@endforelse
@endsection
