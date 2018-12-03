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



                <!-- Page Header-->
                <header class="page-header">
                    <div class="container-fluid">
                        <h2 class="no-margin-bottom">Consultas</h2>
                    </div>
                </header>



                <!-- Breadcrumb-->
                <div class="breadcrumb-holder container-fluid">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                        <li class="breadcrumb-item active">consultas</li>
                    </ul>
                </div>

                <!-- busqueda-->
                <form action="{{route('cons.index')}}" class="form-inline" method="get">
                    <input  type="text" class="form-control" name="buscar" value="{{ isset($buscar) ? $buscar : '' }}" placeholder="ingrese nombre">
                    <input  type="submit" value="Buscar" class="btn btn-success">
                </form>


                <!-- Dashboard Counts Section-->
                <section class="dashboard-counts no-padding-bottom">
                    <div class="container-fluid">
                        <div class="bg-white has-shadow">
                            @if(Auth::User()->role_id=='1')
                                <div class="row col-sm-8 col-sm-offset-2" >
                                    <button onclick="window.location='#'" type="button" class="btn btn-info"><span class="fa fa-plus"></span> Nuevo</button>
                                </div>
                            @endif
                            <table id="example" class="table table-bordered table-striped table-condensed" style="text-align: center;">
                                <thead >
                                <tr>

                                    <th>identificacion</th>
                                    <th>Nombre</th>
                                    <th>dia</th>
                                    <th>hora</th>


                                </tr>
                                </thead>
                                <tbody >

                                @foreach($estudiante as $est )
                                    @foreach($consulta as $con)
                                    <tr>
                                        <td>{{ $est->identificacion}}</td>
                                        <td>{{ $est->nombre}}</td>
                                        <td>{{ $con->dia}}</td>
                                        <td>{{ $con->hora}}</td>
                                        <td>
                                            <a href="{{route('est.show',['id'=>$est->id]) }}" class="fas fa-eye"></a>
                                        </td>
                                        @if(Auth::User()->role_id=='1')
                                            <td>

                                                <a href="{{route('est.edit',['id'=>$est->id])}}" class="btn btn-warning" class="btn btn-primary"><img src="{{asset('img/edit.png')}}" alt="editar" width="20px" href="20px"></a>
                                            </td>
                                            <td>
                                                <form action="{{route('est.destroy', ['id'=>$est->id])}}" method="POST">
                                                    {{ method_field('DELETE') }}
                                                    @csrf
                                                    <button onclick="return confirm('Eliminar registro?')" type="submit" class="btn btn-danger btn-sm"><i class='fa fa-trash'></i></button>
                                                </form></td>



                                        @endif
                                    </tr>
                                    @endforeach
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </section>


                <!-- END MAIN CONTENT-->
            </div>

        </div>
    </div>


@endsection
