<?php

namespace App\Http\Controllers;
use App\Models\Sintomas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view ('covit.index');
    }

    public function test(){
        return view('covit.test');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'value' => 'required'
        ]);

        Sintomas::create($request->all());

        return;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function getAnswers()
    {
        // return Sintomas::all();
        return DB::table('sintomas')->where('categoria', 'basicos')->get();
    }

    
}
