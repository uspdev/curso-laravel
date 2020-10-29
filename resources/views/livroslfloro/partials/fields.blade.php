<div class="col-8">
    <strong>{{ $livro->titulo }}</strong>
    <ul>
        <li>{{ $livro->autor }}</li>
        <li>{{ $livro->isbn }}</li>
        <li>{{ $livro->tipo }}</li>
        <li>{{ $livro->preco }}</li>
        <li>Cadastrado por {{ $livro->user->name ?? '' }}</li>
    </ul>
    <p>
        <form action="/livroslfloro/{{ $livro->id }}" method="POST">
            <a class="btn btn-primary" href="/livroslfloro/{{ $livro->id }}/edit"> Editar </a>
            @csrf
            @method ('delete')
            <button class="btn btn-danger" type="submit" onclick="return confirm('Tem certeza?');"> Apagar </button>
        </form>
    </p>
</div>
<hr>
