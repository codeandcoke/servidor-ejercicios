<?php
include("config/db.php");
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
    header('Location: login.php?mensaje=Usuario/Contraseña incorrectos');
    exit();
}
// Si coinciden
session_start();
$_SESSION["usuario"] = $usuario;
header('Location: admin');