<?php
include("config/configuracion.php");
include("include/funciones.php");

$nombre = $_POST["nombre"];
$descripcion = $_POST["descripcion"];
$foto1 = $_FILES["foto1"]["name"];
$tmp_foto1 = $_FILES["foto1"]["tmp_name"];
$foto2 = $_FILES["foto2"]["name"];
$tmp_foto2 = $_FILES["foto2"]["tmp_name"];
$fecha = $_POST["fecha"];
$duracion = $_POST["duracion"];
$precio = $_POST["precio"];

if (isset($_POST["disponible"]))
    $disponible = TRUE;
else
    $disponible = FALSE;

if (isset($_POST["destacado"]))
    $destacado = TRUE;
else
    $destacado = FALSE;

$ruta_foto1 = "img/" . $foto1;
$ruta_foto2 = "img/" . $foto2;

move_uploaded_file($tmp_foto1, $ruta_foto1);
move_uploaded_file($tmp_foto2, $ruta_foto2);

$sql = "INSERT INTO viajes (nombre, descripcion, foto1, foto2, fecha," .
        " duracion, precio, disponible, destacado) VALUES 
        (?, ?, ?, ?, ?, ?, ?, ?, ?)";
$resultado = lanzar_consulta($sql, array($nombre, $descripcion,
    $foto1, $foto2, $fecha, $duracion, $precio, $disponible, $destacado));

//header("Location: http://localhost/index.php?id=alta_viaje");