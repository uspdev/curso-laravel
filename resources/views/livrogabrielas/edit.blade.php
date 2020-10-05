@extends('mainGabriela')

@section('content')
<form method="post" action="/livrogabrielas/{{$livrogabriela->id}}">
@csrf
@method('patch')
    @include('livrogabrielas.partials.form')
</form>
@endsection
