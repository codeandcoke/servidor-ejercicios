<?php
session_start();
if (!isset($_SESSION["usuario"])) {
    header("Location: login.php");
}
include("../config/db.php");
include("../include/funciones.php");

$titulo = $_POST["titulo"];
$texto = $_POST["texto"];
$fecha = date("Y-m-d");
$id_autor = $_SESSION["id"];
$etiquetas = $_POST["etiquetas"];
$etiquetas = explode(",", $etiquetas);

$sql = "INSERT INTO entradas (titulo, texto, fecha, id_usuario) " .
    "VALUES (?, ?, ?, ?)";
lanzar_consulta($sql, array($titulo, $texto, $fecha, $id_autor));

$id_entrada = mysqli_insert_id();
foreach ($etiquetas as $etiqueta) {
    $sql = "INSERT INTO etiquetas (etiqueta, id_entrada) VALUES " .
        "(?, ?)";
    lanzar_consulta($sql, array($etiqueta, $id_entrada));
}

header("Location: index.php?id=entradas");
