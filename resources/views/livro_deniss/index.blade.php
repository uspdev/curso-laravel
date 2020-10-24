@extends('main')
@section('content')
@forelse ($livros as $livro)
@include('livro_deniss.partials.fields')
    <br>
@empty
    Não há livros cadastrados
@endforelse  
@endsection