<!-- ###### create.blade.php ###### -->
@extends('main')
@section('content')
    <form method="POST" action="/livros_alessandrooliveira">
        @csrf
        @include('livros_alessandrooliveira.partials.form')
    </form>
@endsection