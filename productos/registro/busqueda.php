<?php 
include_once '../../login/check.php';
if (!empty($_POST)) {
	$folder="../../";
	include_once '../../class/productos.php';
	extract($_POST);

	$productos=new productos;
	$pro=$productos->mostrarTodo("nombre LIKE '%$nombre%'","nombre");
	$titulo=array("nombre"=>"Nombre","cantidad"=>"Cantidad/Soldado","calorias"=>"Calorias");
	listadoTabla($titulo,$pro,1,"modificar.php","eliminar.php","ver.php");
}
?>