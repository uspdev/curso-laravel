Título: <input type="text" name="titulo" value="{{ old('titulo', $livros_ebonilha->titulo) }}">
Autor: <input type="text" name="autor" value="{{ old('autor', $livros_ebonilha->autor) }}">
ISBN: <input type="text" class="isbn" name="isbn" value="{{ old('isbn', $livros_ebonilha->isbn) }}">
<button type="submit">Enviar</button>