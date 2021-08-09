<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use function redirect;
use function view;
use App\Models\Livro;

class LivroController extends Controller
{
    function index() {
        $livros=Livro::all();
        return view('livro.index', compact('livros'));
    }

    function create() {
        return view('livro.create');

    }

    public function store(Request $request) {
        Livro::create($request->all());
        
        // return view
    }

}
