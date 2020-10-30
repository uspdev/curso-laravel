@extends('main')

@section('content')
    <form method="POST" action="/livroedmar/{{$livroedmar->id}}">
    @csrf
    @method('patch')
    @include('livro_edmar.partials.form')
    </form>
@endsection
