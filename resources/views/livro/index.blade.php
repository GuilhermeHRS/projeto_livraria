<h1> Lista de livros </h1>

@foreach ($livros as $livro)
<p> {{ $livro->titulo}} </p>
@endforeach