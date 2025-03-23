<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EspacoController;

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
    return view('home');
})->name('home');

route::get('/inscricoes',function(){
    return view('inscricoes');
})->name('inscricoes');
route::get('/espaco/atividade/{id}', [EspacoController::class,'listarAtividades'])->name('atividade.create');

Route::post('/espaco/atividade/{id}',[EspacoController::class,'AdicionarAtividade'])->name('atividade.adicionar');

Route::delete('/espaco/atividade/{id}/{espaco}', [EspacoController::class,'deletarAtividade'])->name('atividade.delete');

Auth::routes();

Route::resource('espaco', EspacoController::class)->middleware('auth');

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::redirect('/bd', '/PhpMyAdmin/index.php', 301)->name('bd');