<?php

use App\http\Controllers\UserController;
use App\http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\http\Controllers\TipoPasseController;

Route::get('/', function () {
    return view('welcome');
})->name('dashboard');

//Tela Login
Route:: get('/login', [AuthController::class, 'index'])->name('login');

//Processar os dados de login
Route:: post('/login', [AuthController::class, 'loginProcess'])->name('login.process');

//logout
Route:: get('/logout', [AuthController::class, 'logout'])->name('logout');

//'/show-user/{user}' : é como aparece no browser
// 'show' : é o método dentro de UserController
//'user.show' : nome da rota ao ser linkado

Route::group(['middleware'=>'auth'], function()
{
//O utilizador precisa estar logado para acessar as rotas abaixo
Route:: get('/index-user', [UserController::class, 'index'])->name('user.index');
Route:: get('/show-user/{user}', [UserController::class, 'show'])->name('user.show');

Route:: get('/create-user', [UserController::class, 'create'])->name('user.create');
Route:: post('/store-user', [UserController::class, 'store'])->name('user.store');

Route:: get('/edit-user/{user}', [UserController::class, 'edit'])->name('user.edit');
Route:: put('/update-user/{user}', [UserController::class, 'update'])->name('user.update');

Route:: get('/edit-user-password/{user}', [UserController::class, 'editPassword'])->name('user.edit-password');
Route:: get('/update-user-password/{user}', [UserController::class, 'updatePassword'])->name('user.update-password');
Route:: delete('/destroy-user/{user}', [UserController::class, 'destroy'])->name('user.destroy');

Route:: get('/generate-pdf/{user}', [UserController::class, 'generatePdf'])->name('user.generate-pdf');

//Route::resource('tipo_passes', TipoPasseController::class);
Route:: get('/tipo_passes', [TipoPasseController::class, 'index'])->name('tipo_passes.index');


});