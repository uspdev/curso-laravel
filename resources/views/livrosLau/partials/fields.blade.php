<ul class="list-group list-group-flush">
    <li class="list-group-item" href="/livros_lau/{isbn}">{{ $livro->titulo ?? '' }}</li>
    <li class="list-group-item">{{ $livro->autor  ?? '' }}</li>
    <li class="list-group-item">{{ $livro->isbn ?? '' }}</li>
</ul>