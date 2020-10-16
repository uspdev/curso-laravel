@extends('main_daniel')

@section('content')
<form method="post" action="/livros_daniel/{{$livro->id}}">
    @csrf
    @method('patch')
    @include('livros_daniel.partials.form')
</form>
@endsection