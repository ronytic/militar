<?php
include_once("../../login/check.php");
if(!empty($_POST)):
include_once("../../class/unidad.php");
$unidad=new unidad;
extract($_POST);
//empieza la copia de archivos
$valores=array("nombre"=>"'$nombre'",
				"abreviatura"=>"'$abreviatura'",
				);
				$unidad->actualizar($valores,$id);
				$mensaje[]="SUS DATOS SE GUARDARON CORRECTAMENTE";


$titulo="Mensaje de Respuesta";
$folder="../../";
include_once '../../mensajeresultado.php';
endif;?>