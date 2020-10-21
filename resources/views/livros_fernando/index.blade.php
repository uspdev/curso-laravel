@extends('mainFernando')

@section('content')

@forelse($livros as $livro)

@include('livros_fernando.partials.fields')
<br>

@empty
    Não tem livros.
@endforelse

@endsection