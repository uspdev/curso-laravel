@extends('mainFernando')

@section('content')

<form method="post" action="/livros_fernando">
@csrf
@include('livros_fernando.partials.form')
</form>

@endsection
