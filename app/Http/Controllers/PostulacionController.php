<?php

namespace App\Http\Controllers;
use App\Models\Postulation;
use Illuminate\Http\Request;
use App\Http\Requests\ StorePostulationRequest;


class PostulacionController extends Controller
{
     // Envia los datos de la vacante a la base de datos
     public function envioVacante( StorePostulationRequest  $request)

     {
        $envioVacante = new Postulation;

         if($request ->hasFile('image')){
 
             $file = $request->file('image');
             $name = time().$file->getClientOriginalName();
             $envioVacante->image = $name;
             $file->move(public_path().'/images/', $name);
             } 
 
        
         $envioVacante->nombre = $request->input('nombre');
         $envioVacante->apellido = $request->input('apellido');
         $envioVacante->correo = $request->input('correo');
         $envioVacante->telefono = $request->input('telefono');
         $envioVacante->edad = $request->input('edad');
         $envioVacante->save();
        //  return  $envioVacante;
        return redirect()->route('contacto.bolsaTrabajo')->with('info', 'Te postulaste exitosamente');
     }
}