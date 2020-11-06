@extends('main_daniel')

@section('content')

<form method="get" action="/livros_daniel">
    <div class="row">
        <div class=" col-sm input-group">
            <input type="text" class="form-control" name="search" value="{{ request()->search }}">

            <span class="input-group-btn">
                <button type="submit" class="btn btn-success"> Buscar </button>
            </span>

        </div>
    </div>
</form>

{{ $livros->appends(request()->query())->links() }}

@forelse($livros as $livro)
@include('livros_daniel.partials.fields')
<br />
@empty
@if(isset($request->search))
<div class="alert alert-warning">
    <strong>Nenhum livro encontrado!</strong> Não há livros cadastrados no sistema.
</div>
@else
<div class="alert alert-warning">
    <strong>Nenhum livro encontrado!</strong> Sua busca não retornou nenhum resultado.
</div>
@endif

@endforelse

@endsection