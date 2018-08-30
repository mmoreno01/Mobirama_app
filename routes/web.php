<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('.slider.slider');
// });

Route::get('clientes', 'UserController@index');

Route::get('home', function(){
    return view('home');
});

// rutas de  la seccion de servicios
Route::get('mobiramaServices', function(){
    return view('mobiramaServices.mobiramaServices');
});
Route::get('contabilidad', function () {
    return view('servicios.contabilidad');
});
Route::get('fiscal', function () {
    return view('servicios.fiscal');
});
Route::get('payroll', function () {
    return view('servicios.payroll');
});
Route::get('division', function () {
    return view('servicios.division');
});
Route::get('capitalHumano', function () {
    return view('servicios.capitalHumano');
});
Route::get('bancaInversion', function () {
    return view('servicios.bancaInversion');
});
Route::get('estacionServicio', function () {
    return view('servicios.estacionServicio');
});
Route::get('sofom', function () {
    return view('servicios.sofom');
});

// rutas de la seccion de ubicacion

Route::get ('contacto', function(){
    return view('contacto.contacto');
});
Route::get ('cotizacion', function(){
    return view('contacto.cotizacion');
});
Route::get ('ubicacion', function(){
    return view('contacto.ubicacion');
});

// rutas de seccion nostros
Route::get('nosotros',function(){
    return view('nosotros.nosotros');
});
Route::get('valores',function(){
    return view('nosotros.valores');
});
Route::get('filosofia',function(){
    return view('nosotros.filosofia');
});

// rutas de menu

Route::get('politica',function(){
    return view('menu.politica');
});
Route::get('terminos',function(){
    return view('menu.terminos');
});
Route::get('glosario',function(){
    return view('menu.glosario');
});
Route::get('promocion',function(){
    return view('menu.promocion');
});

