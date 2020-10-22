<p>
    <b>Título: </b>{{ $livroedmar->titulo ?? 'Não Encontrado'}}<br/>
    <b>Autor: </b>{{ $livroedmar->autor ?? '' }}<br/>
    <b>ISBN: </b>{{ $livroedmar->isbn ?? '' }}<br/>
    <a href="/livroedmar/{{$livroedmar->id}}/edit">Editar</a>
    <form action="/livroedmar/{{ $livroedmar->id }} " method="post">
        @csrf
        @method('delete')
        <button type="submit" onclick="return confirm('Tem certeza?');">Apagar</button>
    </form>
</p>
