@extends('main_daniel')

@section('content')
@forelse($livros as $livro)
@include('livros_daniel.partials.fields')
<br />
@empty
<h1>Não há livros cadastrados neste sistema ainda!</h1>
@endforelse

@endsection