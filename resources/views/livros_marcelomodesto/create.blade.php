@extends('main')

@section('content')

<form method="post" action="/livros_marcelomodesto">
@csrf
@include('livros_marcelomodesto.partials.form')
</form>

@endsection

