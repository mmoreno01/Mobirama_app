<?php

namespace App\Http\Controllers;
use Mail;
use App\Models\Contact;
use Illuminate\Http\Request;
use App\Http\Requests\StoreContacto;

class contactoController extends Controller
{
    
  
    //envia los datos en correo electronico
    public function store(StoreContacto $request)
    {

        $dataSend = new Contact;

        // $now = new \DateTime();
        // $currenDate = $now->format('d-m-Y');
    
        $dataSend->nombre = $request->input('nombre');
        $dataSend->email = $request->input('email');
        $dataSend->telefono = $request->input('telefono');
        $dataSend->mensaje = $request->input('mensaje');
        // $dataSend->date = $currenDate;
        $dataSend->save();

        Mail::send('emails.contact', $request->all(), function($smj){
            $smj->Subject('Correo de contacto');
            $smj->to('atencionaclientes@mobirama.com.mx');
        });

        Mail::send('emails.contact', $request->all(), function($smj){
            $smj->Subject('Correo de contacto');
            $smj->to('miguel.moreno@cclusterc.com.mx');
        });

        if ($dataSend = true){
            return redirect()->route('contacto.contacto')->with('info', 'Mensaje enviado');

        }else{
            return redirect()->route('contacto.contacto')->with('info_error', 'Error al enviar, Vuelve a intentarlo!');
        }

      
    }

    //muestra la vista
    public function index()
    {
       
        return view('contacto.contacto');
    }
}
