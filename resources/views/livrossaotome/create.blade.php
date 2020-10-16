@extends('mainsaotome')

@section('title')
Cadastrar um livro
@endsection

@section('content')

<form method="post" action="/livrossaotome">
@csrf
@include('livrossaotome.partials.form')
</form>

@endsection