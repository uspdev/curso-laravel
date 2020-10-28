Título: <input type="text" name="titulo" value="{{ old('titulo', $livro->titulo) }}"><br>
Autor: <input type="text" name="autor" value="{{ old('autor', $livro->autor) }}"><br>
ISBN: <input type="text" class="isbn" name="isbn" value="{{ old('isbn', $livro->isbn) }}"><br>
<button type="submit">Enviar</button>

@section ('flash')
@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
@endsection

@section ('javascripts_bottom')
<script type="text/javascript" src="{{ asset('js/livrolfloro.js') }}"></script>
@endsection
