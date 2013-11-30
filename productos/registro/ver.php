<?php
include_once("../../impresion/pdf.php");
$titulo="Reporte de Datos de Producto";
$id=$_GET['id'];
class PDF extends PPDF{
	
}

include_once("../../class/productos.php");
$productos=new productos;
$pro=array_shift($productos->mostrar($id));

include_once("../../class/unidad.php");
$unidad=new unidad;
$uni=array_shift($unidad->mostrar($pro['codunidad']));

$pdf=new PDF("P","mm","letter");

$pdf->AddPage();
mostrarI(array("Nombre"=>$pro['nombre'],
				"Cantidad por Soldado"=>$pro['cantidad']." ".$uni['nombre'],
				"Calorias"=>$pro['calorias']
			));

/*$foto="../foto/".$emp['foto'];
if(!empty($emp['foto']) && file_exists($foto)){
	$pdf->Image($foto,140,50,40,40);	
}
*/
$pdf->Output();
?>