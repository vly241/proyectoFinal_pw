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


Route::get('/estudiantes/{id}/dp','AntecedentesPersonalesController@index')->name('est.dp');
Route::get('/estudiantes/{antecedentes_personales}/dp/edit','AntecedentesPersonalesController@edit')->name('dp.edit');
Route::post('/estudiantes/{antecedentes_personales}/dp', 'AntecedentesPersonalesController@update');


Route::get('/estudiantes/{id}/df','AntecedentesFamiliaresController@index')->name('est.df');
Route::get('/estudiantes/{antecedentes_familiares}/df/crear','AntecedentesFamiliaresController@create')->name('df.create');
Route::post('/estudiantes/{antecedentes_familiares}/df/nuevo','AntecedentesFamiliaresController@store');
Route::get('/estudiantes/{antecedentes_familiares}/df/edit','AntecedentesFamiliaresController@edit')->name('df.edit');
Route::post('/estudiantes/{antecedentes_familiares}/df','AntecedentesFamiliaresController@update');


Route::get('/estudiantes/{id}/historialMedico','ExamenFisicoController@index')->name('hm.index');
Route::get('/estudiantes/historialMedico/{id}','ExamenFisicoController@show')
    ->where('id', '[0-9]+')
    ->name('hm.show');

Route::get('/consultas','ConsultaController@index')->name('cons.index');

//opcion 2 enrutamiento
//Route::resource()
