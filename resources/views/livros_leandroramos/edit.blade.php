@extends('main_leandroramos')

@section('content')

<form method="post" action="/livros_leandroramos/{{$livro->id}}">
@csrf
@method('patch')
@include('livros_leandroramos.partials.form')
</form>

@endsection
