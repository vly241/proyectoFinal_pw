<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class userController extends Controller
{
    public function index(){
        $users = DB::table('users')->get();

        return view('historia.estudiante',compact('users'));
    }

    public function show($id){
        return view('historia.show',compact('id'));
}

public  function create(){
        return 'Crear';
}
}
