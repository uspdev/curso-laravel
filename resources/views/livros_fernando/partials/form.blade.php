Título: <input type="text" name="titulo" value="{{ old('titulo',$livro->titulo) }}">
Autor: <input type="text" name="autor" value="{{ old('autor',$livro->autor) }}">
ISBN: <input type="text" class="isbn" name="isbn" value="{{ old('isbn',$livro->isbn) }}">
Preço: <input type="text" class="preco" name="preco" value="{{ old('preco',$livro->preco) }}">
<select name="tipo">
        <option value="" selected="">Selecione...</option>
    @foreach($livro::tipos() as $tipo)
    @if( old('tipo') == '')
        <option value="{{$tipo}}" {{ ($livro->tipo == $tipo) ? 'selected' : '' }} >{{$tipo}}</option>
        @else
        <option value="{{$tipo}}" {{ (old('tipo') == $tipo) ? 'selected' : '' }} >{{$tipo}}</option>
        @endif
    @endforeach
</select>
<button type="submit"> Enviar </button>