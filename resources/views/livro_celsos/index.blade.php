@extends('maincelso')

@section('content')

@forelse($livros as $livro)
@include('livro_celsos.partials.fields')
<br>
@empty
  Não há livros cadastrados
@endforelse

@endsection