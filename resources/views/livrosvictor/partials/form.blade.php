<label for="titulo">Título</label>
<input type="text" name="titulo" value="{{old('titulo', $livrosvictor->titulo)}}">
<br>
<label for="autor">Autor</label>
<input type="text" name="autor" value="{{old('autor', $livrosvictor->autor)}}">
<br>
<label for="isbn">ISBN</label>
<input type="text" name="isbn" class="isbn" value="{{old('isbn', $livrosvictor->isbn)}}">
<br>
<label for="tipo">Procedência</label>
<select name="tipo">
    <option value="" selected=""> - Selecione  -</option>
    @foreach ($livrosvictor::tipos() as $tipo)
        {{-- 1. Situação em que não houve tentativa de submissão --}}
        @if (old('tipo') == '')
        <option value="{{$tipo}}" {{ ( $livrosvictor->tipo == $tipo) ? 'selected' : ''}}>
            {{$tipo}}
        </option>
        {{-- 2. Situação em que houve tentativa de submissão, o valor de old prevalece --}}
        @else
            <option value="{{$tipo}}" {{ ( old('tipo') == $tipo) ? 'selected' : ''}}>
                {{$tipo}}
            </option>
        @endif
    @endforeach
</select>
<br>
<label for="preco">Preço</label>
<input type="text" name="preco" class="preco" value="{{old('preco', $livrosvictor->preco)}}">
<br>
<button type="submit" class="btn btn-success">Enviar</button>