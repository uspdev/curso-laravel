<table class="table table-striped table-bordered table-hover">
  <thead>
    <th scope="col">Título</th>
    <th scope="col">Autor</th>
    <th scope="col">ISBN</th>
    <th scope="col">Ação</th>
  </thead>
  <tbody>
    @forelse($livros as $livro)
        <tr>
            <td>{{ $livro->titulo ?? '' }}</td>
            <td>{{ $livro->autor ?? '' }}</td>
            <td class="isbn">{{ $livro->isbn ?? '' }}</td>
            <td>
                <a class="btn btn-primary" href="/livros-ricardo/{{ $livro->id ?? '' }}">
                    Ver
                </a>
                <a class="btn btn-warning" href="/livros-ricardo/{{ $livro->id ?? '' }}/edit">
                    Editar
                </a>
                <form action="/livros-ricardo/{{$livro->id}}" method="post" class="d-inline-block">
                    @csrf
                    @method('delete')
                    <button type="submit" onclick="return confirm('Tem certeza?');" class="btn btn-danger ">Deletar</button>
                </form>
            </td>
        </tr>
    @empty
        <td colspan="3">
        Não há livros cadastrados nesses sistema ainda!
        </td>
    @endforelse
  </tbody>
  
</table>







