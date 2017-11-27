<?php
require("../libs/fpdf/fpdf.php");
require("../config/db.php");
require("../include/funciones.php");

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont("Times", 'B', 20);
$pdf->Cell(120, 10, "Informe de actividad");
$pdf->SetFont("Times", 'B', 15);
$pdf->Cell(10, 10, date("d-m-Y"));
$pdf->Ln();
$pdf->Ln();
$pdf->SetFont("Times", '', 15);
$db = new Db();
$sql = "SELECT E.titulo, E.fecha, U.nombre " .
    "FROM entradas E, usuarios U " .
    "WHERE E.id_usuario = U.id " .
    "ORDER BY E.id DESC";
$resultado = $db->lanzar_consulta($sql);
while ($fila = $resultado->fetch_assoc()) {
    $titulo = $fila["titulo"];
    $fecha = $fila["fecha"];
    $nombre = $fila["nombre"];

    $pdf->Cell(40, 10, "Entrada: " .  $titulo .
        " | Autor: " . $nombre . " | Fecha: " .
        date("d-m-Y"), $fecha);
    $pdf->Ln();
}
$db->desconectar();

$pdf->Output();