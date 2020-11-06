Título: <input type="text" name="titulo" value="{{ old('titulo', $livrogabriela->titulo) }}">
Autor: <input type="text" name="autor" value="{{ old('autor', $livrogabriela->autor) }}">
ISBN: <input type="text" class="isbn" name="isbn" value="{{ old('isbn', $livrogabriela->isbn) }}">
Preço: <input type="text" class="preco" name="preco" value="{{ old('preco', $livrogabriela->preco) }}">

<select name="tipo">
    <option value="" selected="">Selecione um tipo</option>
    @foreach($livrogabriela::tipos() as $tipo)
        @if( old('tipo') == '')
            <option value="{{$tipo}}" {{ ($livrogabriela->tipo==$tipo) ? 'selected': '' }}>
                {{ $tipo }}
            </option>
        @else
            <option value="{{$tipo}}" {{ (old('tipo')==$tipo) ? 'selected': '' }}>
                {{ $tipo }}
            </option>

        @endif
    @endforeach
</select>

<button type="submit">Enviar</button>