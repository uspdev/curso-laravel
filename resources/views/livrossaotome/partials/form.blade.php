Título:  <input type="text" name="titulo" value="{{  old('titulo', $livroSaotome->titulo) }}" >
Autor:   <input type="text" name="autor" value="{{  old('autor', $livroSaotome->autor) }}" >
ISBN:    <input type="text" class="isbn" name="isbn" value="{{  old('isbn', $livroSaotome->isbn) }}">
Preço:   <input type="text" class="preco" name="preco" value="{{  old('preco', $livroSaotome->preco) }}">

<br>
<br>
Tipo:
<select name="tipo">
<option value="" selected="">Selecione uma opção </option>
@foreach($livroSaotome::tipos() as $tipo)
    @if ( old('tipo') == '')
    <option value="{{ $tipo }}" {{ ($livroSaotome->tipo==$tipo) ? 'selected':'' }}>
        {{ $tipo }}
    </option>
    @else
    <option value="{{ $tipo }}" {{ (old('tipo')==$tipo) ? 'selected':'' }}>
        {{ $tipo }}
    </option>
    @endif
@endforeach
</select>


<button type="submit"> Enviar </button>