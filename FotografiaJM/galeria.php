<?php
include("includes/header.php");
require_once("includes/configuracion.php");
require_once("includes/funciones_bbdd.php");

if (isset($_REQUEST["pagina"]))
    $pagina = $_REQUEST["pagina"];
else
    $pagina = 1;

$conexion = new mysqli(DB_HOST, DB_USUARIO, DB_PASSWORD, DB_NOMBRE);
if ($conexion->connect_error) {
    echo "<p>Se ha producido un error al conectar con la base de datos</p>";
    exit();
}

$numero_fotos = get_cantidad($conexion, "fotos");
$numero_paginas = ceil($numero_fotos / TAMANO_PAGINA);
?>
<div class="container">
    <br/>
    <?php
    include("includes/paginador.php");
    ?>
    <div class="card-group">
        <?php
        $sql = "SELECT * FROM fotos LIMIT " .
            ($pagina - 1) * TAMANO_PAGINA . ", " . TAMANO_PAGINA;
        $sentencia = $conexion->prepare($sql);
        $sentencia->execute();
        $resultado = $sentencia->get_result();
        while ($fila = $resultado->fetch_row()) {
            ?>
            <div class="card">
                <img class="card-img-top" src="<?= PATH_IMAGENES . $fila[3] ?>"
                     alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title"><?= $fila[1] ?></h5>
                    <p class="card-text"><?= $fila[2] ?></p>
                </div>
                <div class="card-footer">
                    <small class="text-muted"><?= $fila[5] ?></small>
                </div>
            </div>
            <?php

        }
        $sentencia->close();
        $conexion->close();
        ?>
    </div>

    <br/>
    <?php
    include("includes/paginador.php");
    ?>
    <br/>
</div>
<?php
include("includes/footer.php");
?>
