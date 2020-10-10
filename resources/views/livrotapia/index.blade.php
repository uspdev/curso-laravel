@extends('maintapia')

@section('content')

    @forelse($livros as $livro)
        @include('livrotapia.partials.fields') 
        <br/>
    @empty
    <h3>Não há livros cadastrados nesses sistema ainda!</h3>
    @endforelse

@endsection