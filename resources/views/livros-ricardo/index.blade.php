@extends('main_ricardo')


@section('content')

<h1 class="mt-5 mb-3">
    Catálogo de Livros
    @can('admin')
    <a href="/livros-ricardo/create" class="btn btn-success float-right">+ Criar</a>
    @endcan
</h1>

<form method="get" action="/livros-ricardo">
    <div class="row">
        <div class=" col-sm input-group">
        <input type="text" class="form-control" name="search" value="{{ request()->search }}">
    
        <span class="input-group-btn ml-3">
            <button type="submit" class="btn btn-success"> Buscar </button>
        </span>
    
        </div>
    </div>
</form>
<p>&nbsp;</p>


@include('livros-ricardo.partials.list-itens')

<p>&nbsp;</p>
<div class="text-center d-flex justify-content-center">
    {{ $livros->appends(request()->query())->links() }}
</div>

@endsection
