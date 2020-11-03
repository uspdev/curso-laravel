@extends('main')

@section('content')

    
    <form>
    @csrf
    @method('patch')
    @include('livros_marcelomodesto.partials.form')
  </form>

@endsection