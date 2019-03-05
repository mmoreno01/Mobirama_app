<?php

use illuminate\http\Request;

// Route::get('/', function () {
//     return view('.slider.slider');
// });

// Route::get('clientes', 'UserController@index');

// muestra el home
// Route::get('/', function(){
//     return view('home');
// });

Route::get('/', 'HomeController@index')->name('home'); 

//ruta comprueba si inicio sesion
Route::get('login', 'Auth\LoginController@showLoginForm'); 
   
//ruta para vista individual
Route::get('dashboard','DashboardController@index')->name('dashboard');

//ruta para editar una vacante
Route::get('/dashboard/{id}/editar','DashboardController@edit');

//ruta para actualizar datos de una vacante
Route::put('/dashboard/{id}/editar','DashboardController@update');

Route::get('/dashboard/editar', 'Auth\DashboardController@showViewEdit');

//ruta para eliminar una vacante de la base de datos
Route::delete('dashboard/{vacante}', 'DashboardController@destroy');

// ruta envia los datos del formulario a la BD
Route::post('dashboard','FormDasboardController@sendData');

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
Route::get('administracion_personal', function () {
    return view('servicios.administracion_personal');
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
Route::get('juridico', function () {
    return view('servicios.juridico');
});
Route::get('maquilaNomina', function () {
    return view('servicios.maquilaNomina');
});
Route::get('maquilaSeguridad', function () {
    return view('servicios.maquilaSeguridad');
});

//News letter
Route::get('letter', function () {
    return view('letter');
});

//blog
Route::get('blog', function () {
    return view('blog.blog');
});
//item blog
Route::get('itemBlog', function () {
    return view('blog.itemBlog');
});
//item 2
Route::get('item2', function () {
    return view('blog.item2');
});
//item 3
Route::get('item3', function () {
    return view('blog.item3');
});

//item 3
Route::get('item4', function () {
    return view('blog.item4');
});

//aviso de privacidad
Route::get('avisoPrivacidad', function () {
    return view('avisoPrivacidad');
});

//gaceta informativa
Route::get('gaceta-post', function () {
    return view('gaceta.gaceta-post');
});

// rutas de la seccion de ubicacion
Route::get('contacto', 'contactoController@index')->name('contacto.contacto');
Route::post('contacto', 'contactoController@store');

//rutas de obtencion de registros formulario
Route::get('registros', 'recordsControllers@index');




// Route::get ('cotizacion', function(){
//     return view('contacto.cotizacion');
// });

// muestra la bolsa de trabajo
Route::get('contacto.bolsaTrabajo', 'jobController@index')->name('contacto.bolsaTrabajo');
// rota  muestra el formulario de postulacion
Route::post('contacto.bolsaTrabajo', 'PostulacionController@envioVacante');
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

// rutas de alianzas
Route::get('alianzas',function(){
    return view('alianzas.alianzas');
});

Route::get('certificaciones',function(){
    return view('alianzas.certificaciones');
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
//   Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
//   Route::post('register', 'Auth\RegisterController@register');

  // Password Reset Routes...
//   Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
//   Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
//   Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
//   Route::post('password/reset', 'Auth\ResetPasswordController@reset');

// Route::get('/home', 'HomeController@index')->name('home');

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
