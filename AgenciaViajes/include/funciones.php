<?php

function lanzar_consulta($sql, $parametro = null) {
    $conexion = new mysqli(DB_HOST, DB_USUARIO, DB_PASSWORD, DB_NOMBRE);
    $sentencia = $conexion->prepare($sql);
    if ($parametro != null) {
        $sentencia->bind_param("i", $parametro);
    }
    $sentencia->execute();
    $resultado = $sentencia->get_result();
    $sentencia->close();
    $conexion->close();

    return $resultado;
}
