<label for="titulo">Título</label>
<input type="text" name="titulo" value="{{old('titulo', $livrosvictor->titulo)}}">
<br>
<label for="autor">Autor</label>
<input type="text" name="autor" value="{{old('autor', $livrosvictor->autor)}}">
<br>
<label for="isbn">ISBN</label>
<input type="text" name="isbn" class="isbn" value="{{old('isbn', $livrosvictor->isbn)}}">
<br>
<button type="submit" class="btn btn-success">Enviar</button>