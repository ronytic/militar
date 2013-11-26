<?php
include_once("../../impresion/fpdf/fpdf.php");
$titulo="Planilla de Descargo de Cuentas";
$id=$_GET['id'];

include_once("../../class/descargo.php");
include_once("../../class/usuarios.php");
$usuarios=new usuarios;
$usu4=array_shift($usuarios->mostrarTodo("nivel=4"));
$usu3=array_shift($usuarios->mostrarTodo("nivel=3"));
$usu2=array_shift($usuarios->mostrarTodo("nivel=2"));
$descargo=new descargo;
$des=array_shift($descargo->mostrar($id));
$pdf=new FPDF("P","mm","letter");
$pdf->SetAutoPageBreak(true,0);
$pdf->SetFont("arial","",11);
$pdf->AddPage();
$pdf->Line(10,10,210,10);
$pdf->Line(10,10,10,270);
$pdf->Line(210,10,210,270);
$pdf->Line(10,270,210,270);


$pdf->SetFont("arial","B",11);
$pdf->SetXY(10,10);
$pdf->Cell(60,6,"MINISTERIO DE DEFENSA",0,0,"C");
$pdf->SetFont("arial","",9);
$pdf->SetXY(10,16);
$pdf->Cell(60,6,utf8_decode("DIRECCIÓN GENERAL DE ASUNTOS"),0,0,"C");
$pdf->SetXY(10,22);
$pdf->Cell(60,6,utf8_decode("ADMINISTRATIVOS"),0,0,"C");
$pdf->SetXY(10,28);
$pdf->Cell(60,6,utf8_decode("AREA DE CARGOS CUENTA"),0,0,"C");

$pdf->Line(10,34,210,34); //Linea debajo del Titulo

$pdf->Line(70,10,70,34);
$pdf->Line(140,10,140,34);

$pdf->SetFont("arial","B",11);
$pdf->SetXY(70,14);
$pdf->Cell(70,6,"FORMULARIO DE DESCARGO",0,0,"C");
$pdf->SetXY(70,20);
$pdf->Cell(70,6,"DE BIENES RECIBIDOS",0,0,"C");

$pdf->SetFont("arial","",11);
$pdf->SetXY(140,14);
$pdf->Cell(70,6,"FORMULARIO DE DESCARGO",0,0,"C");
$pdf->SetXY(140,20);
$pdf->Cell(70,6,utf8_decode("Fecha de Presentación: ".$des['fecha']),0,0,"C");


$b=0;
$pdf->SetFont("arial","",8);
$pdf->SetXY(10,34);
$pdf->SetFont("arial","B",8);
$pdf->Cell(20,4,utf8_decode("Del Sr.:"),$b,0,"L");
$pdf->SetFont("arial","",8);
$pdf->Cell(45,4,utf8_decode($usu2['grado']." ".$usu2['nombre']." ".$usu2['paterno']." ".$usu2['materno']),$b,0,"C");
$pdf->Cell(45,4,utf8_decode("".$usu4['grado']." ".$usu4['nombre']." ".$usu4['paterno']." ".$usu4['materno']),$b,1,"C");

$pdf->SetFont("arial","B",8);
$pdf->Cell(20,4,utf8_decode("Cargo:"),$b,0,"L");
$pdf->SetFont("arial","",8);
$pdf->Cell(45,4,utf8_decode("Cmte. de Instituto"),$b,0,"C");
$pdf->Cell(45,4,utf8_decode("Encargado C-I"),$b,1,"C");
$pdf->SetFont("arial","B",8);
$pdf->Cell(20,4,utf8_decode("Dependencia:"),$b,0,"L");
$pdf->SetFont("arial","",8);
$pdf->Cell(90,4,utf8_decode($des['dependencia']),$b,1,"C");

$pdf->SetFont("arial","B",8);
$pdf->Cell(20,4,utf8_decode("Fuerza:"),$b,0,"L");
$pdf->SetFont("arial","",8);
$pdf->Cell(90,4,utf8_decode($des['fuerza']),$b,1,"C");

$pdf->SetFont("arial","B",8);
$pdf->Cell(20,4,utf8_decode("Cmpte. Diario de Almacen:"),$b,0,"L");
$pdf->SetFont("arial","",8);
$pdf->Cell(45,4,utf8_decode($des['comprobante']),$b,0,"R");
$pdf->Cell(45,4,utf8_decode("Nota: ".$des['notaalmacen']),$b,1,"C");

$pdf->SetFont("arial","B",8);
$pdf->Cell(20,4,utf8_decode("Cargo de Cta:"),$b,0,"L");
$pdf->SetFont("arial","",8);
$pdf->Cell(45,4,utf8_decode($des['cargocuenta']),$b,0,"R");
$pdf->Cell(45,4,utf8_decode("Periodo: ".$des['periodo']),$b,1,"C");

$pdf->SetXY(120,34);
$pdf->MultiCell(90,4,"Motivo:\n".txt($des['motivo']),$b);

$pdf->Line(120,34,120,58);
$pdf->Line(10,58,210,58);
$pdf->SetFont("arial","B",9);
$pdf->SetXY(10,59);
$pdf->MultiCell(20,4,txt("CANTIDAD"),$b,"C");
$pdf->SetXY(30,59);
$pdf->MultiCell(20,4,txt("UNIDAD DE MEDIDA"),$b,"C");
$pdf->SetXY(50,59);
$pdf->MultiCell(70,4,txt("DESCRIPCIÓN"),$b,"C");

$pdf->SetXY(120,59);
$pdf->MultiCell(30,4,txt("INGRESO"),$b,"C");
$pdf->SetXY(150,59);
$pdf->MultiCell(30,4,txt("SALIDA"),$b,"C");
$pdf->SetXY(180,59);
$pdf->MultiCell(30,4,txt("SALDO O RESERVA"),$b,"C");

$pdf->Line(10,68,210,68);

//Vertical
$pdf->Line(30,58,30,220);
$pdf->Line(50,58,50,220);
$pdf->Line(120,58,120,240);
$pdf->Line(150,58,150,240);
$pdf->Line(180,58,180,240);

$pdf->SetXY(10,68);
$pdf->SetFont("arial","UB",9);
$pdf->Cell(20,4,txt(""),$b,0,"C");
$pdf->Cell(20,4,txt(""),$b,0,"C");
$pdf->Cell(70,4,txt("RECIBIDOS DE MINDEFENSA"),$b,1,"C");

$pdf->SetFont("arial","",9);
$y=75;
$cant=0;
for($i=1;$i<=10;$i++){
$cant+=$des['cantidad'.$i];
$pdf->SetXY(10,$y);
$pdf->Cell(20,4,txt($des['cantidad'.$i]),$b,0,"C");
$pdf->Cell(20,4,txt("QQ."),$b,0,"C");
$pdf->Cell(70,4,txt($des['descripcion'.$i]),$b,0,"C");
$pdf->Cell(30,4,txt(number_format($des['cantidad'.$i],2)),$b,0,"R");
$y+=5;
}
$pdf->SetXY(10,128);
$pdf->SetFont("arial","UB",9);
$pdf->Cell(20,4,txt(""),$b,0,"C");
$pdf->Cell(20,4,txt(""),$b,0,"C");
$pdf->Cell(70,4,txt("DISTRIBUCIÓN DE CLASE - 1"),$b,1,"C");

$pdf->SetFont("arial","",9);
$y=138;
for($i=1;$i<=10;$i++){
$pdf->SetXY(10,$y);
$pdf->Cell(20,4,txt($des['cantidad'.$i]),$b,0,"C");
$pdf->Cell(20,4,txt("QQ."),$b,0,"C");
$pdf->Cell(70,4,txt($des['descripcion'.$i]),$b,0,"C");
$pdf->Cell(30,4,txt(""),$b,0,"R");
$pdf->Cell(30,4,txt(number_format($des['cantidad'.$i],2)),$b,0,"R");
$y+=5;
}


$pdf->Line(10,220,210,220);

$pdf->SetXY(10,220);
$pdf->Cell(110,4,txt("Total"),$b,0,"R");
$pdf->Cell(30,4,txt(number_format($cant,2)),1,0,"R");
$pdf->Cell(30,4,txt(number_format($cant,2)),1,0,"R");
$pdf->Ln();
$pdf->Cell(110,4,txt("Reserva, Saldo por Descargar"),$b,0,"R");
$pdf->Cell(30,4,txt("--------"),1,0,"R");
$pdf->Cell(30,4,txt("--------"),1,0,"R");
$pdf->Ln();
$pdf->Cell(110,4,txt("Total General"),$b,0,"R");
$pdf->Cell(30,4,txt(number_format($cant,2)),1,0,"R");
$pdf->Cell(30,4,txt(number_format($cant,2)),1,0,"R");

$pdf->Line(10,240,210,240);
$pdf->Line(75,240,75,270);
$pdf->Line(150,240,150,270);

$pdf->SetXY(10,260);
$pdf->SetFont("arial","",8);
$pdf->Cell(65,4,utf8_decode($usu4['grado']." ".$usu4['nombre']." ".$usu4['paterno']." ".$usu4['materno']),$b,0,"C");
$pdf->Cell(75,4,utf8_decode($usu3['grado']." ".$usu3['nombre']." ".$usu3['paterno']." ".$usu3['materno']),$b,0,"C");
$pdf->Cell(60,4,utf8_decode($usu2['grado']." ".$usu2['nombre']." ".$usu2['paterno']." ".$usu2['materno']),$b,0,"C");
$pdf->Ln();
$pdf->Cell(65,4,utf8_decode("C.I.: ".$usu4['ci']),$b,0,"C");
$pdf->Cell(75,4,utf8_decode("C.I.: ".$usu3['ci']),$b,0,"C");
$pdf->Cell(60,4,utf8_decode("C.I.: ".$usu2['ci']),$b,0,"C");
/*$foto="../foto/".$emp['foto'];
if(!empty($emp['foto']) && file_exists($foto)){
	$pdf->Image($foto,140,50,40,40);	
}
*/
$pdf->Output();
function txt($t){
	return utf8_decode($t);	
}
?>
