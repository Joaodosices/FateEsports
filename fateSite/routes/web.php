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

Route::get('/', function () {
    return view('index');
})->name('gm.index');

Route::get('/parcerias', function () {
    return view('parcerias');
})->name('gm.parcerias');

//Rota para form CONTACTOS
Route::get('/contactos', function () {
    return view('contactos');
})->name('gm.contactos');

//Rota para submeter form CONTACTOS
Route::post('/contactos', [ContactController::class, 'store'])->name('contacts.store');

//BACKOFFICE: Rota para CONTACTOS 
Route::get('/admin/contactos', [ContactController::class, 'index'])->name('contacts.index');

Route::get('/sobre', function () {
    return view('sobre');
})->name('gm.sobre');

Route::get('/perfil', function () {
    return view('perfil');
})->name('gm.perfil');
Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('index');
Route::get('logout',[HomeController::class, 'flush']);
