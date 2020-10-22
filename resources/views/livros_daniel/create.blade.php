@extends('main_daniel')

@section('content')
<form class="form-inline" method="post" action="/livros_daniel">
    @csrf
    @include('livros_daniel.partials.form')
</form>
@endsection