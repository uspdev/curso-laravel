@extends('main_9793951')

@section('content')

@forelse($livros as $livro)
    @include('livro_9793951.partials.fields')
<br>
@empty
    Nothing to see
@endforelse

@endsection
