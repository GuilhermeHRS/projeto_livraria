<h1> Lista de livros </h1>
<a href="{{route('livro.create')}}">Criar novo livro</a>
<hr>
@if (session('message'))
<div>
    {{session('message')}}
</div>
@endif

@foreach ($livros as $livro)
<p> {{ $livro->titulo}} 
    <a href="{{route('livro.show', $livro->id)}}">[Ver detalhes] </a>
    <a href="{{route('livro.edit', $livro->id)}}"> [Editar]</a>
</p>
@endforeach


