<div class="row">
    <?php
    include("config/configuracion.php");

    $conexion = new mysqli(DB_HOST, DB_USUARIO, DB_PASSWORD, DB_NOMBRE);
    $sql = "SELECT id, nombre, foto1, descripcion FROM viajes " .
        "WHERE destacado = TRUE " .
        "ORDER BY RAND() LIMIT 3";
    $sentencia = $conexion->prepare($sql);
    $sentencia->execute();
    $resultado = $sentencia->get_result();
    while ($fila = $resultado->fetch_assoc()) {
        ?>
        <div class="card" style="width: 20rem;">
            <img class="card-img-top" src="img/<?= $fila["foto1"] ?>" alt="Card image cap">
            <div class="card-body">
                <h4 class="card-title"><?= $fila["nombre"] ?></h4>
                <p class="card-text"><?= $fila["descripcion"] ?></p>
                <a href="index.php?id=viaje&id_viaje=<?= $fila["id"] ?>"
                   class="btn btn-primary">Leer más</a>
            </div>
        </div>
        <?php
    }
    ?>
</div>