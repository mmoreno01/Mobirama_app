<?php

namespace App\Http\Controllers;
use App\Models\Postulation;
use Mail;
use Illuminate\Http\Request;
use App\Http\Requests\ StorePostulationRequest;


class PostulacionController extends Controller
{
     // Envia los datos de la vacante a la base de datos
     public function envioVacante( StorePostulationRequest  $request)

     {
        // $envioVacante = new Postulation;

        //  if($request ->hasFile('image')){
 
        //      $file = $request->file('image');
        //      $name = time().$file->getClientOriginalName();
        //      $envioVacante->image = $name;
        //      $file->move(public_path().'/images/', $name);
        //      } 
 
        
        //     $envioVacante->nombre = $request->input('nombre');
        //     $envioVacante->apellido = $request->input('apellido');
        //     $envioVacante->correo = $request->input('correo');
        //     $envioVacante->telefono = $request->input('telefono');
        //     $envioVacante->edad = $request->input('edad');
        //     $envioVacante->save();


        
        //     Mail::send('emails.contact', $request->all(), function($smj, $envioVacante){
        //     $file = $request->file('image');
        //     $smj->Subject('Correo de contacto');
        //     $smj->to('migue.moreno01@gmail.com');
        //     $smj->attach("files/".Input::file("attach")->getClienOriginalName());
            
        // });

        $file = Input::file("attach");
        $data = array(
            "nombre"       =>    Input::get("nombre"),
            "apellido"    =>    Input::get("apellido"),
            "correo"       =>    Input::get("correo"),
            "telefono"    =>    Input::get("telefono"),
            "edad"    =>    Input::get("edad"),
            "attach"     =>    $file//el archivo adjunto al formulario
        );
     
        //reglas de validación
        // $rules = array(
        //     'name'    => 'required|min:2|max:100',
        //     'tuemail'   => 'required|email',
        //     'para'      => 'required|email',
        //     'subject'    => 'required|min:6|max:100',
        //     'mensaje'   => 'required|min:10|max:300',
        //     'attach'     => 'required'
        // );
     
        //mensajes de error personalizados
        // $messages = array(
        //     'required'  => 'El campo :attribute es obligatorio.',
        //     'min'       => 'El campo :attribute no puede tener menos de :min carácteres.',
        //     'email'     => 'El campo :attribute debe ser un email válido.',
        //     'max'       => 'El campo :attribute no puede tener más de :min carácteres.'
        // );
     
        $validation = Validator::make(Input::all());
     
        //si el formulario no pasa la validación redirigimos al formulario y mostramos los errores
        if ($validation->fails())
        {
            return Redirect::to('email')->withErrors($validation)->withInput();
        //si pasamos la validación correctamente, subimos la imagen y enviamos el email
        }else{
            //si el archivo adjunto sube correctamente entonces enviamos el email con adjuntos
            if($file->move("files",$file->getClientOriginalName()))
            {
                //template_mail es la vista template_mail.blade.php,
                //el array $data lo tenemos disponible en esa vista
                //de esa forma podemos maquetar una vista y enviarla
                Mail::send('emails.contact', $request->all(), function($smj)
                {
                    //mensaje enviado por
                    $smj->Subject('Correo de contacto');
     
                    //mensaje para
                    $smj->to('migue.moreno01@gmail.com');
     
                    //archivos adjuntos
                    $smj->attach("files/".Input::file("attach")->getClientOriginalName());
     
                });
                return "El mensaje con su archivo se ha enviado correctamente";
            //en otro caso, enviamos el email de todos modos pero sin adjuntos
            }else{
                Mail::send('emails.contact', $request->all(), function($smj)
                {
     
                    //mensaje enviado por
                    $smj->Subject('Correo de contacto');
     
                    //mensaje para
                    $smj->to('migue.moreno01@gmail.com');
     
                });
                return redirect()->route('contacto.bolsaTrabajo')->with('info', 'Te postulaste exitosamente');
            }
     
        }


//         return redirect()->route('contacto.bolsaTrabajo')->with('info', 'Te postulaste exitosamente');
//      }
// }
