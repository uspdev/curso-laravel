@extends ('main')
@section ('content')
<form method="POST" action="/livroslfloro">
    @csrf
    @include ('livroslfloro.partials.form')
</form>
@endsection
