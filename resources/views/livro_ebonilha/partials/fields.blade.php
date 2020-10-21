<ul>
    <li><a href="/livros_ebonilha/{{$livros_ebonilha->id}}">{{ $livros_ebonilha->titulo }}</a></li>
    <li>{{ $livros_ebonilha->autor }}</li>
    <li>{{ $livros_ebonilha->isbn }}</li>
    <li><a href="/livros_ebonilha/{{ $livros_ebonilha->id }}/edit">Editar</a></li>
    <li>
      <form action="/livros_ebonilha/{{ $livros_ebonilha->id }} " method="post">
        @csrf
        @method('delete')
        <button type="submit" onclick="return confirm('Tem certeza?');">Apagar</button> 
      </form>
    </li> 
  </ul>