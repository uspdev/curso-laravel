<ul class="list-group">
    <li class="list-group-item"><b>Título:</b> <a href="/livrosvictor/{{$livrovictor->id}}">{{ $livrovictor->titulo ?? 'Livro não encontrado' }}</a></li>
    <li class="list-group-item"><b>Autor:</b> {{ $livrovictor->autor  ?? 'Livro não encontrado' }}</li>
    <li class="list-group-item"><b>ISBN:</b> {{ $livrovictor->isbn ?? 'Livro não encontrado' }}</li>
    <li class="list-group-item"><b>Procedência:</b> {{ $livrovictor->tipo ?? 'Livro não encontrado' }}</li>
    <li class="list-group-item"><b>Preço:</b> R$ {{ $livrovictor->preco ?? 'Livro não encontrado' }}</li>
    @can('admin')
    <li class="list-group-item">
        <div class="row">
            <div class="col-auto">
                <a href="/livrosvictor/{{$livrovictor->id}}/edit" class="btn btn-warning">Editar</a>
            </div>
            <div class="col-auto">
                <form action="/livrosvictor/{{ $livrovictor->id }} " method="post">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Tem certeza?');">Apagar</button> 
                </form>
            </div>
        </div>
    </li>
    @endcan
    <li class="list-group-item">Cadastrado por <b>{{ $livrovictor->user->name ?? '' }}</b></li> 
</ul>