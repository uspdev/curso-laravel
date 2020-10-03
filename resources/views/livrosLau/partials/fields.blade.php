<div class="card-body">
    <ul class="list-group list-group-flush">
        <li class="list-group-item" ><a href="/livrolau/{{$livrolau->id}}">{{$livrolau->titulo}}</a></li>
        <li class="list-group-item">{{$livrolau->autor}}</li>
        <li class="list-group-item isbn">{{$livrolau->isbn}}</li>
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

