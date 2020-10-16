@extends('mainVictor')

@section('content')
<form action="/livrosvictor/{{$livrosvictor->id}}" method="POST">
    @csrf
    @method('patch')
    @include('livrosvictor.partials.form')
</form>

@endsection