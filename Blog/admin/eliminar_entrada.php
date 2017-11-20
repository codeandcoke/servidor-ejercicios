<?php
session_start();
if (!isset($_SESSION["usuario"])) {
    header("Location: login.php");
}
include("../include/funciones.php");

$entrada = $_REQUEST["entrada"];
$sql = "DELETE FROM entradas WHERE id = ?";
lanzar_consulta($sql, array($entrada));

header("Location: entradas.php");