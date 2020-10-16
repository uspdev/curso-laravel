Título: <input type="text" name="titulo" value="{{ old('titulo', $livrogabriela->titulo) }}">
Autor: <input type="text" name="autor" value="{{ old('autor', $livrogabriela->autor) }}">
ISBN: <input type="text" class="isbn" name="isbn" value="{{ old('isbn', $livrogabriela->isbn) }}">
<button type="submit">Enviar</button>