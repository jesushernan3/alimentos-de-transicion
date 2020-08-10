<?php

use App\Http\Controllers\FormularioDeContacto;
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

Route::view('/', 'home')->name('home');
Route::view('productos', 'productos')->name('productos');
Route::view('acerca', 'acerca')->name('acerca');
Route::view('preguntas-frecuentes', 'atencion/preguntas-frecuentes')->name('preguntas-frecuentes');

Route::view('/contacto', 'FormularioDeContacto@Formulario');

// RUTA A PRODUCTOS
// ·········································· MEDALLONES - Garbanzos
Route::view('productos/medallones-de-garbanzos', 'productos.medallones.medallones-garbanzos')->name('medallones-de-garbanzos');
    Route::view('productos/medallones/garbanzo-clasico', 'productos.medallones.garbanzos.01-garbanzo-clasico')->name('garbanzo-clasico');
    Route::view('productos/medallones/garbanzo-criollo', 'productos.medallones.garbanzos.02-garbanzo-criollo')->name('garbanzo-criollo');
    Route::view('productos/medallones/garbanzo-con-calabaza', 'productos.medallones.garbanzos.03-garbanzo-calabaza')->name('garbanzo-con-calabaza');
    Route::view('productos/medallones/garbanzo-picante', 'productos.medallones.garbanzos.04-garbanzo-picante')->name('garbanzo-picante');

// ·········································· MEDALLONES - Arroz
Route::view('/productos/medallones-de-arroz', 'productos.medallones.medallones-arroz')->name('medallones-de-arroz');
    Route::view('/productos/medallones/arrozyporotos', 'productos.medallones.arroz.01-arroz');
    Route::view('/productos/medallones/arrozycurry', 'productos.medallones.arroz.02-arroz');
    Route::view('/productos/medallones/arrozymijo', 'productos.medallones.arroz.03-arroz');
    Route::view('/productos/medallones/arrozepsciales', 'productos.medallones.arroz.04-arroz');

// ·········································· MEDALLONES - Lentejas
Route::view('/productos/medallones-de-lentejas', 'productos.medallones.medallones-lentejas')->name('medallones-de-lenteja');
    Route::view('productos/medallones/lentajapura', 'productos.medallones.lentejas.01-lentejas');
    Route::view('/productos/medallones/lentejayverdeo', 'productos.medallones.lentejas.02-lentejas');
    Route::view('/productos/medallones/lentejaycurry', 'productos.medallones.lentejas.03-lentejas');
    Route::view('/productos/medallones/lentejayespecias', 'productos.medallones.lentejas.04-lentejas'); 

// ·········································· MEDALLONES - Variedades
Route::view('/productos/medallones-de-variedades', 'productos.medallones.medallones-variedades')->name('medallones-de-variedades');
    Route::view('/productos/medallones/brocoli', 'productos.medallones.variedades.01-variedades');
    Route::view('/productos/medallones/calabaza', 'productos.medallones.variedades.02-variedades');
    Route::view('/productos/medallones/verduras', 'productos.medallones.variedades.03-variedades');
    Route::view('/productos/medallones/zanahoria', 'productos.medallones.variedades.04-variedades');
        

// ·········································· MEDALLONES - Especiales
Route::view('/productos/medallones-especiales', 'productos.medallones.medallones-especiales');
Route::view('/productos/medallones/arrozpuro', 'productos.medallones.especiales.01-especiales');

// ·········································· GALLETAS - chocolate
Route::view('/productos/galletas/con-chocolate', 'productos.galletas.galletas-con-chocolate');
    Route::view('/productos/galletas/tipo-moffin', 'productos.galletas.con-chocolate.01-galletatipomofin');

// ·········································· BUDINES
Route::view('productos/budines', 'productos.budines.budines')->name('budines');
