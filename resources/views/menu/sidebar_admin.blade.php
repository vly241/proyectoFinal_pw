<aside class="menu-sidebar d-none d-lg-block">
    <div class="logo">
        @if(Auth::User()->role_id=='1')

        <a href="#">

            <img src="{{asset('img/cotec.png')}}" alt="Historial Medico Cotecnova"  width="85" height="105"/>
            <h3>Administrador</h3>
        </a>
            @else
            <a href="#">

                <img src="{{asset('img/cotec.png')}}" alt="Historial Medico Cotecnova"  width="85" height="105"/>
               <h3>Medico</h3>
            </a>
            @endif
    </div>
    <div class="menu-sidebar__content js-scrollbar1">
        <nav class="navbar-sidebar">
            <ul class="list-unstyled navbar__list">

                <li class="active has-sub">
                    <a  href="{{route('home')}}">
                        <i class="fas fa-inbox"></i>inicio</a>

                </li>
                <li>
                    <a  href="{{route('est.index')}}">
                        <i class="fas fa-user"></i>estudiantes</a>

                </li>
                <li>
                    <a href="{{route('cons.index')}}">
                        <i class="fas fa-book"></i>Agenda</a>
                </li>
                <li>
                    <a href="#">
                        <i class="fas fa-calendar-times"></i>Calendario</a>
                </li>

                @if(Auth::User()->role_id=='1')
                <li>
                    <a href="#">
                        <i class="fas fa-paper-plane"></i>Agendar cita</a>
                </li>

                @endif



                <li>
                    <a href="#">


                </li>
            </ul>

        </nav>
    </div>
</aside>
