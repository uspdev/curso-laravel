@extends('main')

@section('content')
    <form method="POST" action="/livroedmar">
    @csrf
    @include('livro_edmar.partials.form')
    </form>
@endsection
