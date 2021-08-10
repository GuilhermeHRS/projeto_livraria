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

}
