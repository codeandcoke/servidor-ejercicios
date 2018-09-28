<?php

if (isset($_REQUEST["pagina"]))
    $pagina = $_REQUEST["pagina"];
else
    $pagina = 1;

include("includes/header.php");

?>
<div class="container">
    <br/>
    <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-center">
            <li class="page-item disabled">
                <a class="page-link" href="#" tabindex="-1">Previous</a>
            </li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
                <a class="page-link" href="#">Next</a>
            </li>
        </ul>
    </nav>
    <div class="card-group">
    <?php
    require_once("includes/configuracion.php");
    require_once("includes/funciones_bbdd.php");

    $conexion = new mysqli(DB_HOST, DB_USUARIO, DB_PASSWORD, DB_NOMBRE);
    if ($conexion->connect_error) {
        echo "<p>Se ha producido un error al conectar con la base de datos</p>";
        exit();
    }

    $numero_fotos = get_cantidad($conexion, "fotos");
    $numero_paginas = $numero_fotos / TAMANO_PAGINA;

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
    <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-center">
            <?php
            for ($i = 0; $i < $numero_paginas; $i++) {
            ?>
                <li class="page-item">
                    <a class="page-link" href="?pagina=<?= $i + 1 ?>">
                        <?= $i + 1 ?>
                    </a>
                </li>
            <?php
            }
            ?>
            <!--
            <li class="page-item disabled">
                <a class="page-link" href="#" tabindex="-1">Previous</a>
            </li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
                <a class="page-link" href="#">Next</a>
            </li>
            -->
        </ul>
    </nav>
    <br/>
</div>
<?php
include("includes/footer.php");
?>
