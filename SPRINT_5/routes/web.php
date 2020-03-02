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

/* Ruta de ejemplo */
Route::get('/', function () {
    return view('welcome');
});

########################################################
## Rutas agregadas para el Proyecto Ecommerce Grupo 7 ##
########################################################

/*Rutas para el usuario invitado */
Route::get('/home',function(){
    return view('home');  //Vista de home
});

Route::get('/contacto' , function(){
    return view('contacto'); //Vista de contacto
});

Route::get('/sobreNosotros' , function(){
    return view('sobreNosotros'); //Vista sobreNosotros
});

Route::get('/preguntasFrecuentes' , function(){
    return view('preguntasFrecuentes'); //Vista preguntasFrecuentes
});


/*Rutas para el usuario administrador */
Route::get('/adminProductos',function(){
    return 'adminProductos';
});

Route::get('/adminCategorias', function(){
    return 'adminCategorias';
});

Route::get('/adminMarcas', function(){
    return view('adminMarcas');
});

Route::get('/adminUsuarios',function(){
    return view('adminUsuarios');  //Vista tabla de adminUsuarios
});

Route::get('/formAgregarProducto',function(){
    return view('formAgregarProducto');
});

Route::get('/formAgregarCategoria',function(){
    return 'formAgregarCategoria';
});

Route::get('/agregarCategoria',function(){
    return 'agregarCategoria';
});

Route::get('/formAgregarMarca',function(){
    return 'formAgregarMarca';
});



Route::get('/formModificarMarca/{id}',function($id){ //Luego hay que agregar el controlador
     $id=7;
     return view('formModificarMarca'); 
});

Route::get('/agregarMarca',function(){
    return 'agregarMarca';
});

Route::get('/modificarMarca',function(){
    return 'modificarMarca';
});

