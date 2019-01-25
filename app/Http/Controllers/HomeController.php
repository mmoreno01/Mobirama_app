<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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

        SEO::setTitle('Mobirama');
        SEO::setDescription('Somos una consultoría integral. Solventamos necesidades en materia Fiscal, Legal, Payroll, Contable y Financiera.');
        SEO::opengraph()->setUrl('http://mobirama.com.mx');
        SEO::setCanonical('https://www.mobirama.com.mx');
        SEO::opengraph()->addProperty('type', 'articles');
        SEO::twitter()->setSite('@MobiramaMX');

        
        return view('home');
    }
}
