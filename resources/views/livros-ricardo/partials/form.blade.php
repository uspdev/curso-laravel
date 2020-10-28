
<div class="form-group">
  <label for="titulo">Título</label>
  <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Ex: Quincas Borbas" value="{{ old('titulo', $livro->titulo) }}">
</div>

<div class="form-group">
  <label for="autor">Autor</label>
  <input type="text" class="form-control" id="autor" name="autor" placeholder="Ex: Machado de Assis" value="{{old('autor', $livro->autor)}}">
</div>

<div class="form-group">
  <label for="isbn">ISBN</label>
  <input type="text" class="form-control isbn" id="isbn" name="isbn" placeholder="Ex: 16516848545" value="{{old('isbn', $livro->isbn)}}">
</div>

<div class="form-group">
  <label for="preco">Preço</label>
  <input type="text" class="form-control preco" id="preco" name="preco" placeholder="Ex: 30,00" value="{{old('preco', $livro->preco)}}">
</div>

<div class="form-group">
  <label for="tipo">Tipo</label>
  <select name="tipo" id="tipo" class="form-control">
    <option value="" selected>Selecionar</option> 
    @foreach ($livro::tipos() as $tipo)
      <option value="{{$tipo}}" 
          {{ (old('tipo') == '') ? (($livro->tipo == $tipo) ? 'selected' : '') : (old('tipo') == $tipo) ? 'selected' : ''  }}>
        {{$tipo}}
      </option>   
    @endforeach
  </select>
</div>

  