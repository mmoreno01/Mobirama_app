<?php

namespace App\Http\Controllers;
use Illuminate\Pagination\LengthAwarePaginatorsimplePaginate;
use Illuminate\Pagination\Paginator;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Vacante;
use App\Models\Areas;




class jobController extends Controller
{
    // Muestra y Pagina las vacantes en la vista 
    public function index()
    {

      $vacantes = Vacante::paginate(2);
      $areas = Areas::all();
            // dd($vacantes);                         
        return view('contacto.bolsaTrabajo', compact('vacantes', 'areas') );
    }


    
    

    public function vervacante($id){

      $ver_vacante = Vacante::find($id);
            // dd($ver_vacante);
      return view('/contacto/vacante', compact('ver_vacante'));
    }

  
}
