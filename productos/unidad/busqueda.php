<?php 
include_once '../../login/check.php';
if (!empty($_POST)) {
	$folder="../../";
	include_once '../../class/unidad.php';
	extract($_POST);

	$unidad=new unidad;
	$uni=$unidad->mostrarTodo("nombre LIKE '%$nombre%'","nombre");
	$titulo=array("nombre"=>"Nombre","abreviatura"=>"Abreviatura");
	listadoTabla($titulo,$uni,1,"modificar.php","eliminar.php","ver.php");
}
?>