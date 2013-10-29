<?php
include_once("../../login/check.php");
if(!empty($_POST)):
include_once("../../class/descargo.php");
$descargo=new descargo;

extract($_POST);
//empieza la copia de archivos
/*
if(($_FILES['curriculum']['type']=="application/pdf" || $_FILES['curriculum']['type']=="application/msword" || $_FILES['curriculum']['type']=="application/vnd.openxmlformats-officedocument.wordprocessingml.document") && $_FILES['curriculum']['size']<="500000000"){
	@$curriculum=$_FILES['curriculum']['name'];
	@copy($_FILES['curriculum']['tmp_name'],"../curriculum/".$_FILES['curriculum']['name']);
}else{
	//mensaje que no es valido el tipo de archivo	
	$mensaje[]="Archivo no válido del curriculum. Verifique e intente nuevamente";
}
*/
$valores=array(	"dependencia"=>"'$dependencia'",
				"fuerza"=>"'$fuerza'",
				"comprobante"=>"'$comprobante'",
				"notaalmacen"=>"'$notaalmacen'",
				"cargocuenta"=>"'$cargocuenta'",
				"periodo"=>"'$periodo'",
				"motivo"=>"'$motivo'",
				"cantidad1"=>"'$cantidad1'",
				"descripcion1"=>"'$descripcion1'",
				"cantidad2"=>"'$cantidad2'",
				"descripcion2"=>"'$descripcion2'",
				"cantidad3"=>"'$cantidad3'",
				"descripcion3"=>"'$descripcion3'",
				"cantidad4"=>"'$cantidad4'",
				"descripcion4"=>"'$descripcion4'",
				"cantidad5"=>"'$cantidad5'",
				"descripcion5"=>"'$descripcion5'",
				"cantidad6"=>"'$cantidad6'",
				"descripcion6"=>"'$descripcion6'",
				"cantidad7"=>"'$cantidad7'",
				"descripcion7"=>"'$descripcion7'",
				"cantidad8"=>"'$cantidad8'",
				"descripcion8"=>"'$descripcion8'",
				"cantidad9"=>"'$cantidad9'",
				"descripcion9"=>"'$descripcion9'",
				"cantidad10"=>"'$cantidad10'",
				"descripcion10"=>"'$descripcion10'",
				);
				$descargo->insertar($valores);
				$mensaje[]="SUS DATOS SE GUARDARON CORRECTAMENTE";



$titulo="Mensaje de Respuesta";
$folder="../../";
include_once '../../mensajeresultado.php';
endif;?>