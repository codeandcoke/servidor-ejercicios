<?php
$id_viaje = $_REQUEST["id_viaje"];

$sql = "SELECT * FROM viajes WHERE id = ?";
$resultado = lanzar_consulta($sql, array($id_viaje));
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

