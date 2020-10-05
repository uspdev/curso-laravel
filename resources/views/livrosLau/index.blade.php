@extends('mainlau')

@section('content')

<div class="container">
  <div class="card">
    <div class="card-header">
      <div class="row justify-content-between">
        <div class="col-4">
          <h5>Acervo de Livros</h5>
        </div>
        <div class="col-4">
          <a class="btn btn-success" href="/livrolau/create" role="button">Cadastrar Livro</a>
        </div>
      </div>  
    </div>  
@forelse($livrolaus as $livrolau)

@include('livrosLau.partials.fields')

@empty
  Não há livros cadastrados nesses sistema ainda!
@endforelse
    
  </div>
</div>
@endsection