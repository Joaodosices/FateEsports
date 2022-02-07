<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
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

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ImgHomePageController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\GameController;
use App\Http\Controllers\PartnerController; 
use App\Http\Controllers\PerfilController;
use App\Http\Controllers\JogoEquipaController;

// Routes para a página index
Route::get('/', function () {
    return view('index');
})->name('gm.index');
Route::get('delete/{id}', [ImgHomePageController::class, 'destroy']);
Route::get('/', [ImgHomePageController::class, 'index'])->name('index.main');
Route::post('/', [ImgHomePageController::class, 'store'])->name('index.store');

// Route para equipa de X jogo

Route::get('/jogos/{id_game}/equipa', [JogoEquipaController::class, 'show']);
Route::post('/jogos/filtrar/equipa', [JogoEquipaController::class, 'updateGame'])->name('team.filter');
//--------------------


Route::get('/parcerias', function () {
    return view('parcerias');
})->name('gm.parcerias');

// Route::get('/jogos', function () {
//     return view('jogos');
// })->name('gm.jogos');


Route::get('/jogos', [GameController::class, 'index'])->name('games.index');

Route::get('/email/{contact}', [ContactController::class, 'email'])->name('gm.email');
Route::post('/email', [ContactController::class, 'sendEmail'])->name('gm.sendEmail');
Route::get('/parcerias', [PartnerController::class, 'index'])->name('partner.index');

//Rota parcerias para eliminar dados
Route::get('parcerias/delete/{id}', [PartnerController::class, 'destroy']);

//Rota para form CONTACTOS
Route::get('/contactos', function () {
    return view('contactos');
})->name('gm.contactos');

//Rota para submeter form CONTACTOS
Route::get('contactos/delete/{id}', [ContactController::class, 'destroy']);
Route::get('/contactos', [ContactController::class, 'index'])->name('contacts.index');
Route::post('/contactos', [ContactController::class, 'store'])->name('contacts.store');

Route::get('/sobre', function () {
    return view('sobre');
})->name('gm.sobre');

Route::get('/sobre', [AdminController::class, 'index'])->name('admins.index');

//Rota eleminar admins sobre
Route::get('sobre/delete/{id}', [AdminController::class, 'destroy']);

//Rota do Perfil
Route::get('/perfil', function () {
    return view('perfil');
})->name('gm.perfil');
Route::get('/perfil', [PerfilController::class, 'index'])->name('perfil.index');
Route::post('/perfil', [PerfilController::class, 'update'])->name('perfil.update');

//Rota perfil para eliminar utilizador
Route::get('utilizadores/delete/{id}', [PerfilController::class, 'destroy']);

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('index');
Route::get('logout',[HomeController::class, 'flush']);

//Rota perfil para alterar a password
Route::get('/perfil/password', [App\Http\Controllers\PerfilController::class, 'showChangePasswordGet'])->name('changePasswordGet');
Route::post('/perfil/password', [App\Http\Controllers\PerfilController::class, 'changePasswordPost'])->name('changePasswordPost');

