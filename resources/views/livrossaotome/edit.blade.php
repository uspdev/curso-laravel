@extends('mainsaotome')

@section('title')
Editar {{ $livroSaotome->titulo }}
@endsection

@section('content')

<form method="post" action="/livrossaotome/{{$livroSaotome->id}}">
@csrf
@method('patch')
@include('livrossaotome.partials.form')
</form>

@endsection