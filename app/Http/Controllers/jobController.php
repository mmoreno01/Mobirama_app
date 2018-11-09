<?php

namespace App\Http\Controllers;
 use Illuminate\Pagination\LengthAwarePaginatorsimplePaginate;
use Illuminate\Pagination\Paginator;
use Illuminate\Http\Request;
use App\Models\Vacante;
use App\Models\Postulacion;


class jobController extends Controller
{

  

    // Muestra y Pagina las vacantes en la vista 
    public function index()
    {
      $vacantes = Vacante::paginate(1);

        return view('contacto.bolsaTrabajo', compact('vacantes'));
    }
}
