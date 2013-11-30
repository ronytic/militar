<?php
include_once("../../impresion/pdf.php");
$titulo="Reporte de Datos de Ingreso de Inventario";
$id=$_GET['id'];
class PDF extends PPDF{
	
}


include_once("../../class/inventario.php");
include_once("../../class/productos.php");
include_once("../../class/unidad.php");
$inventario=new inventario;
$productos=new productos;
$unidad=new unidad;
$inv=array_shift($inventario->mostrar($id));
$pro=array_shift($productos->mostrar($inv['codproductos']));
$uni=array_shift($unidad->mostrar($pro['codunidad']));
$pdf=new PDF("P","mm","letter");
$pdf->AddPage();
$valores=array("Producto"=>$pro['nombre'],
				"Fecha Entrada"=>fecha2Str($inv['fechaentrada']),
				"Fecha Salida"=>fecha2Str($inv['fechasalida']),
				"Cantidad Entrada"=>($inv['cantidadentrada']." ".$uni['nombre']),
				"Cantidad Inventario"=>($inv['cantidadsalida']." ".$uni['nombre']),
				"Codigo"=>$inv['codigo']
			);

mostrarI($valores);

/*$foto="../foto/".$comi['foto'];
if(!empty($comi['foto']) && file_exists($foto)){
	$pdf->Image($foto,155,45,40,40);	
}*/

$pdf->Output();
?>