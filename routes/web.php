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
Route::get('dashboard','DashboardController@index')->name('dashboard')
->middleware('permission:dashboard');

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
// Route::post('login', 'Auth\LoginController@login')->name('login');

//Ruta para cerrar sesion
// Route::post('logout', 'Auth\LoginController@logout')->name('logout');




// rutas de  la seccion de servicios

Route::get('contabilidad', function () {
    return view('servicios.contabilidad');
});
Route::get('fiscal', function () {
    return view('servicios.fiscal');
});
Route::get('capital_humano', function () {
    return view('servicios.capital_humano');
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
Route::get('administracion_recursos', function () {
    return view('servicios.administracion_recursos');
});

//webiniar
Route::get('webinars', function(){
    return view('webinars.index');
});

Route::get('norma-035', function () {
    return view('norma-035');
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


// muestra la bolsa de trabajo
Route::get('contacto.bolsaTrabajo', 'jobController@index')->name('contacto.bolsaTrabajo');
// Route::get('contacto.bolsaTrabajo', 'jobController@getArea');


// muestra vacante individual
Route::get('/contacto/vacante/{id}','jobController@vervacante')->name('/contacto/vacante');
Route::post('contacto.bolsaTrabajo', 'jobController@envioVacante');


// rota  muestra el formulario de postulacion
// Route::post('contacto.bolsaTrabajo', 'PostulacionController@envioVacante');
// Route::get('contacto.bolsaTrabajo', 'PostulacionController@index')->name('contacto.bolsaTrabajo');

// muestra areas en select
// Route::get('contacto.bolsaTrabajo','jobController@getAreas');


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

// Route Roles


Route::middleware(['auth'])->group(function(){

    //roles
    Route::post('roles/store', 'RoleController@store')->name('roles.store')
    ->middleware('permission:roles.create');
    
    Route::get('roles', 'RoleController@index')->name('roles.index')
    ->middleware('permission:roles.index');

    Route::get('roles/create', 'RoleController@create')->name('roles.create')
    ->middleware('permission:roles.create');

    Route::put('roles/{role}', 'RoleController@update')->name('roles.update')
    ->middleware('permission:roles.edit');

    Route::get('roles/{role}', 'RoleController@show')->name('roles.show')
    ->middleware('permission:roles.show');

    Route::delete('roles/{role}', 'RoleController@destroy')->name('roles.destroy')
    ->middleware('permission:roles.destroy');

    Route::get('roles/{role}/edit', 'RoleController@edit')->name('roles.edit')
    ->middleware('permission:roles.edit');

    

     //Products
     Route::post('products/store', 'ProductController@store')->name('products.store')
     ->middleware('permission:products.create');
     
     Route::get('products', 'ProductController@index')->name('products.index')
     ->middleware('permission:products.index');
 
     Route::get('products/create', 'ProductController@create')->name('products.create')
     ->middleware('permission:products.create');
 
     Route::put('products/{id}', 'ProductController@update')->name('products.update')
     ->middleware('permission:products.edit');
 
     Route::get('products/{product}', 'ProductController@show')->name('products.show')
     ->middleware('permission:products.show');
 
     Route::delete('products/{product}/edit', 'ProductController@destroy')->name('products.destroy')
     ->middleware('permission:products.destroy');
 
     Route::get('products/{id}/edit', 'ProductController@edit')->name('products.edit')
     ->middleware('permission:products.edit');


 
     //Users
     Route::get('users', 'UserController@index')->name('users.index')
     ->middleware('permission:users.index');
 
    //  Route::get('users/create', 'UserController@create')->name('users.create')
    //  ->middleware('permission:users.create');
 
     Route::put('users/{user}/edit', 'UserController@update')->name('users.update')
     ->middleware('permission:users.edit');
 
     Route::get('users/{user}', 'UserController@show')->name('users.show')
     ->middleware('permission:users.show');
 
     Route::delete('users/{user}', 'UserController@destroy')->name('users.destroy')
     ->middleware('permission:users.destroy');
 
     Route::get('users/{user}/edit', 'UserController@edit')->name('users.edit')
     ->middleware('permission:users.edit');

    
});

    Route::get('consulta', 'consultaController@consultaFolio');
    Route::get('products.estudio', 'consultaController@showFolio')->name('products.estudio');



// Auth::routes();

  // Authentication Routes...
  Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
  Route::post('login', 'Auth\LoginController@login');
  Route::post('logout', 'Auth\LoginController@logout')->name('logout');

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



//Routes Test Controller

Route::get('covit', 'TestController@index')->name('covit.index');
Route::get('covit.test', 'TestController@test')->name('covit.test');
Route::get('answers', 'TestController@getAnswers');
Route::post('guardar-idea', 'TestController@store');


