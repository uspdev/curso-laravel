@extends('main')

@section('content')

@forelse($livros as $livro)

@include('livros_fabiofdrp.partials.fields')
<br>
@empty
  Não há livros cadastrados nesses sistema ainda!
@endforelse

@endsection
