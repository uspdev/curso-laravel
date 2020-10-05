@extends('mainlau')

@section('content')
<form method="POST" action="/livrolau/{{ $livrolau->id }}"> 
  <div class="card">
    <h5 class="card-header">Edição de Cadastro</h5>
    @csrf
    @method('patch')
    @include('livrosLau.partials.form')
  </div>
</form>

@endsection