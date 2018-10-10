<?php

namespace App\Http\Controllers;

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

        return view('dashboard');
    }

}
