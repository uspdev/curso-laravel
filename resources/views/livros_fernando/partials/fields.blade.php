<ul>
    <li>{{ $livro->titulo ?? '' }}</li>
    <li>{{ $livro->autor ?? ''}}</li>
    <li>{{ $livro->isbn ?? ''}}</li>
    <li><a href="/livros_fernando/{{ $livro->id }}/edit">Editar</a></li>
    <form action="/livros_fernando/{{ $livro->id }}" method="post">
        @csrf
        @method('delete')
        <button type="submit" onclick="return confirm('Tem certeza?');">Apagar</button>
    </form>
</ul>