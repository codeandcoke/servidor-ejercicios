<?php
if (isset($_REQUEST["dia"]))
    $dia = $_REQUEST["dia"];
else
    $dia = "lunes";
?>
<br/>
<p>Programación de la semana</p>
<div class="card text-center">
    <div class="card-header">
        <ul class="nav nav-pills card-header-pills">
            <li class="nav-item">
                <a class="nav-link active" href="?id=series&dia=lunes">Lunes</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="?id=series&dia=martes">Martes</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="?id=series&dia=miercoles">Miércoles</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="?id=series&dia=jueves">Jueves</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="?id=series&dia=viernes">Viernes</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="?id=series&dia=sabado">Sábado</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="?id=series&dia=domingo">Domingo</a>
            </li>
        </ul>
    </div>
    <div class="card-body">
        <h4 class="card-title">Programación del Lunes</h4>
        <div class="alert alert-primary" role="alert">
            21:00h Los Serrano
            <a href="#" class="alert-link">Leer más</a>
        </div>
        <div class="alert alert-primary" role="alert">
            22:00h Farmacia de Guardia
            <a href="#" class="alert-link">Leer más</a>
        </div>
        <div class="alert alert-primary" role="alert">
            23:30h Médico de Familia
            <a href="#" class="alert-link">Leer más</a>
        </div>
    </div>
</div>