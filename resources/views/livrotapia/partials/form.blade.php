<!-- ###### partials/form.blade.php ###### -->
Título: <input type="text" name="titulo" value="{{ old('titulo', $livro->titulo)  }}">
Autor: <input type="text" name="autor" value="{{ old('autor', $livro->autor) }}">
ISBN: <input type="text" class='isbn' name="isbn" value="{{ old('isbn', $livro->isbn) }}">

<select name="tipo">
    <option value="" selected>Selecione uma opção</option>
    @foreach($livro::tipos() as $tipo)
        @if( old('tipo') == '')
        <option value="{{$tipo}}" {{ $livro->tipo==$tipo ? 'selected':'' }}>
            {{ $tipo }}
        </option>
    @else
        <option value="{{$tipo}}" {{ (old('tipo')==$tipo) ? 'selected':'' }}>
            {{ $tipo }}
        </option>
    @endif
    @endforeach
</select>
Preço: <input type="text" name="preco" value="{{ old('preco', $livro->preco) }}">


<button type="submit">Enviar</button>

@section('javascripts_bottom')
<script type="text/javascript" src="{ { asset('js/livrotapia.js') } }"></script>
@endsection