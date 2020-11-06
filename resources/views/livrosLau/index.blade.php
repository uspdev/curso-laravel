@extends('mainlau')

@section('content')
<div class="container">
  <div class="card-body">
    <form method="get" action="/livrolau">
    <div class="row">
        <div class=" col-sm input-group">
        <input type="text" class="form-control" name="search" value="{{ request()->search }}">
        <span class="input-group-btn">
            <button type="submit" class="btn btn-success"><i class="fas fa-search"></i> Buscar </button>
        </span>
        </div>
    </div>
    </form>
  </div>
{{ $livrolaus->appends(request()->query())->links() }}
</div>


<div class="container">
  <div class="card">
    <div class="card-header">
      <div class="row justify-content-between">
        <div class="col-4">
          <h5>Acervo de Livros</h5>
        </div>
        @can('admin')
        <div class="col-4">
          <a class="btn btn-success" href="/livrolau/create" role="button">Cadastrar Livro</a>
        </div>
        @endcan
      </div>  
    </div>  
@forelse($livrolaus as $livrolau)

@include('livrosLau.partials.fields')

@empty
  Não há livros cadastrados nesses sistema ainda!
@endforelse
    
  </div>
</div>
@endsection