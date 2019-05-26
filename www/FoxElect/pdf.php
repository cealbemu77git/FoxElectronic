<?php

require_once("config/db.php");
require_once("classes/Login.php");
require_once('fpdf/fpdf.php');

date_default_timezone_set("America/Bogota");


$host = DB_HOST;
$user = DB_USER;
$cont = DB_PASS;
$db = DB_NAME;

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->Image('img/logo.png',10,10,-150);
$pdf->Ln(20);
$pdf->Cell(90,20,'Fecha: '. date("d-m-Y H:i:s") .'',0);
$pdf->Ln(10);
$pdf->Cell(100,20,utf8_decode('REPORTE DE PRODUCTOS - TIENDA FOX ELECTRONICS'));
$pdf->Ln(10);
$pdf->SetFont('Arial','B',8);
$pdf->Cell(25,20,'CODIGO', 0,0,'C');
$pdf->Cell(40,20,'NOMBRE DE PRODUCTO', 0,0,'C');
$pdf->Cell(25,20,'CANTIDAD', 0,0,'C');
$pdf->Cell(25,20,'PRECIO', 0,0,'C');
$pdf->Cell(30,20,'FECHA DE REGISTRO', 0,0,'C');


$pdf->Ln(10);


$pdf->SetFont('Arial','',8);


$conec = mysqli_connect($host,$user,$cont,$db);
// Check connection
if (!$conec) {
    die("Connection failed: " . mysqli_connect_error());
}

$query_select = 'SELECT * FROM products';
$result = mysqli_query($conec,$query_select );

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($reg = mysqli_fetch_assoc($result)) {
    	


$pdf->Cell(25,20, $reg['codigo_producto'], 0,0,'C');

$pdf->Cell(40,20, utf8_decode($reg['nombre_producto']), 0,0, 'C');

$pdf->Cell(25,20, utf8_decode($reg['cantidad_producto']), 0,0, 'C');

$pdf->Cell(25,20, utf8_decode($reg['precio_producto']), 0,0, 'C');

$pdf->Cell(30,20, utf8_decode($reg['date_added']), 0,0, 'C');

$pdf->Ln(10);

}
}

$pdf->Output();
?>
