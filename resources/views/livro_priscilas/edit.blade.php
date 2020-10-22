@extends('main_priscilas')

@section('title')
  Teste Laravel Priscila index
@endsection

@section('content')
   <form action="{{ route('livro_priscilas.update',$livro->id) }}" method="POST" name="editarLivro">
        @csrf
        @method('PATCH')
        @include('livro_priscilas.partials.form')
   </form>
@endsection
