@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="page-wrapper">

            <!-- END HEADER MOBILE-->

            <!-- MENU SIDEBAR-->
            @include('menu.sidebar_admin')
            <!-- END MENU SIDEBAR-->

            <div class="page-container" >
                <!-- MAIN CONTENT-->
            @include('menu.adminEstudiante')

                <br><br>
                <nav class="nav nav-pills nav-fill">

                    <a class="nav-item nav-link active" href="{{route('est.dp',['id'=>$estudiantes->id]) }}">antecedentes personales</a>
                    <a class="nav-item nav-link active" href="{{route('est.df',['id'=>$estudiantes->id]) }}">antecedentes familiares</a>

                </nav>
                <br>
                @if(Auth::User()->role_id=='1')
                <a href="{{route('est.edit',['id'=>$estudiantes->id])}}" class="btn btn-warning" class="btn btn-primary">editar</a>
                <br><br>
                @endif

                <div class="card">
                    <div class="card-body">
                       <h4>escolaridad:  {{$estudiantes->escolaridad}}</h4>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h4>origen:  {{$estudiantes->origen}}</h4>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h4>telefono:  {{$estudiantes->telefono}}</h4>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h4>direccion:  {{$estudiantes->direccion}}</h4>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h4>ocupacion:  {{$estudiantes->ocupacion}}</h4>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h4>edad:  {{$estudiantes->edad}}</h4>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h4>email:  {{$estudiantes->email}}</h4>
                    </div>
                </div>
                 <!-- END MAIN CONTENT-->


        </div>
        </div>
    </div>
@endsection
