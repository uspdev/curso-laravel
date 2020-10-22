@extends('main')
@section('content')
  <form method="POST" action="/livros_leonardo/{{ $livro->id }}">
    @csrf
    @method('patch')
    @include('livros-leonardo.partials.form')
  </form>
@endsection
