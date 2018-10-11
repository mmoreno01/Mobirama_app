<?php

use illuminate\http\Request;

// Route::get('/', function () {
//     return view('.slider.slider');
// });

Route::get('clientes', 'UserController@index');

// muestra el home
Route::get('home', function(){
    return view('home');
});

//ruta comprueba si inicio sesion
Route::get('/', 'Auth\LoginController@showLoginForm'); 
   
//ruta para vista individual
Route::get('dashboard','DashboardController@index')->name('dashboard');

Route::post('dashboard','FormDasboardController@sendData');
// Route::post('dashboard', function(Request $request){
//     return $request->all();
// });

// Route::get('dashboard','Auth\DashboardController@index');

//rutas de login
Route::post('login', 'Auth\LoginController@login')->name('login');

//Ruta para cerrar sesion
Route::post('logout', 'Auth\LoginController@logout')->name('logout');




// rutas de  la seccion de servicios
Route::get('mobiramaServices', function(){
    return view('mobiramaServices.mobiramaServices');
});
Route::get('mobiramaPersonal', function(){
    return view('mobiramaPersonal.mobiramaPersonal');
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


// Auth::routes();

  // Authentication Routes...
//   Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
//   Route::post('login', 'Auth\LoginController@login');
//   Route::post('logout', 'Auth\LoginController@logout')->name('logout');

  // Registration Routes...
  Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
  Route::post('register', 'Auth\RegisterController@register');

  // Password Reset Routes...
//   Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
//   Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
//   Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
//   Route::post('password/reset', 'Auth\ResetPasswordController@reset');

// Route::get('/home', 'HomeController@index')->name('home');

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
