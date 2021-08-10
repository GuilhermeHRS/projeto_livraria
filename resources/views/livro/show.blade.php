<h1>Detalhes do livro <strong>{{$livro->titulo}}</strong></h1>

<ul>
    <li><strong>Autor: </strong>{{$livro->autor}}</li>
    <li><strong>Idioma: </strong>{{$livro->idioma}}</li>
    <li><strong>Pais: </strong>{{$livro->pais}}</li>
    <li><strong>Ano: </strong>{{$livro->ano}}</li>
</ul>

<form action="{{route('livro.destroy', $livro->id)}}" method="post">
    @csrf
    <input type="hidden" name="_method" value="DELETE">
    <button type="submit">Deletar o livro: {{$livro->titulo}} </button>
</form>