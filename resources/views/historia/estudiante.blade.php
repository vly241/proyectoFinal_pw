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

                <ul>
                    @forelse($estudiantes as $est)

                       <li>{{$est->identificacion}}, {{$est->nombre}}
                           <a href="{{url('/user/.$est->id')}}">detalle</a>
                       </li>
                    @empty
                        <li>no hay nada</li>
                    @endforelse
                </ul>



                <!-- END MAIN CONTENT-->
            </div>

        </div>
    </div>
@endsection
