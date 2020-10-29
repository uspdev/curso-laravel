 
<label for="titulo" class="ml-5">Titulo:</label>
<input type="text" class="form-control ml-5" name="titulo" value="{{old('titulo', $livro->titulo)}}">
<label for="autor" class="ml-5">Autor:</label>
<input type="text" class="form-control ml-5" name="autor" value="{{old('autor', $livro->autor)}}">
<label for="isbn" class="ml-5">ISBN:</label>
<input type="text" class="form-control ml-5 isbn" name="isbn" value="{{old('isbn', $livro->isbn)}}">

<div class="form-group ml-5">
  <label for="tipo">Tipo:</label>
<select  class="form-control ml-5" name="tipo" id="tipo">
    <option value="" selected=""> - Selecione  -</option>
    @foreach ($livro::tipos() as $tipo)
        {{-- 1. Situação em que não houve tentativa de submissão --}}
        @if (old('tipo') == '')
        <option value="{{$tipo}}" {{ ( $livro->tipo == $tipo) ? 'selected' : ''}}>
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
</div>

<label for="preco" class="ml-5">Preço:</label>
<input type="text" class="form-control ml-5 preco" name="preco" value="{{old('preco', $livro->preco)}}">

<button type="submit" class="btn btn-primary ml-5">Enviar</button>