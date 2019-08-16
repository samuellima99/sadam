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
    return view('auth/login');
});

Route::resource('perfil', 'PerfilController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/energia/salvar/{user_id}/{valor}', 'EnergiaController@salvar')->name('salvar');
Route::post('/energia/filtrar/', 'EnergiaController@filtrar')->name('filtrar');
