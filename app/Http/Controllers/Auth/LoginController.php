<?php


namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use Auth;
class LoginController extends Controller
{
    //comprueba autentificacion
    public function __construct(){
        
        $this->middleware('guest', ['only' => 'showLoginForm']);
    }

    //function  para direccionamiento de login
    public function showLoginForm(){

        return view('auth.login');
    }


    // Function de validacion de usuario
    public function login()
    {
     $credentials = $this->validate(request(),  [

            'email' => 'email|required|string',
            'password' => 'required|string'
        ]);

        if(Auth::attempt($credentials)){
            
            return redirect()->route('dashboard');
        }  
        return back()
        ->withErrors(['email' => trans('auth.failed')])
        ->withInput(request(['email']));

    }

    //metodo para cerrie de sesion
    public function logout(){

        Auth::logout();

        return view('home');
    }
   

  
}
