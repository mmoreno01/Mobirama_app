<?php

namespace App\Http\Controllers;
use App\Models\Postulation;
use App\Models\Vacante;
use Storage;
use Mail;
use Illuminate\Http\Request;
use App\Http\Requests\ StorePostulationRequest;


class PostulacionController extends Controller
{
     // Envia los datos de la vacante a la base de datos
     public function envioVacante( StorePostulationRequest  $request)

     {
        $envioVacante = new Postulation;

        $pathtoFile="";
        $contentFile="false";

        //guarda el archivo en disco local
         if($request->hasFile('image')){
            $contentFile="true";
             $file = $request->file('image');
             $extension = $file->getvt5ClientOriginalExtension();
             $name = time().$file->getClientOriginalName();
             $envioVacante->image = $name;
             $route = Storage::disk('local')->put($name, \File::get($file));
            // $file->move(public_path().'/images/', $name);
            $pathtoFile =  storage_path('app')."/". $name;

             }

            $envioVacante->nombre = $request->input('nombre');
            $envioVacante->apellido = $request->input('apellido');
            $envioVacante->correo = $request->input('correo');
            $envioVacante->telefono = $request->input('telefono');
             $envioVacante->vacante = $request->;
            // $envioVacante->save();

            
            // Envia de correo electronico 
         Mail::send('emails.postulacion', $request->all(), function($smj) use ($contentFile, $pathtoFile){

                $smj->Subject('Correo de Postulacion de Vacantes');
                $smj->to('janeth.ortiz@cclusterc.com.mx');
                if($contentFile){
                    $smj->attach($pathtoFile);
                }
            });

            Mail::send('emails.postulacion', $request->all(), function($smj) use ($contentFile, $pathtoFile){

               $smj->Subject('Correo de Postulacion de Vacantes');
               $smj->to('miguel.moreno@cclusterc.com.mx');
               if($contentFile){
                   $smj->attach($pathtoFile);
               }
           });
    
       if($contentFile = true){
            Storage::disk('local')->delete($name);
            return redirect()->route('contacto.bolsaTrabajo')->with('info', 'Te postulaste exitosamente');

       }else{
        return redirect()->route('contacto.bolsaTrabajo')->with('info_error', 'Error al envias, vuelva a intentarlo');

       }
         
     }

}