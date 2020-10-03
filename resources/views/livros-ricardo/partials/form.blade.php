
<div class="form-group">
  <label for="titulo">Título</label>
  <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Ex: Quincas Borbas" value="{{$livro->titulo}}">
</div>

<div class="form-group">
  <label for="autor">Autor</label>
  <input type="text" class="form-control" id="autor" name="autor" placeholder="Ex: Machado de Assis" value="{{$livro->autor}}">
</div>

<div class="form-group">
  <label for="isbn">ISBN</label>
  <input type="text" class="form-control isbn" id="isbn" name="isbn" placeholder="Ex: 16516848545" value="{{$livro->isbn}}">
</div>

  