@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="page-wrapper">
            <!-- MENU SIDEBAR-->
        @include('menu.sidebar_admin')
        <!-- END MENU SIDEBAR-->
            <div class="page-container" >
                <!-- MAIN CONTENT-->
                @include('menu.adminEstudiante')

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

                                    <th>fecha y hora consultas</th>




                                </tr>
                                </thead>
                                <tbody >

                                @foreach($ef as $ef)


                                    <tr>

                                        <td>{{ $ef->created_at}}</td>


                                        <td>
                                            <a href="{{route('hm.show',['id'=>$ef->id])}}" class="fas fa-eye"></a>
                                        </td>
                                        @if(Auth::User()->role_id=='1')
                                            <td>

                                                <a href="#" class="btn btn-warning" class="btn btn-primary"><img src="{{asset('img/edit.png')}}" alt="editar" width="20px" href="20px"></a>
                                            </td>
                                            <td>
                                                <form action="#" method="POST">
                                                    {{ method_field('DELETE') }}
                                                    @csrf
                                                    <button onclick="return confirm('Eliminar registro?')" type="submit" class="btn btn-danger btn-sm"><i class='fa fa-trash'></i></button>
                                                </form></td>



                                        @endif
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
