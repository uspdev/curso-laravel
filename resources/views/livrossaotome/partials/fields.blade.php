<div class="card-body">
    <ul class="list-group list-group-flush">
        <li class="list-group-item" ><a href="/livrossaotome/{{$livroSaotome->id}}">{{$livroSaotome->titulo}}</a></li>
        <li class="list-group-item">{{$livroSaotome->autor}}</li>
        <li class="list-group-item isbn">{{$livroSaotome->isbn}}</li>
        <li class="list-group-item"> Cadastrado por: {{ $livroSaotome->user->name ?? '' }}</li>
    </ul>
    </br>
    <div class="col-sm form-group">
        <form action="/livrossaotome/{{$livroSaotome->id}}" method="POST">
            <a class="btn btn-outline-success" href="/livrossaotome/{{$livroSaotome->id}}/edit" role="button">Editar</a>
            @csrf
            @method('delete')
            <button class="btn btn-outline-danger" type="submit" onclick="return confirm('Tem certeza?');">Apagar</button> 
        </form>
    </div>
</div>