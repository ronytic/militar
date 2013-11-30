<?php
include_once("../../impresion/pdf.php");
$titulo="Reporte de Unidad de Medida";
$id=$_GET['id'];
class PDF extends PPDF{
	
}

include_once("../../class/unidad.php");
$unidad=new unidad;
$uni=array_shift($unidad->mostrar($id));
$pdf=new PDF("P","mm","letter");

$pdf->AddPage();
mostrarI(array("Nombre de la Unidad"=>$uni['nombre'],
			));

/*$foto="../foto/".$emp['foto'];
if(!empty($emp['foto']) && file_exists($foto)){
	$pdf->Image($foto,140,50,40,40);	
}
*/
$pdf->Output();
?>