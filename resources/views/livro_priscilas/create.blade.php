@extends('main_priscilas')

@section('title')
  Teste Laravel Priscila index
@endsection

@section('content')
   <form action="{{ route('livro_priscilas.store') }}" method="POST" name="novoLivro">
        @csrf
        @include('livro_priscilas.partials.form')
   </form>
@endsection
