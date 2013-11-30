<?php
include_once '../../login/check.php';
$folder="../../";
$titulo="Registro de Productos";

include_once("../../class/unidad.php");
$unidad=new unidad;
$uni=todolista($unidad->mostrarTodo("","nombre"),"codunidad","nombre","");

include_once '../../funciones/funciones.php';
include_once '../../cabecerahtml.php';
?>
<?php include_once '../../cabecera.php';?>
<div class="grid_12">
	<div class="contenido">
    	<div class="prefix_3 grid_4 alpha">
			<fieldset>
				<div class="titulo">Registro de Producto</div>
                <form action="guardar.php" method="post" enctype="multipart/form-data">
				<table class="tablareg">
					<tr>
						<td><?php campos("Nombre","nombre","text","",1,array("required"=>"required"));?></td>
					</tr>
					<tr>
						<td><?php campos("Cantidad por Soldado","cantidad","text","",0,array("required"=>"required"));?></td>
					</tr>
                    <tr>
						<td><?php campos("Unidad de medida","codunidad","select",$uni,0,array("required"=>"required"));?></td>
					</tr>
                    <tr>
						<td><?php campos("Calorias","calorias","text","",0,array("required"=>"required"));?></td>
					</tr>
                    
					<tr><td><?php campos("Guardar","guardar","submit");?></td><td></td></tr>
				</table>
                </form>
			</fieldset>
		</div>
    	<div class="clear"></div>
    </div>
</div>
<?php include_once '../../piepagina.php';?>