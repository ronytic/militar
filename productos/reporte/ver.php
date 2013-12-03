<?php
include_once("../../login/check.php");
include_once("../../impresion/pdf.php");
$titulo="Reporte de Productos ";
extract($_GET);
class PDF extends PPDF{
	function Cabecera(){
		global $fechasalida;
		if($fechasalida!="%"){
		$this->CuadroCabecera(30,"Fecha Salida:",20,fecha2Str($fechasalida));
		}
		$this->Ln();
		$this->TituloCabecera(10,"N");
		$this->TituloCabecera(80,"Nombre Producto");
		
		$this->TituloCabecera(20,"Calorias");
		$this->TituloCabecera(40,"Cantidad por Soldado");
		$this->TituloCabecera(35,"Unidad de Medida");

	}	
}


$codproductos=$codproductos!=""?$codproductos:"%";
$fechasalida=$fechasalida!=""?$fechasalida:"%";
$existente=$existente=="1"?'and cantidadsalida>0':'';
include_once("../../class/productos.php");
include_once("../../class/unidad.php");
include_once("../../class/usuarios.php");
$nombre=$nombre?$nombre:'%';
$productos=new productos;
$unidad=new unidad;
$usuarios=new usuarios;
$where="nombre LIKE '%$nombre%'";
/*if(!empty($fechacontrato)){
	$where="`fechacontrato`<='$fechacontrato'";
}
if(!empty($codobra)){
	$where=(empty($fechacontrato))?"`codobra`=$codobra":$where." and `codobra`=$codobra";
}
if(!empty($tipocontrato)){
	$where=(empty($where))?$where."`tipocontrato` LIKE '%$tipocontrato%'":$where." and `tipocontrato` LIKE '%$tipocontrato%'";
}*/

//echo $where;
$pdf=new PDF("P","mm","legal");
$pdf->AddPage();
$totales=array();
$cantidade=0;
$cantidads=0;
foreach($productos->mostrarTodos($where,"nombre") as $pro){$i++;
	$uni=array_shift($unidad->mostrar($pro['codunidad']));
	$pdf->CuadroCuerpo(10,$i,0,"R",1);
	$pdf->CuadroCuerpo(80,$pro['nombre'],0,"",1);
	
	$pdf->CuadroCuerpo(20,$pro['calorias'],0,"C",1);
	$pdf->CuadroCuerpo(40,$pro['cantidad'],0,"C",1);
	$pdf->CuadroCuerpo(35,($uni['nombre']),0,"L",1);
	$pdf->ln();
}

$pdf->ln();$pdf->ln();$pdf->ln();$pdf->ln();$pdf->ln();$pdf->ln();
$usu4=array_shift($usuarios->mostrarTodo("nivel=4"));
$usu3=array_shift($usuarios->mostrarTodo("nivel=3"));
$usu2=array_shift($usuarios->mostrarTodo("nivel=2"));
$pdf->CuadroCuerpoPersonalizado(90,$usu4['grado']." ".$usu4['nombre']." ".$usu4['paterno']." ".$usu4['materno'],0,"C",0,"B");
$pdf->CuadroCuerpoPersonalizado(90,$usu3['grado']." ".$usu3['nombre']." ".$usu3['paterno']." ".$usu3['materno'],0,"C",0,"B");
$pdf->ln();
$pdf->CuadroCuerpo(90,$usu4['cargo'],0,"C",0);
$pdf->CuadroCuerpo(90,$usu3['cargo'],0,"C",0);
$pdf->ln();$pdf->ln();$pdf->ln();$pdf->ln();$pdf->ln();$pdf->ln();
$pdf->CuadroCuerpoPersonalizado(180,$usu2['grado']." ".$usu2['nombre']." ".$usu2['paterno']." ".$usu2['materno'],0,"C",0,"B");
$pdf->ln();
$pdf->CuadroCuerpo(180,$usu2['cargo'],0,"C",0);
$pdf->Output();
?>