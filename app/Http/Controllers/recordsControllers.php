<?php

namespace App\Http\Controllers;
use App\Models\Contact;

use Illuminate\Http\Request;

class recordsControllers extends Controller
{
    public function index(){
        $registros = Contact::orderBy('created_at', 'desc')->get();
       
        return view('dashboard.registros', compact('registros'));
    }
}
