<?php

namespace App\Http\Controllers;
use App\Models\Vacante;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    
    // permita el acceso a los usuario autenticados
    public function __construct()
    {
        $this->middleware('auth');
    }

    // metodo para visualuzar la vista
    public function index()
    {
        $vacantes = Vacante::all();
        return view('dashboard', compact('vacantes'));
    }

}
