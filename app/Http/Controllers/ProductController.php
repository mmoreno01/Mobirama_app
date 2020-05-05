<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::paginate();

        return view('products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $nuevoFolio = new Product;
        $nuevoFolio->folio = $request->input('folio');
        $nuevoFolio->contacto = $request->input('contacto')? true: false;
        $nuevoFolio->domicilio = $request->input('domicilio')? true: false;
        $nuevoFolio->documento = $request->input('documento')? true: false;
        $nuevoFolio->finalizo = $request->input('finaliozo')? true: false;
        $nuevoFolio->save();
        // dd($nuevoFolio);

        return redirect()->route('products.index')
                ->with('info', 'Producto creado con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view('products.show', compact('product') );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);
        return view('products.edit', compact('product') );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $nuevoFolio = $request->input('folio');
        $nuevoContacto = $request->input('contacto')? true: false;
        $nuevoDomicilio = $request->input('domicilio')? true: false;
        $nuevoDocumento = $request->input('documento')? true: false;
        $nuevoFinalizo = $request->input('finalizo')? true: false;

        $data = Product::find($id);

        $data->folio = $nuevoFolio;
        $data->contacto = $nuevoContacto;
        $data->domicilio = $nuevoDomicilio;
        $data->documento = $nuevoDocumento;
        $data->finalizo = $nuevoFinalizo;
        // dd($data);
        $data->save();
       
        return redirect()->route('products.index', $id)
            ->with('info', 'Producto actualizado con Exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
    echo"<script>
    swal('Esta seguro de ');
    </script>";

        // if($product->delete()){
        // }

        // return back()->with('info', 'Eliminado correctamente');
    }
}
