<?php
$db = new Db();
$sql = "SELECT E.titulo, E.fecha, E.texto, U.id, U.nombre " .
    "FROM entradas E, usuarios U WHERE E.id_usuario = U.id " .
    "ORDER BY fecha DESC";
$resultado = $db->lanzar_consulta($sql);
while ($fila = $resultado->fetch_assoc()) {
    $titulo = $fila["titulo"];
    $fecha = $fila["fecha"];
    $nombre = $fila["nombre"];
    $id_usuario = $fila["id"];
    $texto = $fila["texto"];
    ?>
    <div class="blog-post">
        <h2 class="blog-post-title"><?= $titulo ?></h2>
        <p class="blog-post-meta"><?= $fecha ?> por
            <a href="?id=autor&id_usuario=<?= $id_usuario ?>"><?= $nombre ?></a></p>
        <?= $texto ?>
    </div>
    <?php
}
?>
<nav class="blog-pagination">
    <a class="btn btn-outline-primary disabled" href="?i=0">Más antiguas</a>
    <a class="btn btn-outline-primary disabled" href="?i=0">Más nuevas</a>
</nav>
