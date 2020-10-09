@extends ('main')
@section ('content')
@forelse ($livros as $livro)
@include ('livroslfloro.partials.fields')
@empty
Não há livros cadastrados nesse sistema!
@endforelse
@endsection
