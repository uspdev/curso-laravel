@extends('main')

@section('content')

@forelse($livrogabrielas as $livrogabriela)
    @include('livrogabrielas.partials.fields')
<br>
@empty
    Nothing to see
@endforelse

@endsection
