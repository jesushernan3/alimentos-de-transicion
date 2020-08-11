<?php

namespace App\Http\Controllers;

use App\Mail\MessageReceived;
use Illuminate\Support\Facades\Mail;

class FormularioDeContacto extends Controller
{
    public function store()
    {
        $message = request()->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'content' => 'required'
        ]);

        Mail::to('acrobata@protonmail.com')->queue(new MessageReceived($message));

        // return new MessageReceived($message);

        return redirect('contacto')->with('message', 'Su mensaje ha sido mandado exitosamente');
    }
}
