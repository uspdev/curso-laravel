@extends('mainlau')

@section('content')
<form method="POST" action="/livros_lau/{{$livrolau->id}}"> 
@csrf
  <div class="card">
    <h5 class="card-header">Edição de Cadastro</h5>
@method('patch')
@include('livrosLau.partials.form')
  </div>
</form>

@endsection