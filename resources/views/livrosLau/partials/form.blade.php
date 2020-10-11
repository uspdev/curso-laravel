
<div class="card-body">
    <div class="form-group">
        <div class="form-group">
            <label for="titulo">Título do Livro:</label>
            <input type="text" class="form-control" name="titulo" id="titulo" value="{{old('titulo',$livrolau->titulo)}}">
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="autor">Autores:</label>
                <input type="text" class="form-control" name="autor" id="autor" value="{{old('autor',$livrolau->autor)}}"}}>
            </div>
            <div class="form-group col-md-6">
                <label for="isbn">ISBN:</label>
                <input type="text" class="form-control isbn" name="isbn" id="isbn" value="{{old('isbn',$livrolau->isbn)}}">
            </div>
        </div>
        <button class="btn btn-success" type="submit">Enviar</button>
        <a class="btn btn-success" href="/livrolau" role="button">Voltar</a>
    </div>
</div>