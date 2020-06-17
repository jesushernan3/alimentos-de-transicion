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

Route::get('/', function () {
    return view('home');
});
Route::get('/productos', function () {
    return view('productos');
});
Route::get('/acerca', function () {
    return view('acerca');
});
// Route::get('/contacto', function () {
//     return view('contacto');
// });
Route::get('/contacto', 'FormularioDeContacto@Formulario');

// Ruta a productos
// ·········································· medallones - Garbanzos
Route::get('/productos/medallones-garbanzos', function () {
    return view('productos/medallones/medallones-garbanzos');
});
    Route::get('/productos/medallones/garbanzoycurry', function () {
        return view('productos/medallones/garbanzos/01-garbanzo');
    });
    Route::get('/productos/medallones/garbanzoycalabaza', function () {
        return view('productos/medallones/garbanzos/02-garbanzo');
    });
    Route::get('/productos/medallones/garbanzoybasmati', function () {
        return view('productos/medallones/garbanzos/03-garbanzo');
    });
    Route::get('/productos/medallones/garbanyespecias', function () {
        return view('productos/medallones/garbanzos/04-garbanzo');
    });

// ·········································· medallones - Arroz

Route::get('/productos/medallones-arroz', function () {
    return view('productos/medallones/medallones-arroz');
});
    Route::get('/productos/medallones/arrozyporotos', function () {
        return view('productos/medallones/arroz/01-arroz');
    });
    Route::get('/productos/medallones/arrozycurry', function () {
        return view('productos/medallones/arroz/02-arroz');
    });
    Route::get('/productos/medallones/arrozymijo', function () {
        return view('productos/medallones/arroz/03-arroz');
    });
    Route::get('/productos/medallones/arrozepsciales', function () {
        return view('productos/medallones/arroz/04-arroz');
    });

// ·········································· medallones - Lentejas

Route::get('/productos/medallones-lentejas', function () {
    return view('productos/medallones/medallones-lentejas');
    });
    Route::get('productos/medallones/lentajapura', function () {
        return view('productos/medallones/lentejas/01-lentejas');
    });
    Route::get('/productos/medallones/lentejayverdeo', function () {
        return view('productos/medallones/lentejas/02-lentejas');
    });
    Route::get('/productos/medallones/lentejaycurry', function () {
        return view('productos/medallones/lentejas/03-lentejas');
    });
    Route::get('/productos/medallones/lentejayespecias', function () {
        return view('productos/medallones/lentejas/04-lentejas');
    });

// ·········································· medallones - Variedades

Route::get('/productos/medallones-variedades', function () {
    return view('productos/medallones/medallones-variedades');
});
    Route::get('/productos/medallones/brocoli', function () {
        return view('productos/medallones/variedades/01-variedades');
    });
    Route::get('/productos/medallones/calabaza', function () {
        return view('productos/medallones/variedades/02-variedades');
    });
    Route::get('/productos/medallones/verduras', function () {
        return view('productos/medallones/variedades/03-variedades');
    });
    Route::get('/productos/medallones/zanahoria', function () {
        return view('productos/medallones/variedades/04-variedades');
    });
        

// ·········································· medallones - Especiales

Route::get('/productos/medallones-especiales', function () {
    return view('productos/medallones/medallones-especiales');
});
Route::get('/productos/medallones/arrozpuro', function () {
    return view('productos/medallones/especiales/01-especiales');
});