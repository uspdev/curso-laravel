@extends('main')

@section('content')

@forelse($livros as $livro)

@include('livro_michelets.partials.fields')
<br>
@empty
  Não há livros cadastrados nesses sistema ainda!
@endforelse

@endsection
