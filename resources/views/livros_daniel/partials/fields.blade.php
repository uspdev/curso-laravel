<ul class="list-group col-3">
    <li class="list-group-item active">{{ $livro->titulo ?? '' }}</li>
    <li class="list-group-item">Autor: {{ $livro->autor ?? '' }}</li>
    <li class="list-group-item">ISBN: {{ $livro->isbn ?? '' }}</li>
    <li class="list-group-item">Cadastrado por {{ $livro->user->name ?? '' }}</li>
    <li class="list-group-item">
        <ul class="list-inline">
            <li class="list-inline-item"><a class="btn btn-sm btn-warning" href="/livros_daniel/{{$livro->id}}/edit"><i class="fa fa-pencil-square" aria-hidden="true"></i> Editar</a></li>
            <li class="list-inline-item">
                <form action="/livros_daniel/{{$livro->id}}" method="post">
                    @csrf
                    @method('delete')
                    <button class="btn btn-sm btn-danger" type="submit" onclick="return confirm('Tem certeza?');"> <i class="fa fa-trash" aria-hidden="true"></i> Apagar</button>
                </form>
            </li>
        </ul>
    </li>
</ul>