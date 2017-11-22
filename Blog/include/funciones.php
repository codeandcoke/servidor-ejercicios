<?php
class Db {

    private $conexion;

    function __construct() {
        $this->conectar();
    }

    function conectar() {
        $this->conexion = new mysqli(HOST_BD, USUARIO_BD,
            CONTRASENA_BD, NOMBRE_BD);
    }

    function desconectar() {
        $this->conexion->close();
    }

    function ultimo_id() {
        return $this->conexion->insert_id;
    }

    function lanzar_consulta($sql, $parametros = array()) {

        $sentencia = $this->conexion->prepare($sql);
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

        return $resultado;
    }

}