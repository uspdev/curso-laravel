<ul>
    <li>{{ $livro->titulo ?? '' }}</li>
    <li>{{ $livro->autor ?? '' }}</li>
    <li><a href="/livros_alessandrooliveira/{{ $livro->isbn ?? '' }}">
        {{ $livro->isbn ?? '' }}
    </a></li>
</ul>


