@section('javascripts_head')
<script type="text/javascript" src="{ { asset('js/livro.js') } }"></script>
@endsection

Título: <input type="text" name="titulo" value="{{ old('titulo',$livro->titulo) }}">
Autor: <input type="text" name="autor" value="{{ old('autor',$livro->autor) }}">
ISBN: <input type="text" name="isbn" value="{{ old('isbn',$livro->isbn) }}">

Preço: <input type="text" name="preco" value="{{ old('preco',$livro->preco) }}">

<select name="tipo">
<option value="" selected="">Selecione uma opção</option>
@foreach($livro::tipos() as $tipo)
  @if( old('tipo') == '' )
    <option value="{{$tipo}}" {{ ($livro->tipo==$tipo) ? 'selected':'' }}>
        {{ $tipo }}
    </option>
  @else 
    <option value="{{$tipo}}" {{ (old('tipo')==$tipo) ? 'selected':'' }}>
        {{ $tipo }}
    </option>
  @endif
@endforeach
</select>

<button type="submit">Enviar</button>

