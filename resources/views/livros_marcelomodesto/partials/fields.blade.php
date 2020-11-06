<ul>
<li><a href="/livros_marcelomodesto/{{$livroMarceloModesto->id}}">{{ $livroMarceloModesto->titulo }}</a></li>


 
 
  <li>{{ $livroMarceloModesto->titulo }}</li>
  <li>{{ $livroMarceloModesto->autor }}</li>
  <li>{{ $livroMarceloModesto->isbn }}</li>
  <li><a href="/livros_marcelomodesto/{{ $livroMarceloModesto->id }}/edit">Editar</a></li>
  
  <li>
    <form action="/livros_marcelomodesto/{{ $livroMarceloModesto->id }} " method="post">
      @csrf
      @method('delete')
      <button type="submit" onclick="return confirm('Tem certeza?');">Apagar</button> 
    </form>
  </li> 
</ul>