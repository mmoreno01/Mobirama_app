<?php

namespace App\Http\Controllers;
use Mail;
use App\Models\Webinar;
use Illuminate\Http\Request;

class webinarController extends Controller
{
    public function index(){
        return view('webinars.index');
    }


    public function send(Request $request){

        // valida la informacion resibida
      $contenido = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => '',
            'bussines' => '',
            'text' => '',
        ]);
          // crea registro en la base de datos
        Webinar::create($request->all());

       
            // envia el email
          Mail::send('emails.webinar', $request->all(), function($smj){
            $smj->Subject('Correo de contacto');
            $smj->to('maximiliano.castillo@cclusterc.com.mx');
        });



        Mail::send('emails.webinar', $request->all(), function($smj){
            $smj->Subject('Correo de contacto');
            $smj->to('miguel.moreno@cclusterc.com.mx');
        });


      
      
      
         return;
        
    }
}
