<?php
include("config/configuracion.php");

$conexion = new mysqli(DB_HOST, DB_USUARIO, DB_PASSWORD, DB_NOMBRE);
$sql = "SELECT * FROM noticias WHERE id = ?";




?>
<div class="card mb-3">
    <img class="card-img-top" src="..." alt="Card image cap">
    <div class="card-body">
        <h4 class="card-title">Card title</h4>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
</div>
<?php
$conexion->close();
?>