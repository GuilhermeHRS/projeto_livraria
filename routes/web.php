<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return "Em construção";
   // return view('welcome');
});

// ROTAS PARA LIVRO
use App\Http\Controllers\LivroController;
Route::get('/livro', [LivroController::class, 'index'])->name('livro.index');

Route::get('/livro/create', [LivroController::class, 'create'])->name('livro.create');
Route::post('/livro/store', [LivroController::class, 'store'])->name('livro.store');

Route::get('/livro/{id}', [LivroController::class, 'show'])->name('livro.show');
Route::delete('/livro/{id}', [LivroController::class, 'destroy'])->name('livro.destroy');

Route::get('/livro/edit/{id}', [LivroController::class, 'edit'])->name('livro.edit');
Route::put('/livro/update/{id}', [LivroController::class, 'update'])->name('livro.update');




// Route::delete('/info', function (){
//     return phpinfo();
// });

// Route::match(['get', 'post'], '/testematch', function (){
//     if (Request::isMethod('post')){
//         return'Verbo post';
//     }
//     return 'outro verbo';
// });

// Route::any('/testeany', function (){
//     return 'Acesso negado';
// });

// Route::get('/contato/{id}/{nome?}', function($id=0, $nome='desconhecido'){
//     return 'O usuário' . $id . 'se chama ' . $nome;
// });
