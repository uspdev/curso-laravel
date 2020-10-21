@extends('main')

@section('title')
{{ $livromasakik->titulo ?? '' }}
@endsection

@section('content')
@include('livrosmasakik.partials.fields')
<br>
<a href="/livrosmasakik">Voltar para lista</a><br>

@endsection