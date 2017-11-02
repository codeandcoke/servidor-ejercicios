<?php
$texto = $_REQUEST["texto"];

$sql = "SELECT * FROM viajes WHERE LOCATE(?, nombre) > 0";
$resultado = lanzar_consulta($sql, array($texto));
while ($viaje = $resultado->fetch_assoc()) {
    ?>
    <div class="col-md-4">
        <img class="card-img-top" src="img/<?= $viaje["foto1"] ?>" alt="Card image cap">
        <div class="card-body">
            <h4 class="card-title"><?= $viaje["nombre"] ?></h4>
            <p class="card-text"><?= $viaje["descripcion"] ?></p>
            <p class="card-text">
                <small class="text-muted">Precio: <?= $viaje["precio"] ?> €</small>
            </p>
        </div>
    </div>
    <?php
}
?>