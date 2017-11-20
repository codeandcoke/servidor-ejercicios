<?php
session_start();
if (!isset($_SESSION["usuario"])) {
    header("Location: login.php");
}
include("../include/funciones.php");

$titulo = $_POST["titulo"];
$texto = $_POST["texto"];
$fecha = date("Y-m-d");
$id_autor = $_SESSION["id"];

$sql = "INSERT INTO entradas (titulo, texto, fecha, id_autor) " .
    "VALUES (?, ?, ?, ?)";
lanzar_consulta($sql, array($titulo, $texto, $fecha, $id_autor));

header("Location: entradas.php");
