@extends('maintapia')

@section('content')
  <form method="POST" action="/livrostapia/{{ $livro->id }}">
    @csrf
    @method('patch')
    @include('livrotapia.partials.form')
  </form>
@endsection