@extends('laravel-usp-theme::master')
@section ('content')
    <form method="POST" action="/livros_willEE">
    @csrf
        @include('livrowillEE.partials.form')
    </form>
@endsection