@extends('main')

@section('content')

@forelse($livros as $livro)
	@include('livrosandre.partials.fields')
@empty
	Não há livros cadastrados nesse sistema ainda!
@endforelse

@endsection
