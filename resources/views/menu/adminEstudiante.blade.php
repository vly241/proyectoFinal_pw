

<br>
<img src="{{asset($estudiantes->foto)}}" align="left" width="30%" href="30%">
<h1 align="center">estudiante {{$estudiantes->nombre}}</h1><br>
<h3 align="center">{{$estudiantes->apellidos}}</h3><br>
<h4 align="center"> CC: {{$estudiantes->identificacion}}</h4><br>
<h4 align="center">ultima consulta:</h4><br><br>



<nav class="nav nav-pills nav-fill">
    <li class="nav-item">
        <a class="nav-link disabled" href="#">Datos Generales</a>
    </li>
    <a class="nav-item nav-link active" href="#">Historial Médico</a>
    <a class="nav-item nav-link active" href="#">Diagnóstico</a>
    <a class="nav-item nav-link active" href="#">Anexos</a>
</nav>
