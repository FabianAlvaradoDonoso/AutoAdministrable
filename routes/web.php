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



// Ruta Inicio
Route::get('/', function () {
    return view('welcome');
});

// Ruta Dashboard
Route::get('/dash', function () {
    return view('dashboard');
});

// Ruta Redireccionamiento Inicio->Dash
Route::get('/home', function () {
    return view('layouts.app');
});

// Ruta Prueba Plantilla app2
Route::get('/home2', function () {
    return view('layouts.app2');
});


// Rutas a Controladores
Route::resource('category', 'CategoryController');
Route::resource('product', 'ProductController');
Route::resource('product', 'ProductController');
Route::resource('user', 'UserController');
Route::get('/home', 'HomeController@index')->name('home');


// Ruta Autentificación
Auth::routes();


// // Ruta
// Route::get('/autoAdmin', function () {
//     return view('autoAdmin');
// });

