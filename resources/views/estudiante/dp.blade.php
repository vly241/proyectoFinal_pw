@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="page-wrapper">
            <!-- HEADER MOBILE-->
            @include('menu.header_admin_movil');
            <!-- END HEADER MOBILE-->

            <!-- MENU SIDEBAR-->
            @include('menu.sidebar_admin');
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
                <a href="{{route('est.show',['id'=>$ap->id_est])}}" ><img src="{{asset('img/volver.png')}}" alt="volver" width="30px" href="30px"></a>
                <br><br>
                <a href="{{route('dp.edit',['id'=>$ap->id])}}" class="btn btn-warning" class="btn btn-primary">editar</a>
                <br><br>

                <div class="card">
                    <div class="card-body">
                        <h4>   Hospitalarios:  {{$ap->hospitalarios}}</h4>
                    </div>
                </div>

                <div class="card">
                    <div class="card-body">
                        <h4>  Traumaticos: {{$ap->traumaticos}}</h4>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h4>Psiquiatricos:  {{$ap->psiquiatricos}}</h4>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h4>Transfusiones:  {{$ap->transfusiones}}</h4>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h4>Farmacologicos: {{$ap->farmacologicos}}</h4>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h4>toxicos: {{$ap->toxicos}}</h4>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h4>Quirurgicos: {{$ap->quirurgicos}}</h4>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h4>Patologicos:  {{$ap->patologicos}}</h4>
                    </div>
                </div>
                <div class="card">
                    <h3>   Ginecologia</h3>
                    <div class="card-body">
                        <h4>Menarquia: {{$ap->gine_menarquia}}</h4>
                        <h4>Ciclos: {{$ap->gine_ciclos}}</h4>
                        <h4>FUP:  {{$ap->gine_FUP}}</h4>
                        <h4>Citologicos: {{$ap->gine_citologicos}}</h4>
                        <h4>Planificacion: {{$ap->gine_planificacion}}</h4>
                    </div>
                </div>
                    <!-- END MAIN CONTENT-->
                </div>

            </div>

        </div>
@endsection
