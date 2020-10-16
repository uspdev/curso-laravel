{{-- TODO mask isbn don't work --}}
@section('javascripts_head')
    <script type="text/javascript" src="{{ asset(config('app.url') . '/js/livro_alessandrooliveira.js') }}"></script>
@endsection

<!-- ###### partials/form.blade.php ###### -->
Título: <input type="text" name="titulo" value="{{ $livro->titulo }}">
Autor: <input type="text" name="autor" value="{{ $livro->autor }}">
ISBN: <input type="text" name="isbn" value="{{ $livro->isbn }}">
<button type="submit">Enviar</button>