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

Route::get('/', function () {
    return view('index');
})->name('gm.index');
Route::post('/', [ImgHomePageController::class, 'store'])->name('index.store');



Route::get('/parcerias', function () {
    return view('parcerias');
})->name('gm.parcerias');

Route::get('/contactos', function () {
    return view('contactos');
})->name('gm.contactos');

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