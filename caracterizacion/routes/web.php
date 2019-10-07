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
    return view('cliente.indext');
});

Route::get('/perfil', function () {
    return view('auth.perfil');
});

Auth::routes();

Route::get('/index', 'HomeController@index')->name('index');
Route::get('/enti', 'EntidadController@index')->name('enti');
Route::get('/entidadr', 'EntidadController@create')->name('registrarE');
Route::post('/guardare', 'EntidadController@store')->name('post');
Route::resource('/entidad','EntidadController');

Route::get('/per', 'UserController@edit')->name('actu');
Route::get('/user','UserController@index')->name('ver');
Route::resource('/perfil','UserController');
