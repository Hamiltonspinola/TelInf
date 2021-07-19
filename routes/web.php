<?php

use App\Http\Controllers\CadastroClienteController;
use App\Http\Controllers\UserController;
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

Route::middleware(['auth'])->group(function(){

    Route::get('/cadastro.cliente.index', [CadastroClienteController::class, 'index'])->name('dashboard');
    Route::get('dados.cliente.edit/{id}', [CadastroClienteController::class, 'edit'])->name('cliente.edit');
    Route::put('dados.cliente.update/{id}', [CadastroClienteController::class, 'update'])->name('cliente.update');
    Route::get('dados.cliente.show', [CadastroClienteController::class, 'show'])->name('cliente.show');
    Route::delete('dados.cliente.destroy/{id}', [CadastroClienteController::class, 'destroy'])->name('cliente.destroy');
    Route::get('/cadastro.cliente.create', [CadastroClienteController::class, 'create'])->name('cliente.create');  
    Route::post('/cadastro.cliente.create', [CadastroClienteController::class, 'store'])->name('cliente.store');

    Route::get('user/edit/{id}', [UserController::class, 'edit'])->name('user.edit');
    Route::put('user/update/{id}', [UserController::class, 'update'])->name('user.update');
    Route::get('user/show/{id}', [UserController::class, 'show'])->name('user.show');
    Route::delete('user/destroy/{id}', [UserController::class, 'destroy'])->name('user.destroy');
});



Route::get('/', function () {
    return view('welcome');

});

// Route::get('/cadastro-cliente', function () {
//     return view('dashboard');
// })->middleware(['auth']);

require __DIR__.'/auth.php';
