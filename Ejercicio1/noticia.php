<br/>
<?php
$id_noticia = $_REQUEST["id_noticia"];

include("config/configuracion.php");

$conexion = new mysqli(DB_HOST, DB_USUARIO, DB_PASSWORD, DB_NOMBRE);
$sql = "SELECT * FROM noticias WHERE id = ?";
$sentencia = $conexion->prepare($sql);
$sentencia->bind_param("i", $id_noticia);
$sentencia->execute();
$resultado = $sentencia->get_result();
$noticia = $resultado->fetch_row();
?>
<div class="card mb-3" style="width: 300px;">
    <img class="card-img-top" src="img/noticia.jpg" alt="Imagen de noticia">
    <div class="card-body">
        <h4 class="card-title"><?= $noticia[1] ?></h4>
        <p class="card-text"><?= $noticia[2] ?></p>
        <p class="card-text"><small class="text-muted"><?= $noticia[4] ?></small></p>
    </div>
</div>
<?php
$sentencia->close();
$conexion->close();
?>