<?php
function get_cantidad($conexion, $nombre_tabla, $where) {

    $sql = "SELECT COUNT(*) FROM " . $nombre_tabla . $where;
    $sentencia = $conexion->prepare($sql);
    $sentencia->execute();
    $resultado = $sentencia->get_result();
    $fila = $resultado->fetch_row();
    $cantidad = $fila[0];

    return $cantidad;
}
