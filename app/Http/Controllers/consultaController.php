<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class consultaController extends Controller
{

    public function showFolio(){
        return view('products.estudio');
    }
    public function consultaFolio(){

       return Product::all();
        // return view('consulta', compact('product'));
    }
}
