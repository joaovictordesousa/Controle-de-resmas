<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Htpp\Request;
use App\Http\Controllers\cadastro;
use App\Http\Controllers\DocumentoController;
use App\Http\Controllers\historico;
use App\Http\Controllers\relatorio;
use App\Http\Controllers\PDFController;
use App\Http\Controllers\SolicitacaoController;
use App\Models\Solicitacao;
use App\Http\Controllers\ImpressoesController;
<<<<<<< HEAD
use App\Http\Controllers\Teste;
use App\Http\Controllers\historico_impressaoController;
=======
>>>>>>> 92904128c4fb145368fa583b39d0c77e74da842b

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

Route::group(['middleware' => ['auth.session']], function() {

    Route::get('/', [historico::class, 'show'])->middleware(['auth'])
    ->name('historico');
  Route::get('/buscar', [historico::class, 'index'])->name('buscar');

   Route::get('/cadastro', [cadastro::class, 'cadastro']);

   Route::post('/cadastro', [cadastro::class, 'cadastro']);

  // Route::get('/', [historico::class, 'show'])->name('historico');

  //Rota criar setor

   Route::post('/cadastro-setor', [SolicitacaoController::class, 'store'])
   ->name('criar-solicitacao');

  Route::get('/relatorio', [relatorio::class, 'relatorio'])
  ->name('relatorio');

  Route::get('/generate-pdf', [relatorio::class, 'Docs'])
  ->name('gera-pdf');

  Route::get('/search', [historico::class, 'ajax'])
  ->name('posts.search');


  //Route::any('/', [historico::class, 'search'])
  //->name('historico');
<<<<<<< HEAD
 
  // criar rotas de impressao desde cadastro ao historico
  Route::get('/criar-impressao', [ImpressoesController::class, 'index']);
 
  Route::post('/criar-impressao', [ImpressoesController::class, 'store']);
  //->name('criar-impressao' ,function () {
  //  return view('historico-impressao');});

// 

  Route::get('/historico-impressoes', [historico_impressaoController::class,'show'])
      ->name('histori', function () {
    return view('historico-impressao');});
=======

  Route::get('/criar-impressao', [ImpressoesController::class, 'index'] ,function () {
    return view('cadastro');});

  Route::post('/criar-impressao', [ImpressoesController::class, 'store'])
  ->name('cadastro-de-impressao');
>>>>>>> 92904128c4fb145368fa583b39d0c77e74da842b

require __DIR__.'/auth.php';

  });
