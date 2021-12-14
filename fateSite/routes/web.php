<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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
use App\Http\Controllers\gameController;


// Routes para a página index
Route::get('/', function () {
    return view('index');
})->name('gm.index');
Route::get('delete/{id}', [ImgHomePageController::class, 'destroy']);
Route::get('/', [ImgHomePageController::class, 'index'])->name('index.main');
Route::post('/', [ImgHomePageController::class, 'store'])->name('index.store');
//--------------------


Route::get('/parcerias', function () {
    return view('parcerias');
})->name('gm.parcerias');



Route::get('/email', function () {
    return view('email');
})->name('gm.email');

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

Route::get('/perfil', function () {
    return view('perfil');
})->name('gm.perfil');
Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('index');
Route::get('logout',[HomeController::class, 'flush']);
