<div class="card-body">
    <ul class="list-group list-group-flush">
        <li class="list-group-item text-uppercase" ><a href="/livrolau/{{$livrolau->id}}">{{$livrolau->titulo}}</a></li>
        <li class="list-group-item"><div class="font-weight-bold">Autor:</div>{{$livrolau->autor}}</li>
        <li class="list-group-item isbn"><div class="font-weight-bold">ISBN:</div>{{$livrolau->isbn}}</li>
        <li class="list-group-item"><div class="font-weight-bold">Cadastrado por:</div>{{ $livro->user->name ?? '' }}</li>
    </ul>
    </br>
    <div class="col-sm form-group">
        <form action="/livrolau/{{$livrolau->id}}" method="POST">
            <a class="btn btn-outline-success" href="/livrolau/{{$livrolau->id}}/edit" role="button">Editar</a>
            @csrf
            @method('delete')
            <button class="btn btn-outline-danger" type="submit" onclick="return confirm('Tem certeza?');">Apagar</button> 
        </form>
    </div>
</div>

