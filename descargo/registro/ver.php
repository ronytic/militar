<?php
include_once("../../impresion/pdf.php");
$titulo="Planilla de Descargo de Cuentas";
$id=$_GET['id'];
class PDF extends PPDF{
	
}

include_once("../../class/descargo.php");
$descargo=new descargo;
$des=array_shift($descargo->mostrar($id));
$pdf=new PDF("P","mm","letter");

$pdf->AddPage();
mostrarI(array("Nombre"=>$pro['nombre'],
				"Cantidad por Soldado"=>$pro['cantidad']." Kg.",
				"Calorias"=>$pro['calorias']
			));

/*$foto="../foto/".$emp['foto'];
if(!empty($emp['foto']) && file_exists($foto)){
	$pdf->Image($foto,140,50,40,40);	
}
*/
$pdf->Output();
?>