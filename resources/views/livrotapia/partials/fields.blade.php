<ul>
    <li> {{ $livro->titulo ?? '' }} </li>
    <li> {{ $livro->autor ?? '' }} </li>
    <li> {{ $livro->isbn ?? '' }} </li>
    <li><a href="/livrostapia/{{$livro->id}}">Show</a></li>
    <li><a href="/livrostapia/{{$livro->id}}/edit">Editar</a></li>
    <li>
    <form action="/livrostapia/{{ $livro->id }}" method="post">
        @csrf
        @method('delete')
        <button type="submit" onclick="return confirm('Tem certeza?');">Apagar</button>
    </form>
    </li>
    <li> Cadastrado por: {{ $livro->user->name ?? '' }}</li>
</ul>