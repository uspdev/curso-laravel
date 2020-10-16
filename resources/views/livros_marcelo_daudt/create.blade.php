@extends('mainMarceloDaudt')

@section('content')
    <form method="POST" action="/livrosMarceloDaudt">
        @csrf
        @include('livros_marcelo_daudt.partials.form')
    </form>
@endsection