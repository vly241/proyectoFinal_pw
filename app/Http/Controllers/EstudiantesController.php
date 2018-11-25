<?php

namespace App\Http\Controllers;

use App\estudiantes;
use Illuminate\Http\Request;
use Illuminate\View\View;

class EstudiantesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index( Request $request)
    {
        if($request->input('buscar')){
            $buscar = $request->input('buscar');
            $estudiantes = estudiantes::where('nombre', 'LIKE','%'.$buscar.'%')->get();
            return View('historia.estudiantes', compact('estudiantes', 'buscar'));
        }
        $estudiantes = estudiantes::all();
        return View('historia.estudiante', compact('estudiantes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return View('historia.crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\estudiantes  $estudiantes
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $estudiantes = estudiantes::findOrFail($id); //select * from productos where id= $id
        return View('historia.show', compact('estudiantes'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\estudiantes  $estudiantes
     * @return \Illuminate\Http\Response
     */
    public function edit(estudiantes $estudiantes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\estudiantes  $estudiantes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, estudiantes $estudiantes)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\estudiantes  $estudiantes
     * @return \Illuminate\Http\Response
     */
    public function destroy(estudiantes $estudiantes)
    {
        //
    }
}
