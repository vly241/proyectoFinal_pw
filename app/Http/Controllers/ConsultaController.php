<?php

namespace App\Http\Controllers;

use App\consulta;
use App\estudiantes;
use Illuminate\Http\Request;

class ConsultaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->input('buscar')){
            $buscar = $request->input('buscar');
            $estudiantes = estudiantes::where('nombre', 'LIKE','%'.$buscar.'%')->get();
            return View('consulta.consulta', compact('estudiantes', 'buscar'));
        }
        $consulta = consulta::all();
        $estudiante = estudiantes::all();
        return View('consulta.consulta', compact('consulta','estudiante'));
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
     * @param  \App\consulta  $consulta
     * @return \Illuminate\Http\Response
     */
    public function show(consulta $consulta)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\consulta  $consulta
     * @return \Illuminate\Http\Response
     */
    public function edit(consulta $consulta)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\consulta  $consulta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, consulta $consulta)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\consulta  $consulta
     * @return \Illuminate\Http\Response
     */
    public function destroy(consulta $consulta)
    {
        //
    }
}
