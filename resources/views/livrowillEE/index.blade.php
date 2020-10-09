@extends('mainWBM')

@section ('content')

    @forelse($livros as $livro)
        @include('livrowillEE.partials.fields')
    @empty   
        Não há livros cadastrados neste sistema ainda!
    @endforelse
@endsection