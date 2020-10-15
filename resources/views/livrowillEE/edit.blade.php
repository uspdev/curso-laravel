@extends('laravel-usp-theme::master')
@section ('content')
    <form method="POST" action="/livros_willEE/{{$livro}}">
    @csrf
    @method('patch')
        @include('livrowillEE.partials.form')
    </form>
@endsection