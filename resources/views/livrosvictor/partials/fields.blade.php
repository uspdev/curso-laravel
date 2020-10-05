<ul>
    <li><a href="/livrosvictor/{{$livrovictor->id}}">{{ $livrovictor->titulo ?? 'Livro não encontrado' }}</a></li>
    <li>{{ $livrovictor->autor  ?? 'Livro não encontrado' }}</li>
    <li>{{ $livrovictor->isbn ?? 'Livro não encontrado' }}</li>
    <li><a href="/livrosvictor/{{$livrovictor->id}}/edit">Editar</a></li>
    <li>
        <form action="/livrosvictor/{{ $livrovictor->id }} " method="post">
        @csrf
        @method('delete')
        <button type="submit" onclick="return confirm('Tem certeza?');">Apagar</button> 
        </form>
    </li> 
</ul>