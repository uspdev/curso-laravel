 
<label for="titulo" class="ml-5">Titulo:</label>
<input type="text" class="form-control ml-5" name="titulo" value="{{old('titulo', $livro->titulo)}}">
<label for="autor" class="ml-5">Autor:</label>
<input type="text" class="form-control ml-5" name="autor" value="{{old('autor', $livro->autor)}}">
<label for="isbn" class="ml-5">ISBN:</label>
<input type="text" class="form-control ml-5 isbn" name="isbn" value="{{old('isbn', $livro->isbn)}}">

<button type="submit" class="btn btn-primary ml-5">Enviar</button>