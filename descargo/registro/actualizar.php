<?php
include_once("../../login/check.php");
if(!empty($_POST)):
include_once("../../class/descargo.php");
$descargo=new descargo;
extract($_POST);
//empieza la copia de archivos
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
				$descargo->actualizar($valores,$id);
				$mensaje[]="SUS DATOS SE GUARDARON CORRECTAMENTE";


$titulo="Mensaje de Respuesta";
$folder="../../";
include_once '../../mensajeresultado.php';
endif;?>