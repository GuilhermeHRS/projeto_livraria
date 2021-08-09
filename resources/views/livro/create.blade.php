<h1> Cadastrar novo livro </h1>

<div>
    <form method="POST" action="{{route('livro.store')}}">
        @csrf
            <p>Título:<input type="text" name="titulo" id="titulo" placeholder="titulo" value="{{old('titulo')}}"></p>
            <p>Autor:<input type="text" name="autor" id="autor" placeholder="autor" value="{{old('autor')}}"></p>
            <p>Idioma:<input type="text" name="idioma" id="idioma" placeholder="idioma" value="{{old('idioma')}}"></p>
            <p>País:<input type="text" name="pais" id="pais" placeholder="pais" value="{{old('pais')}}"></p>
            <p>Ano:<input type="text" name="ano" id="ano" placeholder="ano" value="{{old('titulo')}}"></p>
            <p><button type="submit">Enviar</button></p>
    </form>
</div>
