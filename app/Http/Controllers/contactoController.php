<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class contactoController extends Controller
{
    //muestra la vista
    public function index()
    {
        return view('contacto.contacto');
    }
}
