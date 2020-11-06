@extends('main')

@section('content')

    
    <form method="post" action="/livros_marcelomodesto/{{ $livroMarceloModesto->id}}">
    @csrf
    @method('patch')
    @include('livros_marcelomodesto.partials.form')
  </form>

@endsection