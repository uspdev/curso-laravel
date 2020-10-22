Título: <input type="text" name="titulo" id="" @if(isset($livro)) value="{{$livro->titulo}}" @endif>
Autor: <input type="text" name="autor" id="" @if(isset($livro)) value="{{$livro->autor}}" @endif>
ISBN: <input type="text" name="isbn" id="" @if(isset($livro)) value="{{$livro->isbn}}" @endif>

<button type="submit">Enviar</button>