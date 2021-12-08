<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LeituraController;

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
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->group(function(){
    Route::get('/leituras',[LeituraController::class, 'index'])->name('dashboard');

    Route::get('/leituras/adicionar',[LeituraController::class, 'add'])->name('add');
    Route::post('/leituras/adicionar',[LeituraController::class, 'salvar'])->name('salvar');

    Route::get('/edit/{leitura}',[LeituraController::class, 'edit'])->name('edit');
    Route::post('/edit/{leitura}',[LeituraController::class, 'update'])->name('update');
    
    Route::delete('/leituras/{leitura}',[LeituraController::class, 'destroy'])->name('delete');

});
