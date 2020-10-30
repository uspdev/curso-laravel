<div class="card-body">
    <ul class="list-group">
        <li class="list-group-item text-uppercase" ><a href="/livrolau/{{$livrolau->id}}">{{$livrolau->titulo}}</a></li>
        <li class="list-group-item"><div class="font-weight-bold">Autor:</div>{{$livrolau->autor}}</li>
        <li class="list-group-item isbn"><div class="font-weight-bold">ISBN:</div>{{$livrolau->isbn}}</li>
        <li class="list-group-item"><div class="font-weight-bold">Cadastrado por:</div>{{ $livrolau->user->name ?? '' }}</li>
        <li class="list-group-item"><div class="font-weight-bold">Tipo:</div>{{$livrolau->tipo}}</li>
        <li class="list-group-item"><div class="font-weight-bold">Preço:</div>{{$livrolau->preco}}</li>
    </ul>
    </br>
    @can('admin')
    <div class="form-group">
        <form action="/livrolau/{{$livrolau->id}}" method="POST">
            <a class="btn btn-outline-success" href="/livrolau/{{$livrolau->id}}/edit" role="button">Editar</a>
            @csrf
            @method('delete')
            <button class="btn btn-outline-danger" type="submit" onclick="return confirm('Tem certeza?');">Apagar</button> 
        </form>
    </div>
    @endcan
</div>

