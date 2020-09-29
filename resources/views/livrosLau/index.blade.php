@extends('mainlau')

@section('content')

<div class="container">
  <div class="card">
  <h5 class="card-header">Acervo de Livros</h5>
@forelse($livrolaus as $livrolau)

@include('livrosLau.partials.fields')

@empty
  Não há livros cadastrados nesses sistema ainda!
@endforelse
    
  </div>
</div>
@endsection