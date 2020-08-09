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
// ·········································· medallones - Garbanzos
Route::view('productos/medallones-de-garbanzos', 'productos.medallones.medallones-garbanzos');
    Route::view('/productos/medallones/garbanzoycurry', 'productos.medallones.garbanzos.01-garbanzo');
    Route::view('/productos/medallones/garbanzoycalabaza', 'productos.medallones.garbanzos.02-garbanzo');
    Route::view('/productos/medallones/garbanzoybasmati', 'productos.medallones.garbanzos.03-garbanzo');
    Route::view('/productos/medallones/garbanyespecias', 'productos.medallones.garbanzos.04-garbanzo');

// ·········································· medallones - Arroz
Route::view('/productos/medallones-arroz', 'productos.medallones.medallones-arroz');
    Route::view('/productos/medallones/arrozyporotos', 'productos.medallones.arroz.01-arroz');
    Route::view('/productos/medallones/arrozycurry', 'productos.medallones.arroz.02-arroz');
    Route::view('/productos/medallones/arrozymijo', 'productos.medallones.arroz.03-arroz');
    Route::view('/productos/medallones/arrozepsciales', 'productos.medallones.arroz.04-arroz');

// ·········································· medallones - Lentejas
Route::view('/productos/medallones-lentejas', 'productos.medallones.medallones-lentejas');
    Route::view('productos/medallones/lentajapura', 'productos.medallones.lentejas.01-lentejas');
    Route::view('/productos/medallones/lentejayverdeo', 'productos.medallones.lentejas.02-lentejas');
    Route::view('/productos/medallones/lentejaycurry', 'productos.medallones.lentejas.03-lentejas');
    Route::view('/productos/medallones/lentejayespecias', 'productos.medallones.lentejas.04-lentejas'); 

// ·········································· medallones - Variedades
Route::view('/productos/medallones-variedades', 'productos.medallones.medallones-variedades');
    Route::view('/productos/medallones/brocoli', 'productos.medallones.variedades.01-variedades');
    Route::view('/productos/medallones/calabaza', 'productos.medallones.variedades.02-variedades');
    Route::view('/productos/medallones/verduras', 'productos.medallones.variedades.03-variedades');
    Route::view('/productos/medallones/zanahoria', 'productos.medallones.variedades.04-variedades');
        

// ·········································· medallones - Especiales
Route::view('/productos/medallones-especiales', 'productos/medallones/medallones-especiales');
Route::view('/productos/medallones/arrozpuro', 'productos/medallones/especiales/01-especiales');

// ·········································· GALLETAS - chocolate
Route::view('/productos/galletas/con-chocolate', '/productos/galletas/galletas-con-chocolate');
    Route::view('/productos/galletas/tipo-moffin', '/productos/galletas/con-chocolate/01-galletatipomofin');