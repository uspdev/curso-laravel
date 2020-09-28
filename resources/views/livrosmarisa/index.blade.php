@extends('main')

@section('content')

@forelse($livromarisas as $livromarisa)

@include('livrosmarisa.partials.fields')
<br>
@empty
  Não há livros cadastrados nesses sistema ainda!
@endforelse

@endsection
