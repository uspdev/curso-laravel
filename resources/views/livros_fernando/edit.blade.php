@extends('mainFernando')

@section('content')

<form method="post" action="/livros_fernando/{{$livro->id}}">
@csrf
@method('patch')
@include('livros_fernando.partials.form')
</form>

@endsection
