<h1>Editar produto {{$livro->titulo}}</h1>
@if ($errors->any())

<ul>
    @foreach ($errors->all() as $error)
    <li>{{$error}}</li>
    @endforeach
</ul>

@endif
<form action="{{route('livro.update', $livro->id)}}" method="post">
    @method('put')
    @csrf 
    <p>Titulo: <input type="text" name="titulo" id="titulo" placeholder="Título" value="{{$livro->titulo}}"></p>
    <p>Autor: <input type="text" name="autor" id="autor" placeholder="Autor" value="{{$livro->autor}}"></p>
    <p>Idioma: <input type="text" name="idioma" id="idioma" placeholder="Idioma" value="{{$livro->idioma}}"></p>
    <p>Pais: <input type="text" name="pais" id="pais" placeholder="Pais" value="{{$livro->pais}}"></p>
    <p>Ano: <input type="text" name="ano" id="ano" placeholder="Ano" value="{{$livro->ano}}"></p>
    <button type="submit">Enviar</button>
</form>