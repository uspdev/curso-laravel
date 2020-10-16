@extends('mainsaotome')

@section('title')
Index Livros
@endsection

@section('content')
<h1>Index Livros</h1>
    @forelse($livrosSaotome as $livroSaotome)
        @include('livrossaotome.partials.fields')
        @empty
        Não há livros cadastrados no sistema.
    @endforelse
@endsection
