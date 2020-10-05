@extends('main')

@section('content')

<h1 class="mt-5 mb-3">
    Catálogo de Livros
    <a href="/livros-ricardo/create" class="btn btn-success float-right">+ Criar</a>
</h1>

@include('livros-ricardo.partials.list-itens')

@endsection
