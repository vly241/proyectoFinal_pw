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
                <table class="table table-dark">
                    <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Nombre</th>
                        <th>Nombre</th>

                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>
                                @forelse($users as $user)
                                    <li>{{$user->name}}</li>
                                @empty
                                    <li>no hay nada</li>
                                @endforelse
                            </td>


                    </tr>

                    </tbody>
                </table>




                <!-- END MAIN CONTENT-->
            </div>

        </div>
    </div>
@endsection
