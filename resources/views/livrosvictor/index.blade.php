@extends('mainVictor')

@section('content')

@forelse($livrosvictor as $livrovictor)

@include('livrosvictor.partials.fields')
<br>
@empty
  Não há livros cadastrados nesses sistema ainda!
@endforelse

@endsection
