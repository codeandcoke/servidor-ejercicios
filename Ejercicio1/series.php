<?php
if (isset($_REQUEST["dia"]))
    $dia = $_REQUEST["dia"];
else
    $dia = "Lunes";
?>
<br/>
<p>Programación de la semana</p>
<div class="card text-center">
    <div class="card-header">
        <ul class="nav nav-pills card-header-pills">
<?php
    $dias = array("Lunes", "Martes", "Miércoles", "Jueves",
        "Viernes", "Sábado", "Domingo");

    foreach ($dias as $diasemana) {
?>
        <li class="nav-item">
            <a class="nav-link
            <?php if ($dia == $diasemana) echo "active"; ?>"
               href="?id=series&dia=<?= $diasemana ?>">
                <?= $diasemana ?></a>
        </li>
<?php
    }
?>
        </ul>
    </div>
    <div class="card-body">
        <h4 class="card-title">Programación del <?= $dia ?></h4>
<?php
include("config/configuracion.php");

$conexion = new mysqli(DB_HOST, DB_USUARIO, DB_PASSWORD, DB_NOMBRE);
$sql = "SELECT id, hora, nombre FROM series WHERE dia = ? " .
        "ORDER BY hora";
$sentencia = $conexion->prepare($sql);
$sentencia->bind_param("s", $dia);
$sentencia->execute();
$resultado = $sentencia->get_result();
while ($fila = $resultado->fetch_row()) {
?>
        <div class="alert alert-primary" role="alert">
            <?= $fila[1] ?> <?= $fila[2] ?>
            <a href="?id=serie&capitulo=<?= $fila[0] ?>"
               class="alert-link">Leer más</a>
        </div>
<?php
}
?>
    </div>
</div>