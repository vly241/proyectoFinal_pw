<aside class="menu-sidebar d-none d-lg-block">
    <div class="logo">
        <a href="#">

            <img src="{{asset('img/cotec.png')}}" alt="Historial Medico Cotecnova"  width="85" height="105"/>

        </a>
    </div>
    <div class="menu-sidebar__content js-scrollbar1">
        <nav class="navbar-sidebar">
            <ul class="list-unstyled navbar__list">
                <li class="active has-sub">
                    <a  href="{{route('est.index')}}">
                        <i class="fas fa-user"></i>estudiantes</a>

                </li>
                <li>
                    <a href="#">
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
                 @else
                    <a href="#">user</a>
                @endif



                <li>
                    <a href="#">
                        <i ><img src="{{asset('img/cerrar.png')}}" height="25" width="25"></i>cerrar sesion</a>

                </li>
            </ul>

        </nav>
    </div>
</aside>
