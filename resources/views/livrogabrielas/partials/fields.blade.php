<table class="table">
  <thead>
    <tr class="table-info">
      <th scope="col">ID</th>
      <th scope="col">Titulo</th>
      <th scope="col">Autor</th> 
      <th scope="col">ISBN</th>
      <th scope="col">Preço</th>
      <th scope="col">Editar</th>
      <th scope="col">Apagar</th>   
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">{{ $livrogabriela->id ?? '' }}</th>
      <td>{{ $livrogabriela->titulo ?? '' }}</td>
      <td>{{ $livrogabriela->autor ?? '' }}</td>
      <td>{{ $livrogabriela->isbn ?? '' }}</td>
      <td>{{ $livrogabriela->preco ?? '' }}</td>
      <td><a href="/livrogabrielas/{{$livrogabriela->id}}/edit">editar</a></td>
      <form action="/livrogabrielas/{{ $livrogabriela->id }} " method="post">
        @csrf
        @method('delete')
      <td><button type="submit" onclick="return confirm('Tem certeza?');">Apagar</button></td> 
      </form>
    </tr>
    <td> Cadastrado por: {{ $livro->user->name ?? '' }}</td>
  </tbody>
</table>