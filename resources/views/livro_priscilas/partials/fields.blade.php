@if (isset($listar))
    <a href="{{ route('livro_priscilas.index') }}">Início</a>
@endif


<p style="border-style: solid;border-width: thin;">
    @if(isset($apagado))  
    <h1 style="color: red">Registro Abaixo Apagado</h1>
    @endif

    <form action="{{ route('livro_priscilas.destroy', $livro->id ) }}" method="POST" id="apagarLivro">
        <b>Título: </b>{{ $livro->titulo ?? 'Não Encontrado'}}<br/>
        <b>Autor: </b>{{ $livro->autor ?? '' }}<br/>
        <b>ISBN: </b>{{ $livro->isbn ?? '' }}<br/>
        
        @csrf
        @method('DELETE')
        @if(!isset($apagado))
            <a href="{{ route('livro_priscilas.edit', $livro->id) }}">Editar</a>
            <input type="submit" onclick="javascript:return confirm('Tem certeza que deseja apagar o registro?);" value="Apagar"-->
        @endif
    </form>
</p>


