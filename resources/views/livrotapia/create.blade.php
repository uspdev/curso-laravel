@extends('maintapia')

@section('content')    

    <form method="post" action="/livrostapia">
    @csrf
    @include('livrotapia.partials.form')
    </form>
    
@endsection