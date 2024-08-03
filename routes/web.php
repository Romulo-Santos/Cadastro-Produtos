<?php
use App\Http\Controllers\ProdutosController;
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





Route::get('/produtos/adicionar', [ProdutosController::class, 'adicionar'])->name('produtos.adicionar');
Route::post('/produtos', [ProdutosController::class, 'guardar'])->name('produtos.guardar');
Route::get('/produtos', [ProdutosController::class, 'index'])->name('produtos.index');
