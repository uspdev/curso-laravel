@extends('main_ebonilha')
@section('content')
  <form method="POST" action="/livros_ebonilha">
    @csrf
    @include('livro_ebonilha.partials.form')
  </form>
@endsection