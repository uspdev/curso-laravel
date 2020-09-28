<table class="table table-striped table-bordered table-hover">
  <thead>
    <th scope="col">Título</th>
    <th scope="col">Autor</th>
    <th scope="col">ISBN</th>
  </thead>
  <tbody>
    @forelse($livros as $livro)
        <tr>
            <td>{{ $livro->titulo ?? '' }}</td>
            <td>{{ $livro->autor ?? '' }}</td>
            <td>
                <a href="/livros-ricardo/{{ $livro->isbn ?? '' }}">
                    {{ $livro->isbn ?? '' }}
                </a>
            </td>
        </tr>
    @empty
        <td colspan="3">
        Não há livros cadastrados nesses sistema ainda!
        </td>
    @endforelse
  </tbody>
  
</table>

