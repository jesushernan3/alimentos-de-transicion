<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormularioDeContacto extends Controller
{
    public function Formulario()
    {
        return view('contacto');
    }
}
