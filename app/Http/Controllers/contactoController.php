<?php

namespace App\Http\Controllers;
use Mail;
use Illuminate\Http\Request;

class contactoController extends Controller
{

    public function store(Request $request)
    {
        Mail::send('emails.contact', $request->all(), function($smj){
            $smj->Subject('Correo de contacto');
            $smj->to('migue.moreno01@gmail.com');
        });

        return redirect()->route('contacto.contacto')->with('info', 'Mensaje enviado');
    }
    //muestra la vista
    public function index()
    {
        return view('contacto.contacto');
    }
}
