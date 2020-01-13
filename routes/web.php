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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
/*--------Actores--------*/
Route::get('/actores', 'ActoresController@index');
Route::get('/actores/new', 'ActoresController@create');
Route::post('/actores', 'ActoresController@store');
Route::get('/actores/{actor}', 'ActoresController@detalle');
/*--------Peliculas--------*/
Route::get('/peliculas', 'PeliculasController@index');
Route::get('/peliculas/{pelicula}', 'PeliculasController@detalle');
Route::get('/peliculas/{pelicula}/edit','PeliculasController@edit');//->middleware('auth','role:1');
Route::patch('/peliculas/{idpelicula}', 'PeliculasController@update');
/*--------Generos--------*/
Route::get('/generos', 'GenerosController@index');
Route::get('/generos/{genero}', 'GenerosController@detalle');