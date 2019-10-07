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
    return view('cliente.index');
});

Route::get('/perfil', function () {
    return view('auth.perfil');
});

Auth::routes();

Route::get('/index', 'HomeController@index')->name('index');

Route::resource('/oportunidades', 'OportunidadController')->middleware('auth');
Route::get('/misOportunidades', 'OportunidadController@misOportunidades')->middleware('auth');
Route::get('/oportunidadesAsignadas', 'OportunidadController@oportunidadesAsignadas')->middleware('auth');
