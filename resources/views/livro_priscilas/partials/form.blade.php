<p>
    <b>Título: </b><input type="text" name="titulo" id="titulo" value="{{ $livro->titulo ?? ''}}"><br/>
    <b>Autor: </b><input type="text" name="autor" id="autor"  value="{{ $livro->autor ?? '' }}"><br/>
    <b>ISBN: </b><input type="text" name="isbn" id="isbn" value="{{ $livro->isbn ?? '' }}"> <br/>
</p>
<input type="submit" value="Gravar">
