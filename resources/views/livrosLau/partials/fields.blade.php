<div class="card-body">
    <ul class="list-group list-group-flush">
        <li class="list-group-item" ><a href="/livros_lau/{{$livrolau->id}}">{{ $livrolau->titulo }}</a></li>
        <li class="list-group-item">{{ $livrolau->autor }}</li>
        <li class="list-group-item">{{ $livrolau->isbn }}</li>
    </ul>
    </br>
    <div class="col-sm form-group">
        <form action="/livros_lau/{{$livrolau->id}} " method="POST">
            <a class="btn btn-success" href="/livros_lau/{{$livrolau->id}}/edit" role="button">Editar</a>
            @csrf
            @method('delete')
            <button class="btn btn-success" type="submit" onclick="return confirm('Tem certeza?');">Apagar</button> 
        </form>
    </div>
</div>