<?php
session_start();
if (!isset($_SESSION["usuario"])) {
    header("Location: login.php");
}
include("../config/db.php");
include("../include/funciones.php");

$entrada = $_REQUEST["entrada"];
$db = new Db();
$sql = "DELETE FROM entradas WHERE id = ?";
$db->lanzar_consulta($sql, array($entrada));
$db->desconectar();

header("Location: index.php?id=entradas");