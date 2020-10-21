@extends('main_daniel')

@section('content')
<form class="form-inline" method="post" action="/livros_daniel/{{$livro->id}}">
    @csrf
    @method('patch')
    @include('livros_daniel.partials.form')
</form>
@endsection