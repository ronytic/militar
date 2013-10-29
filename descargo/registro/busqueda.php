<?php 
include_once '../../login/check.php';
if (!empty($_POST)) {
	$folder="../../";
	include_once '../../class/descargo.php';
	extract($_POST);

	$descargo=new descargo;
	$des=$descargo->mostrarTodo("comprobante LIKE '%$comprobante%'");
	$titulo=array("dependencia"=>"Dependencia","comprobante"=>"Comprobante","notaalmacen"=>"Nota almacen","cargocuenta"=>"Cargo Cuenta","periodo"=>"Periodo");
	listadoTabla($titulo,$des,1,"modificar.php","eliminar.php","ver.php");
}
?>