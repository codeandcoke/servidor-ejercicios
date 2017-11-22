<?php
include("config/db.php");
include("include/funciones.php");

// Recoger los datos del formulario
$usuario = $_POST["usuario"];
$contrasena = $_POST["contrasena"];

// Comprobar en la base de datos
$db = new Db();
$sql = "SELECT id FROM usuarios WHERE usuario = ? AND " .
    "contrasena = SHA1(?)";
$resultado = $db->lanzar_consulta($sql, array($usuario, $contrasena));
$db->desconectar();
if ($resultado->num_rows == 0) {
    // No coinciden
    header('Location: login.php?mensaje=Usuario/Contraseña incorrectos');
    exit();
}
// Si coinciden
session_start();
$fila = $resultado->fetch_assoc();
$_SESSION["usuario"] = $usuario;
$_SESSION["id"] = $fila["id"];
header('Location: admin');