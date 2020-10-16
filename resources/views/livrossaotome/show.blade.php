@extends('mainsaotome')

@section('title')
{{ $livroSaotome->titulo ?? '' }}
@endsection

@section('content')
@include('livrossaotome.partials.fields')
@endsection