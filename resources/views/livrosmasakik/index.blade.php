@extends('main')

@section('title')
Index Livros
@endsection

@section('content')
@forelse($livrosmasakik as $livromasakik)
@include('livrosmasakik.partials.fields')
<br>
<a href="/livrosmasakik/{{$livromasakik->id}}">Mostrar</a><br>
<br>
@empty
Não há livros cadastrados no sistema.
@endforelse
@endsection
