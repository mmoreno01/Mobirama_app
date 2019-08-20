<?php

namespace App\Http\Controllers;
use App\Models\Vacante;
use App\Models\Areas;
use App\Models\Postulation;
use Illuminate\Pagination\LengthAwarePaginatorsimplePaginate;
use Illuminate\Pagination\Paginator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Storage;
use Mail;
use App\Http\Requests\ StorePostulationRequest;

class jobController extends Controller
{
    // Muestra y Pagina las vacantes en la vista 
    public function index()
    {
      //muestra vacantes en paginacion
      $vacantes = Vacante::orderBy('titulo','desc')
      ->paginate(2);


      //muestra areas en formulario postulacion
      $areas = Areas::all()->pluck('area', 'area');
    
      //muestra vacantes en formulario postulacion
      $vacante = Vacante::all()->pluck('titulo', 'titulo');
                           
        return view('contacto.bolsaTrabajo', compact('vacantes', 'areas', 'vacante') );
    }


    
    public function envioVacante(  StorePostulationRequest  $request)

     {
        $envioVacante = new Postulation;

         $pathtoFile="";
         $contentFile="false";

        // guarda el archivo en disco local
         if($request->hasFile('image')){
                $contentFile="true";
                $file = $request->file('image');
                $extension = $file->getClientOriginalExtension();
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
            $envioVacante->vacante = $request->input("vacante");
            $envioVacante->area = $request->input("area");

            // $envioVacante->save();
           
            // Envia de correo electronico 
            // Mail::send('emails.postulacion', $request->all(), function($smj) use ($contentFile, $pathtoFile){

            //     $smj->Subject('Correo de Postulacion de Vacantes');
            //     $smj->to('janeth.ortiz@cclusterc.com.mx');
            //     if($contentFile){
            //         $smj->attach($pathtoFile);
            //     }
            // });

            // return $request;

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
        return redirect()->route('contacto.bolsaTrabajo')->with('info_error', 'Error al enviar, vuelva a intentarlo');

       }

         
}

    public function vervacante($id){

      $ver_vacante = Vacante::find($id);
            // dd($ver_vacante);
      return view('/contacto/vacante', compact('ver_vacante'));
    }

  
}
