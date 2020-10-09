@extends ('main')
@section ('content')
<form method="POST" action="/livroslfloro/{{ $livro->id }}">
    @csrf
    @method('patch')
    @include('livroslfloro.partials.form')
</form>
@endsection
