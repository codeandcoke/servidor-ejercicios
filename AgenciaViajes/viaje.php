<?php
include("config/configuracion.php");

$id_viaje = $_REQUEST["id_viaje"];

$conexion = new mysqli(DB_HOST, DB_USUARIO, DB_PASSWORD, DB_NOMBRE);
$sql = "SELECT * FROM viajes WHERE id = ?";
$sentencia = $conexion->prepare($sql);
$sentencia->bind_param("i", $id_viaje);
$sentencia->execute();
$resultado = $sentencia->get_result();
$viaje = $resultado->fetch_assoc();
?>
<div class="card mb-3">
    <img class="card-img-top" src="img/<?= $viaje["foto1"] ?>" alt="Card image cap">
    <div class="card-body">
        <h4 class="card-title"><?= $viaje["nombre"] ?></h4>
        <p class="card-text"><?= $viaje["descripcion"] ?></p>
        <p class="card-text">
            <small class="text-muted">Precio: <?= $viaje["precio"] ?> €</small></p>
    </div>
</div>

