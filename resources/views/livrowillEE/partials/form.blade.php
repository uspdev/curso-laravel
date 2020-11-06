Título: <input type="text" name="titulo" id="" @if(isset($livro)) value="{{old('titulo',$livro->titulo)}}" @endif>
Autor: <input type="text" name="autor" id="" @if(isset($livro)) value="{{old('autor',$livro->autor)}}" @endif>
ISBN: <input type="text" name="isbn" id="" @if(isset($livro)) value="{{old('isbn',$livro->isbn)}}" @endif>

<button type="submit">Enviar</button>