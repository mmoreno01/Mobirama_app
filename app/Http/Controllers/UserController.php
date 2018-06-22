<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){

    $users = [
        'moike',
        'mile',
        'raul',
        'lalo',
    ];

        return view('home', [
            'users' => $users
        ]);
    }

  public function services(){
      return view('servicios.servicios');
  } 
}
