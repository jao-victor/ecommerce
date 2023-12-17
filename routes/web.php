<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\HomeController;
use  App\Http\Controllers\ProdutoController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/produtos', [ProdutoController::class, 'index'])->name('produto.index'); //litsar
Route::get('/produtos/create', [ProdutoController::class, 'create'])->name('produto.create'); // formulario para criar
Route::post('/produtos', [ProdutoController::class, 'store'])->name('produto.store'); // cria o objeto no BD
Route::get('/produtos/{produto}', [ProdutoController::class, 'show'])->name('produto.show');
Route::get('/produtos/{produto}/edit', [ProdutoController::class, 'edit'])->name('produto.edit'); // formulario
Route::put('/produtos/{produto}', [ProdutoController::class, 'update'])->name('produto.update'); // atualiza no bd
Route::delete('/produtos/{produto}', [ProdutoController::class, 'destroy'])->name('produto.destroy'); // atualiza no bd





