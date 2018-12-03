<?php

namespace App\Http\Controllers;

use App\examen_fisico;
use App\estudiantes;
use Illuminate\Http\Request;

class ExamenFisicoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $estudiantes = estudiantes::findOrFail($id);//select * from estudiantes where id= $id


        $ef = examen_fisico::all()->where('id_est',$id);//select * from where id_est = $id
        return View('estudiante.historialm_index', compact('ef','estudiantes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * @param  \App\examen_fisico  $examen_fisico
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ef = examen_fisico::findOrFail($id); //select * from estudiantes where id= $id
        return View('estudiante.historialm_show', compact('ef'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\examen_fisico  $examen_fisico
     * @return \Illuminate\Http\Response
     */
    public function edit(examen_fisico $examen_fisico)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\examen_fisico  $examen_fisico
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, examen_fisico $examen_fisico)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\examen_fisico  $examen_fisico
     * @return \Illuminate\Http\Response
     */
    public function destroy(examen_fisico $examen_fisico)
    {
        //
    }
}
