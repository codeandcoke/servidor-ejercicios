<?php
session_start();
if (!isset($_SESSION["usuario"])) {
    header("Location: login.php");
}
include("../config/db.php");
include("../include/funciones.php");

$id = $_POST["id"];
$titulo = $_POST["titulo"];
$texto = $_POST["texto"];

$db = new Db();
$sql = "UPDATE entradas SET titulo = ?, texto = ? WHERE id = ?";
$db->lanzar_consulta($sql, array($titulo, $texto, $id));
$db->desconectar();
header("Location: index.php?id=entradas");
