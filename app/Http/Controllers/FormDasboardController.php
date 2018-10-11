<?php

namespace App\Http\Controllers;
use App\Models\Vacante;
use Illuminate\Http\Request;

class FormDasboardController extends Controller
{
  public function sendData(Request $request)
  {
   
    $newVacante = new Vacante;
    $newVacante->titulo = $request->input('titulo');
    $newVacante->edad = $request->input('edad');
    $newVacante->descripcion = $request->input('descripcion');
    $newVacante->experiencia = $request->input('experiencia');
    $newVacante->save(); 

    return redirect()->route('dashboard')->with('info', 'Vacante creada exitosamente');
    // $request->all();
  }
}
