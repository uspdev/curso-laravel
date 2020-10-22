@extends('main_ebonilha')
@section('content')
  <form method="POST" action="/livros_ebonilha/{{ $livros_ebonilha->id }}">
    @csrf
    @method('patch')
    @include('livro_ebonilha.partials.form')
  </form>
@endsection