<?php

namespace App\Http\Controllers;
 use Illuminate\Pagination\LengthAwarePaginatorsimplePaginate;
use Illuminate\Pagination\Paginator;
use Illuminate\Http\Request;
use App\Models\Vacante;

class jobController extends Controller
{
   

    public function index()
    {
      $vacantes = Vacante::paginate(3);

        return view('contacto.bolsaTrabajo', compact('vacantes'));
    }
}
