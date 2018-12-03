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
                  <a href="{{route('est.show',['id'=>$estudiantes->id])}}" ><img src="{{asset('img/volver.png')}}" alt="volver" width="30px" href="30px"></a>
                     <br><br>


                <section class="dashboard-counts no-padding-bottom">
                    <div class="container-fluid">
                        <div class="bg-white has-shadow">
                            <div class="row col-sm-8 col-sm-offset-2" >
                                <button onclick="window.location='{{route('df.create',['id'=>$estudiantes->id])}}'" type="button" class="btn btn-info"><span class="fa fa-plus"></span> Nuevo</button>
                            </div>
                            <table id="example" class="table table-bordered table-striped table-condensed" style="text-align: center;">
                                <thead >
                                <tr>

                                    <th>descripcion</th>
                                    <th>pariente</th>



                                </tr>
                                </thead>
                                <tbody >

                               @foreach($af as $af)


                                <tr>

                                    <td>{{ $af->descripcion}}</td>

                                    <td>{{ $af->pariente}}</td>

                                    <td><a href="{{route('df.edit',['id'=>$af->id])}}"  class="btn btn-primary"><img src="{{asset('img/edit.png')}}" alt="editar" width="20px" href="20px"></a></td>

                                </tr>
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
