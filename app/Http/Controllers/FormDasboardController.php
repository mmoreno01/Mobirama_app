<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormDasboardController extends Controller
{
  public function sendData(Request $request)
  {
    //   $request->all();

    return view ('dashboard');
    -with( $request->all());
  }
}
