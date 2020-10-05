@extends('mainVictor')

@section('content')
<form action='/livrosvictor/' method='POST'>
    @csrf
    @include('livrosvictor.partials.form')
</form>

@endsection