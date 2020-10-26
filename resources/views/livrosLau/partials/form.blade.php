
<div class="card-body">
    <div class="form-group">
        <div class="form-group">
            <select name="tipo" class="form-control" id="tipo">
                <option value="" selected=""> Selecione </option>
                @foreach ($livrolau::tipos() as $tipo)
                    {{-- 1. Situação em que não houve tentativa de submissão --}}
                    @if (old('tipo') == '')
                        <option value="{{$tipo}}" {{ ( $livrolau->tipo == $tipo) ? 'selected' : ''}}>
                            {{$tipo}}
                        </option>
                    {{-- 2. Situação em que houve tentativa de submissão, o valor de old prevalece --}}
                    @else
                        <option value="{{$tipo}}" {{ ( old('tipo') == $tipo) ? 'selected' : ''}}>
                            {{$tipo}}
                        </option>
                    @endif
                @endforeach
            </select>
        </div>
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
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text">Preço R$: </span>
            </div>
            <input type="text" class="form-control" name="preco" id="preco" value="{{old('preco',$livrolau->preco)}}" aria-label="Amount (to the nearest dollar)">
        </div>
        <br>
        <button class="btn btn-success" type="submit">Enviar</button>
        <a class="btn btn-success" href="/livrolau" role="button">Voltar</a>
    </div>
</div>