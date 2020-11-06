<div class="form-group col-8">
    Título: <input type="text" class="form-control" name="titulo" value="{{ old('titulo', $livro->titulo) }}"><br>
    Autor: <input type="text" class="form-control" name="autor" value="{{ old('autor', $livro->autor) }}"><br>
    ISBN: <input type="text" class="form-control isbn" name="isbn" value="{{ old('isbn', $livro->isbn) }}"><br>
    Preço: <input type="text" class="form-control" name="preco" value="{{ old('preco', $livro->preco) }}"><br>

    Tipo: 
    <select name="tipo" class="form-control">
    <option value="" selected="">Selecione uma opção</option>
    @foreach ($livro::tipos() as $tipo)
      @if (old('tipo') == '')
        <option value="{{ $tipo }}" {{ ($livro->tipo == $tipo) ? 'selected' : '' }}>
          {{ $tipo }}
        </option>
      @else
        <option value="{{ $tipo }}" {{ (old('tipo') == $tipo) ? 'selected' : '' }}>
          {{ $tipo }}
        </option>
      @endif
    @endforeach
    </select>
    <br>
    <button class="btn btn-primary" type="submit">Enviar</button>
    <a class="btn btn-info" href="/livroslfloro/">Cancelar</a>
</div>
@section ('flash')
@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
@endsection

@section ('javascripts_bottom')
<script type="text/javascript" src="{{ asset('js/livrolfloro.js') }}"></script>
@endsection
