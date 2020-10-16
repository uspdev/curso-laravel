@extends('main')

@section('content')

@forelse($livros as $livro)
@include('livro_groffs.partials.fields')
@empty
        Não há livros dos Groffs cadastrados no sistema ainda!
@endforelse

@endsection
