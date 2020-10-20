 
<label for="titulo" class="ml-5">Titulo:</label>
<input type="text" class="form-control ml-5" name="titulo" value="{{$livro->titulo}}">
<label for="autor" class="ml-5">Autor:</label>
<input type="text" class="form-control ml-5" name="autor" value="{{$livro->autor}}">
<label for="isbn" class="ml-5">ISBN:</label>
<input type="text" class="form-control ml-5" name="isbn" value="{{$livro->isbn}}">

<button type="submit" class="btn btn-primary ml-5">Enviar</button>

<!--Título: <input type='text' name="titulo" >
Autor: <input type='text' name="autor" value="{{$livro->autor}}">
ISBN: <input type='text' name="isbn" value="{{$livro->isbn}}">

<button type="submit">Enviar</button>-->