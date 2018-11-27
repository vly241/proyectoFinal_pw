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
//Routes login and register
Auth::routes();


Route::get('/', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('home');

//opcion 1 de enrutamiento

Route::get('/estudiantes','EstudiantesController@index')->name('est.index');

Route::get('/estudiantes/{id}','EstudiantesController@show')
    ->where('id', '[0-9]+')
    ->name('est.show');


Route::get('/estudiantes/nuevo','EstudiantesController@create')->name('est.create');

Route::post('/estudiantes/crear','EstudiantesController@store');

Route::get('/estudiantes/{estudiantes}/editar','EstudiantesController@edit')->name('est.edit');

Route::post('/estudiantes/{estudiantes}', 'EstudiantesController@update');

Route::delete('/estudiantes/{estudiantes}','EstudiantesController@destroy')->name('est.destroy');

Route::get('/estudiantes/medico','MedicoController@index')->name('medico');

Route::get('/estudiantes/{id}/datosGenerales', 'EstudiantesController@showd')->name('est.dg');

//opcion 2 enrutamiento
//Route::resource()