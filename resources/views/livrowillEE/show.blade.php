@extends('mainWBM')

@section ('content')
    @if (isset($livro))
        @include('livrowillEE.partials.fields')
    @else
        <p>Não existe este livro em nossos registros</p>
    @endif
@endsection