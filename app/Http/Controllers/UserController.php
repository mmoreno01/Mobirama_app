<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index(){

    // $users = DB::table('services')->get();

        $users = Service::all();

        return View('clientes')
        ->with('users', Service::all());
       

        // return view('clientes', [
        //     'users' => $users
        // ]);
    }

//   public function services(){
//       return view('servicios.servicios');
//   } 
}
