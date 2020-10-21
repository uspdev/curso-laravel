<ul>
  <li><a href="/livro_celsos/{{$livro->id}}">{{ $livro->titulo ?? '' }}</a></li>
  <li>{{ $livro->autor ?? '' }}</li>
  <li>{{ $livro->isbn ?? '' }}</li>
  <li>
  <form action="/livro_celsos/{{$livro->id}}" method="post">
    @csrf
    <button type="button" onclick="location.href='/livro_celsos/{{$livro->id}}/edit';">Editar</button>
    @method('delete')
    <button type="submit" onclick="return confirm('Tem certeza?');">Apagar</button>
  </form>
  </li>
</ul>