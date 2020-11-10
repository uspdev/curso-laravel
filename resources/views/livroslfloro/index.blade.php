@extends ('mainlfloro')
@section ('content')
<hr>
<form method="get" action="/livroslfloro">
    <div class="row">
        <div class=" col-sm input-group">
            <input type="text" class="form-control" name="search" value="{{ request()->search }}">

            <span class="input-group-btn">
                <button type="submit" class="btn btn-success"> Buscar </button>
            </span>

        </div>
    </div>
</form>
<hr>
{{ $livros->appends(request()->query())->links() }}
<hr>
@forelse ($livros as $livro)
@include ('livroslfloro.partials.fields')
@empty
Não há livros cadastrados nesse sistema!
@endforelse
@endsection
