<?php

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

Route::get('/', function () {
    return view('index');
})->name('gm.index');

Route::get('/parcerias', function () {
    return view('parcerias');
})->name('gm.parcerias');

Route::get('/contactos', function () {
    return view('contactos');
})->name('gm.contactos');

Route::get('/sobre', function () {
    return view('sobre');
})->name('gm.sobre');

Route::get('/perfil', function () {
    return view('perfil');
})->name('gm.perfil');