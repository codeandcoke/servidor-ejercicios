<?php
include("config/configuracion.php");
include("include/funciones.php");

// Recoger los datos del formulario
$usuario = $_POST["usuario"];
$contrasena = $_POST["contrasena"];

// Comprobar en la base de datos
$sql = "SELECT COUNT(*) AS cantidad FROM usuarios WHERE usuario = ? AND " .
    "contrasena = SHA1(?)";
$resultado = lanzar_consulta($sql, array($usuario, $contrasena));
$fila = $resultado->fetch_assoc();
if ($fila["cantidad"] == 0) {
    // No coinciden
    header('Location: http://localhost/login.php?mensaje=Usuario/Contraseña incorrectos');
    exit();
}
// Si coinciden
header('Location: http://localhost/index.php?id=alta_viaje');