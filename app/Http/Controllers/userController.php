<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class userController extends Controller
{
    public function index(){
       $estudiantes = DB::table('estudiantes')->get();

        return view('historia.estudiante',compact('estudiantes'));
    }

    public function show($id)
    {
        $estudiantes = DB::table('estudiantes')->get();
        return view('historial.show', compact('estudiantes'));
    }

public  function create(){
        return 'Crear';
}
}
