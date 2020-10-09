<ul>
    <li>{{ $livro->titulo }}</li>
    <li>{{ $livro->autor }}</li>
    <li>{{ $livro->isbn }}</li>
    <li><a href="/livroslfloro/{{ $livro->id }}/edit"> Editar </a></li>
    <li>
        <form action="/livroslfloro/{{ $livro->id }}" method="POST">
            @csrf
            @method ('delete')
            <button type="submit" onclick="return confirm('Tem certeza?');"> Apagar </button>
        </form>
    </li>
</ul>
