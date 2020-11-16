@extends('mainGabriela')

@section('content')

<form method="get" action="/livros">
<div class="row">
    <div class=" col-sm input-group">
    <input type="text" class="form-control" name="search" value="{{ request()->search }}">

    <span class="input-group-btn">
        <button type="submit" class="btn btn-success"> Buscar </button>
    </span>

    </div>
</div>
</form>
<br><br>
{{ $livrogabrielas->appends(request()->query())->links() }}


@forelse($livrogabrielas as $livrogabriela)
    @include('livrogabrielas.partials.fields')
<br>
@empty
    Nothing to see
@endforelse

@endsection
