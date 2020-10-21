@extends('maincelso')

@section('content')
  <form method="post" action="/livro_celsos/{{$livro->id}}">
    @csrf
    @method('patch')
    @include('livro_celsos.partials.form')
  </form>
@endsection