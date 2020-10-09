@extends('mainfabi')
@section('content')
  @forelse ($livrofabis as $livrofabi)
    @include('livrosfabi.partials.fields')
    <br>
  @empty
    Não há livros cadastrados no sistema
  @endforelse
@endsection