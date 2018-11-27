@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="page-wrapper">
            <!-- HEADER MOBILE-->
            @include('admin.header_admin_movil');
            <!-- END HEADER MOBILE-->

            <!-- MENU SIDEBAR-->
            @include('admin.sidebar_admin');
            <!-- END MENU SIDEBAR-->


            <div class="page-container" >
                <!-- MAIN CONTENT-->

                <h2>Estudiantes</h2>
                <p>estudiantes cotecnova:</p>

                <h1>Listado estudiantes:</h1>
                {{--<form action="{{route('est.index')}}" class="form-inline" method="get">
                <input type="text" class="form-control" name="buscar" value="{{ isset($buscar) ? $buscar : '' }}" placeholder="ingrese dato">
                <input type="submit" value="Buscar" class="btn btn-success">
                </form>--}}

                <br>

                <a href="{{route('est.create')}}" class="btn btn-primary">Crear Nuevo estudiante</a>
                <br>
                <table id="example" class="display" style="width:100%">
                    <thead>
                    <tr>
                        <th>identificacion</th>
                        <th>Nombre</th>
                        <th>apellido</th>
                        <th>edad</th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse($estudiantes as $est)
                        <tr>
                            <td>
                                {{ $est->identificacion}}
                            </td>
                            <td>
                                {{ $est->nombre}}
                            </td>
                            <td>
                                {{ $est->apellidos}}
                            </td>
                            <td>
                                {{ $est->edad}}
                            </td>
                            <td>
                                <a href="{{route('est.show',['id'=>$est->id]) }}" class="fas fa-eye"></a>
                                <a href="{{route('est.edit',['id'=>$est->id])}}" class="btn btn-warning" class="btn btn-primary">editar</a>
                                <form action="{{route('est.destroy', ['id'=>$est->id])}}" method="POST">
                                    {{ method_field('DELETE') }}
                                    @csrf
                                    <input type="submit" class="btn btn-danger"  value="eliminar">
                                </form>
                            </td>
                        </tr>
                    @empty
                        <div class="alert alert-info">
                            <p>Tu busquedad no produjo resultados</p>
                        </div>
                    @endforelse
                    </tbody>
                </table>


                <!-- END MAIN CONTENT-->
            </div>

        </div>
    </div>
@endsection
