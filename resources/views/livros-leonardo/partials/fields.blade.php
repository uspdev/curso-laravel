<ul>
  <li><a href="/livros_leonardo/{{ $livro->id }}">{{ $livro->titulo }}</a></li>
  <li>{{ $livro->autor }}</li>
  <li>{{ $livro->isbn }}</li>
  <li><a href="/livros_leonardo/{{ $livro->id }}/edit">Editar</a></li>
  <li>
    <form action="/livros_leonardo/{{ $livro->id }} " method="post">
      @csrf
      @method('delete')
      <button type="submit" onclick="return confirm('Tem certeza?');">Apagar</button> 
    </form>
  </li> 
</ul>
