Título: <input type="text" name="titulo" value="{{  old('titulo', $livroSaotome->titulo) }}" >
Autor:  <input type="text" name="autor" value="{{  old('autor', $livroSaotome->autor) }}" >
ISBN:   <input type="text" class="isbn" name="isbn" value="{{  old('isbn', $livroSaotome->isbn) }}">

<button type="submit"> Enviar </button>