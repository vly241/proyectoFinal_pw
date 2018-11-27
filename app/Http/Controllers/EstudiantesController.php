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
        $estudiantes = estudiantes::all();
        return View('historia.create', compact('estudiantes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {

        $data = request()->validate([
            'identificacion'=> '',
            'nombre' => 'required',
            'apellidos'=>'',
            'origen'=>'',
            'telefono'=>'',
            'direccion'=>'',
            'escolaridad'=>'',
            'ocupacion'=>'',
            'edad'=>'',
            'email'=>['required','email','unique:estudiantes,email'],
            'foto'=>'',
        ],[
            'nombre.required' => 'el campo nombre es necesario'
        ]);

          estudiantes::create([
         'identificacion'=> $data['identificacion'],
         'nombre'=>$data['nombre'],
         'apellidos'=>$data['apellidos'],
         'origen'=>$data['origen'],
         'telefono'=>$data['telefono'],
         'direccion'=>$data['direccion'],
         'escolaridad'=>$data['escolaridad'],
         'ocupacion'=>$data['ocupacion'],
         'edad'=>$data['edad'],
         'email'=>$data['email'],
         'foto'=>$data['foto'],


     ]);
     return redirect()->route('est.index');


      /*  $nombre = 'img/default.png';

        if($request->hasFile('foto')){
            $archivo = $request->file('foto');
            $nombre = 'img/'.time().'-'.$archivo->getClientOriginalName();
            $archivo->move(public_path().'/img/',$nombre);
        }

        $estudiantes = new estudiantes();
        $estudiantes->identificacion = $request->input('identificacion');
        $estudiantes->nombre = $request->input('nombre');
        $estudiantes->apellidos = $request->input('apellidos');
        $estudiantes-> origen= $request->input('origen');
        $estudiantes-> telefono= $request->input('telefono');
        $estudiantes-> direccion= $request->input('direccion');
        $estudiantes->escolaridad = $request->input('escolaridad');
        $estudiantes-> ocupacion= $request->input('ocupacion');
        $estudiantes-> edad= $request->input('edad');
        $estudiantes->email = $request->input('email');

        $estudiantes->foto = $nombre;
        $estudiantes->save();
        return redirect(route('est.index'));*/
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
