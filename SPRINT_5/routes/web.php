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

Route::get('/', function () {
    return view('welcome');
});

########################################################
## Rutas agregadas para el Proyecto Ecommerce Grupo 7 ##
########################################################

/*Rutas para el usuario invitado */
Route::get('/home',function(){
    return view('home');
});

Route::get('/contacto' , function(){
    return 'contacto';
});

/*Rutas para el usuario administrador */
Route::get('/admProducto',function(){
    return 'admProducto';
});

Route::get('/admCategoria', function(){
    return 'admCategoria';
});

Route::get('/admMarca', function(){
    return 'admMarca';
});