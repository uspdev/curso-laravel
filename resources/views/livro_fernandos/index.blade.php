@extends('mainFernando')

@section('content')

@forelse($livros as $livro)

@include('livro_fernandos.partials.fields')
<br>

@empty
    Não tem livros.
@endforelse

@endsection