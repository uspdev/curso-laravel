@extends('main')

@section('content')

@forelse($livros as $livro)

@include('livros_leandroramos.partials.fields')
<br>
@empty
  Ainda não há livros cadastrados no sistema!
@endforelse

@endsection
