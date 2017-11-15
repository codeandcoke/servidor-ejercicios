<?php

function lanzar_consulta($sql, $parametros = array()) {
    $conexion = new mysqli(DB_HOST, DB_USUARIO, DB_PASSWORD, DB_NOMBRE);
    $sentencia = $conexion->prepare($sql);
    if (!empty($parametros)) {
        $tipos = "";
        foreach ($parametros as $parametro) {
            if (gettype($parametro) == "string")
                $tipos = $tipos . "s";
            else
                $tipos = $tipos . "i";
        }
        $sentencia->bind_param($tipos, ...$parametros);
    }

    $sentencia->execute();
    $resultado = $sentencia->get_result();
    $sentencia->close();
    $conexion->close();

    return $resultado;
}
