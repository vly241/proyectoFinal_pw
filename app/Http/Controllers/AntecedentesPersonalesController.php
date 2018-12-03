<?php

namespace App\Http\Controllers;

use App\antecedentes_personales;
use App\estudiantes;
use Illuminate\Http\Request;

class AntecedentesPersonalesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $estudiantes = estudiantes::findOrFail($id);//select * from estudiantes where id= $id


        $ap = antecedentes_personales::where('id_est', $id)->first();//select * from where id_est = $id
        return View('estudiante.dp', compact('ap','estudiantes'));

    }


    public function edit(antecedentes_personales $antecedentes_personales)
    {

        return view('estudiante.edit_dp',['antecedentes_personales'=>$antecedentes_personales]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\antecedentes_personales  $antecedentes_personales
     * @return \Illuminate\Http\Response
     */
    public function update(antecedentes_personales $antecedentes_personales)
    {
        $data = request()->validate([
            'id_est'=> $antecedentes_personales,
            'hospitalarios'=>'',
            'traumaticos'=> '',
            'psiquiatricos'=> '',
            'transfusiones'=> '',
            'farmacologicos'=> '',
            'toxicos'=> '',
            'quirurgicos'=> '',
            'patologicos'=> '',
            'gine_menarquia'=> '',
            'gine_ciclos'=> '',
            'gine_FUP'=> '',
            'gine_citologicos'=> '',
            'gine_planificacion'=> '',


        ]);



        $antecedentes_personales->update($data);
        return redirect()->route('est.dp',['antecedentes_personales'=>$antecedentes_personales]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\antecedentes_personales  $antecedentes_personales
     * @return \Illuminate\Http\Response
     */

}
