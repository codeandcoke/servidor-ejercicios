<?php

function lanzar_consulta($sql, $parametros = array()) {
    $conexion = new mysqli(HOST_BD, USUARIO_BD, CONTRASENA_BD, NOMBRE_BD);
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
