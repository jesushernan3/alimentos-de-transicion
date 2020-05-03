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
    return view('home');
});
Route::get('/productos', function () {
    return view('productos');
});
Route::get('/acerca', function () {
    return view('acerca');
});
Route::get('/contacto', function () {
    return view('contacto');
});

// Ruta a productos

Route::get('/productos/medallones-garbanzos', function () {
    return view('productos/medallones/medallones-garbanzos');
});
Route::get('/productos/medallones/garbanzocurry', function () {
    return view('productos/medallones/garbanzos/01-garbanzo');
});