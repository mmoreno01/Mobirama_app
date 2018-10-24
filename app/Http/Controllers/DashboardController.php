<?php

namespace App\Http\Controllers;
use App\Models\Vacante;
use Auth;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    // public function __construct(){
    //     $this->middleware('guest', ['only' => 'showViewEdit']);
    // }
    //metodo para eliminar un registro de la base de datos
    public function destroy(Vacante $vacante)
    {
        $vacante->delete();
        return redirect()->route('dashboard')->with('info', 'Eliminacion exitosa!');
        
    }

    //actualiza los datos de la vacante
    public function update(Request $request, $id)
    {
      $nuevoTitulo = $request->input('titulo');
      $nuevoEdad = $request->input('edad');
      $nuevoDescripcion = $request->input('descripcion');
      $nuevoExperiencia = $request->input('experiencia');

      $vacantes = Vacante::find($id);

      $vacantes->titulo = $nuevoTitulo;
      $vacantes->edad = $nuevoEdad;
      $vacantes->descripcion = $nuevoDescripcion;
      $vacantes->experiencia =$nuevoExperiencia;
      $vacantes->save();

      return redirect()->route('dashboard')->with('info', 'Edicion exitosa!');
    }

//metodo para editar una vacante desde el formulario
   public function edit( $id)
   {
        $vacantes = Vacante::find($id);
       return view('/dashboard/editar', compact('vacantes'));
   }
    
    // permita el acceso a los usuario autenticados
    public function __construct()
    {
        $this->middleware('auth');
    }

    // metodo para visualuzar datos de las vacantes en la vista
    public function index()
    {
        $vacantes = Vacante::orderBy('created_at', 'desc')->get();
        return view('dashboard', compact('vacantes'));
    }

}
