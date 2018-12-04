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
                                <button onclick="window.location='{{route('d.create')}}'" type="button" class="btn btn-info"><span class="fa fa-plus"></span> Nuevo</button>
                            </div>
                            <table id="example" class="table table-bordered table-striped table-condensed" style="text-align: center;">
                                <thead >
                                <tr>

                                    <th>fecha y hora consultas</th>




                                </tr>
                                </thead>
                                <tbody >

                                @foreach($d as $d)


                                    <tr>

                                        <td>{{ $d->created_at}}</td>


                                        <td>
                                            <a href="{{route('d.show',['id'=>$d->id])}}" class="fas fa-eye"></a>
                                        </td>
                                        @if(Auth::User()->role_id=='1')
                                            <td>

                                                <a href="{{route('d.edit',['id'=>$d->id])}}" class="btn btn-warning" class="btn btn-primary"><img src="{{asset('img/edit.png')}}" alt="editar" width="20px" href="20px"></a>
                                            </td>




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
