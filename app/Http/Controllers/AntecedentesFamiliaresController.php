<?php

namespace App\Http\Controllers;

use App\antecedentes_familiares;
use App\estudiantes;
use Illuminate\Http\Request;

class AntecedentesFamiliaresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $estudiantes = estudiantes::findOrFail($id);//select * from estudiantes where id= $id

        $af = antecedentes_familiares::all()->where('id_est',$id);//select * from  antecedentes_familiares where id_est = $id
        return View('estudiante.df', compact('af','estudiantes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(antecedentes_familiares $antecedentes_familiares)
    {

        return view('estudiante.df_crear',['antecedentes_familiares'=>$antecedentes_familiares]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(antecedentes_familiares $antecedentes_familiares)
    {


        $data = request()->validate([
            'id_est'=>$antecedentes_familiares,
            'descripcion'=>'',
            'pariente'=> '',



        ]);



        estudiantes::create([
            'id_est'=> $data['id_est'],
            'descripcion'=>$data['descripcion'],
            'pariente'=>$data['pariente'],


        ]);
        return redirect()->route('est.df');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\antecedentes_familiares  $antecedentes_familiares
     * @return \Illuminate\Http\Response
     */
    public function show(antecedentes_familiares $antecedentes_familiares)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\antecedentes_familiares  $antecedentes_familiares
     * @return \Illuminate\Http\Response
     */
    public function edit(antecedentes_familiares $antecedentes_familiares)
    {
        return view('estudiante.df_edit',['antecedentes_familiares'=>$antecedentes_familiares]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\antecedentes_familiares  $antecedentes_familiares
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, antecedentes_familiares $antecedentes_familiares)
    {
        $data = request()->validate([
            'id_est'=> $antecedentes_familiares,
            'descripcion'=>'',
            'pariente'=> '',



        ]);



        $antecedentes_familiares->update($data);
        return redirect()->route('est.df',['antecedentes_familiares'=>$antecedentes_familiares]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\antecedentes_familiares  $antecedentes_familiares
     * @return \Illuminate\Http\Response
     */
    public function destroy(antecedentes_familiares $antecedentes_familiares)
    {
        //
    }
}
