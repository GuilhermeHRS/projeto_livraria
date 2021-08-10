<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use function redirect;
use function view;
use App\Models\Livro;
use App\Http\Requests\StoreUpdateLivro;

class LivroController extends Controller
{
    function index() {
        $livros=Livro::all();
        return view('livro.index', compact('livros'));
    }

    function create() {
        return view('livro.create');

    }

    public function store( StoreUpdateLivro $request) {
        Livro::create($request->all());
        
        return redirect()->route('livro.index'); 
    }

    public function show($id) {
        $livro = Livro::find($id);
        
        if(!$livro) {
            return redirect()->route('livro.index')
            ->route('livro.index')
            ->with('message', 'Livro não encontrado');
        }
        return view('livro.show', compact('livro'));
    }

    public function destroy($id) {
        $livro = Livro::find($id);
        
        if(!$livro) {
            return redirect()
            ->route('livro.index')
            ->with('message', 'Livro não encontrado');
        }
        $livro->delete();
        return redirect()
            ->route('livro.index')
            ->with('message', 'Livro deletado');
    
    }

    public function edit($id) {
        $livro = Livro::find($id);
        
        if(!$livro) {
            return redirect()->route('livro.index')
            ->route('livro.index')
            ->with('message', 'Livro não encontrado');
        }
        return view('livro.edit', compact('livro'));

    }

    public function update(StoreUpdateLivro $request, $id) {
        $livro = Livro::find($id);
        if(!$livro) {
            return redirect()->route('livro.index')
            ->route('livro.index')
            ->with('message', 'Livro não encontrado');
        }
        $livro->update($request->all());

        return redirect()
            ->route('livro.index')
            ->with('message', 'Livro editado!');
    }

}
