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



Route::get('/estudiantes','EstudiantesController@index')->name('est.index');

Route::get('/estudiantes/{id}','EstudiantesController@show')
    ->where('id', '[0-9]+')
    ->name('est.show');


Route::get('/estudiantes/create','EstudiantesController@create')->name('est.create');

Route::get('/estudiantes/medico','MedicoController@index')->name('medico');
