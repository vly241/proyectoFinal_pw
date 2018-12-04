<?php

namespace App\Http\Controllers;

use App\impresion_diagnostica;
use App\estudiantes;
use Illuminate\Http\Request;

class ImpresionDiagnosticaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $estudiantes = estudiantes::findOrFail($id);//select * from estudiantes where id= $id


        $d = impresion_diagnostica::all()->where('id_est',$id);//select * from where id_est = $id
        return View('estudiante.diag_index', compact('d','estudiantes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $estudiantes=estudiantes::all();
        $d = impresion_diagnostica::all();
        return View('estudiante.diag_create', compact('d','estudiantes'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(impresion_diagnostica $impresion_diagnostica)
    {
        $data = request()->validate([
            'id_est'=> '',
            'diagnostico'=>'',
            'plan'=>'',
            'paraclinicos'=>'',



        ]);



        $impresion_diagnostica->create($data);
        return redirect()->route('est.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\impresion_diagnostica  $impresion_diagnostica
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $d = impresion_diagnostica::findOrFail($id); //select * from estudiantes where id= $id
        return View('estudiante.diag_show', compact('d'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\impresion_diagnostica  $impresion_diagnostica
     * @return \Illuminate\Http\Response
     */
    public function edit(impresion_diagnostica $impresion_diagnostica)
    {
        return view('estudiante.diag_edit',['impresion_diagnostica'=>$impresion_diagnostica]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\impresion_diagnostica  $impresion_diagnostica
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, impresion_diagnostica $impresion_diagnostica)
    {
        $data = request()->validate([
            'id_est'=> $impresion_diagnostica,
            'diagnostico'=>'',
            'plan'=>'',
            'paraclinicos'=>'',


        ]);



        $impresion_diagnostica->update($data);
        return redirect()->route('d.index',['impresion_diagnostica'=>$impresion_diagnostica]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\impresion_diagnostica  $impresion_diagnostica
     * @return \Illuminate\Http\Response
     */
    public function destroy(impresion_diagnostica $impresion_diagnostica)
    {
        //
    }
}
