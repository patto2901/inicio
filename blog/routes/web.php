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
Route::get('cesar', function () {
    return view('Hola soy cesar');
});
Route::get('utgz/{nombre?}', function ($nombre="Por favor ingresa un valor") {
    return view('Hola'.$nombre);
});
Route::get('ejemplo', function () {
    return view('ejemplo');
});
Route::get('wix', function () {
    return view('wix.wix');
})->name('wix');
Route::get('tienda', function () {
    return view('wix.tienda');
})->name('tienda');
Route::get('tienda/detalles', function () {
    return view('wix.detalles');
})->name('detallesproducto');

Route::resource('categorias','CategoriasController');
Route::resource('usuarios','UsersController')->middleware('auth','admin');//auntenticar correos 
Route::resource('productos','ProductosController');
Route::resource('roles','RolesController');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//cmd el comando php artisan make:middleware Check*campo*
//Nos vamos a checar el archivo creado CheckaAdmin Kernel admin AuthenticatesUser app 
