@extends('mainsaotome')

@section('title')
{{ $livro->titulo ?? '' }}
@endsection

@section('content')
@include('livrossaotome.partials.fields')
@endsection