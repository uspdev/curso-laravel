@extends('mainGabriela')

@section('content')
<form method="post" action="/livrogabrielas">
@csrf
    @include('livrogabrielas.partials.form')
</form>
@endsection
