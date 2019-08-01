<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

use SEO;
use SEOMeta;
use OpenGraph;
use Twitter;



class HomeController extends Controller
{


   
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        SEO::setCanonical('https://www.mobirama.com.mx');
        SEO::opengraph()->addProperty('type', 'articles');
        SEO::twitter()->setSite('@MobiramaMX');

        SEO::opengraph()->setUrl(url('/'));

        $titulo = rand(0,3);

        $articulos = array(

            'Consultoria',
            'Financiera',
            'Fiscal',
            'Outsourcing',
            'Recursos humanos',
            'servicios juridicos ',
            'Auditoria',
        );

        SEO::setTitle($articulos[$titulo]);
        SEO::setDescription('Somos una consultoría integral. Solventamos necesidades en materia Fiscal, Legal, Payroll, Contable y Financiera.' );
        // dd($titulo);
        
        return view('home');
    }
    
}



