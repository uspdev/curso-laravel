<ul>
    <li>{{ $livroSaotome->titulo ?? '' }}</li>
    <li>{{ $livroSaotome->autor  ?? '' }}</li>
    <li>{{ $livroSaotome->isbn ?? '' }}</li>
    <li><a href="/livrossaotome/{{$livroSaotome->id}}/edit">Editar</a></li>
    <li>
        <form action="/livrossaotome/{{$livroSaotome->id}}" method="post">
            @csrf
            @method('delete')
            <button type="submit" onclick="return confirm('Tem certeza?');">Apagar</button>
        </form>
    </li>
</ul>