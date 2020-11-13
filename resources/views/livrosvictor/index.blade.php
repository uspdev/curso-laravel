@extends('mainVictor')

@section('content')

<h4 style="text-align:center;"><b>Livros Cadastrados</b></h4>
<a href="/livrosvictor/create" class="btn btn-primary">Cadastrar Livro</a>
<br>
<br>
<form method="get" action="/livrosvictor">
<div class="row">
    <div class=" col-sm input-group">
    <input type="text" class="form-control" name="search" value="{{ request()->search }}">

    <span class="input-group-btn">
        <button type="submit" class="btn btn-success"> Buscar </button>
    </span>

    </div>
</div>
</form>
<br>
@forelse($livrosvictor as $livrovictor)

@include('livrosvictor.partials.fields')
<br>
@empty
  Não há livros cadastrados nesses sistema ainda!
@endforelse
{{ $livrosvictor->appends(request()->query())->links() }}
@endsection
