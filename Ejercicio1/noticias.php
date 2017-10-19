<?php
include("config/configuracion.php");

$conexion = new mysqli(DB_HOST, DB_USUARIO, DB_PASSWORD, DB_NOMBRE);
$sql = "SELECT id, titulo, SUBSTR(texto, 100) AS extracto FROM noticias";
$sentencia = $conexion->prepare($sql);
$sentencia->execute();
$resultado = $sentencia->get_result();
while ($fila = $resultado->fetch_row()) {
?>
    <!-- Extracto de noticia -->
    <div class="card" style="width: 20rem;">
        <img class="card-img-top" src="..." alt="Imagen de noticia">
        <div class="card-body">
            <h4 class="card-title"><?= $fila["titulo"] ?></h4>
            <p class="card-text"><?= $fila["extracto"] ?></p>
            <a href="?id=noticia&id_noticia=<?php $fila["id"] ?>"
               class="btn btn-primary">Leer más</a>
        </div>
    </div>
<?php
}
$sentencia->close();
$conexion->close();
?>