@extends('mainlau')

@section('content')
<form method="POST" action="/livrolau"> 
@csrf
  <div class="card">
    <h5 class="card-header">Cadastro de Livro</h5>
@include('livrosLau.partials.form')
  </div>
</form>

@endsection