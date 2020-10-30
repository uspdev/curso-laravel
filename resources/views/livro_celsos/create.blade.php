@extends('maincelso')

@section('content')
  <form method="post" action="/livro_celsos">
    @csrf
    @include('livro_celsos.partials.form')
  </form>
@endsection