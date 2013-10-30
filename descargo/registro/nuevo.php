<?php
include_once '../../login/check.php';
$folder="../../";
$titulo="Registro de Descargo";
include_once '../../funciones/funciones.php';
include_once '../../cabecerahtml.php';
?>
<?php include_once '../../cabecera.php';?>
<div class="grid_12">
	<div class="contenido">
    	<div class="prefix_2 grid_4 alpha">
			<fieldset>
				<div class="titulo"><?php echo $titulo;?></div>
                <form action="guardar.php" method="post" enctype="multipart/form-data">
				<table class="tablareg">
					<tr>
						<td colspan="2"><?php campos("Dependencia","dependencia","text","",1,array("required"=>"required","size"=>80));?></td>
					</tr>
					<tr>
						<td colspan="2"><?php campos("Fuerza","fuerza","text","",0,array("required"=>"required","size"=>80));?></td>
					</tr>
                    <tr>
						<td colspan="2"><?php campos("Comprobante","comprobante","text","",0,array("required"=>"required","size"=>80));?></td>
					</tr>
                    <tr>
						<td colspan="2"><?php campos("Nota de almacen","notaalmacen","text","",0,array("required"=>"required","size"=>80));?></td>
					</tr>
                    <tr>
						<td colspan="2"><?php campos("Cargo Cuenta","cargocuenta","text","",0,array("required"=>"required","size"=>80));?></td>
					</tr>
                    <tr>
						<td colspan="2"><?php campos("Periodo","periodo","text","",0,array("required"=>"required","size"=>80));?></td>
					</tr>
                    <tr>
						<td colspan="2"><?php campos("Motivo","motivo","textarea","",0,array("required"=>"required","rows"=>10,"cols"=>60));?></td>
					</tr>
                    <tr>
						<td><?php campos("Cantidad 1","cantidad1","text","",0,array("required"=>"required","size"=>20));?></td>
                        <td><?php campos("Descripción 1","descripcion1","text","",0,array("required"=>"required","size"=>60));?></td>
					</tr>
                    <tr>
						<td><?php campos("Cantidad 2","cantidad2","text","",0,array(""=>"","size"=>20));?></td>
                        <td><?php campos("Descripción 2","descripcion2","text","",0,array(""=>"","size"=>60));?></td>
					</tr>
                    <tr>
						<td><?php campos("Cantidad 3","cantidad3","text","",0,array(""=>"","size"=>20));?></td>
                        <td><?php campos("Descripción 3","descripcion3","text","",0,array(""=>"","size"=>60));?></td>
					</tr>
                    <tr>
						<td><?php campos("Cantidad 4","cantidad4","text","",0,array(""=>"","size"=>20));?></td>
                        <td><?php campos("Descripción 4","descripcion4","text","",0,array(""=>"","size"=>60));?></td>
					</tr>
                    <tr>
						<td><?php campos("Cantidad 5","cantidad5","text","",0,array(""=>"","size"=>20));?></td>
                        <td><?php campos("Descripción 5","descripcion5","text","",0,array(""=>"","size"=>60));?></td>
					</tr>
                    <tr>
						<td><?php campos("Cantidad 6","cantidad6","text","",0,array(""=>"","size"=>20));?></td>
                        <td><?php campos("Descripción 6","descripcion6","text","",0,array(""=>"","size"=>60));?></td>
					</tr>
                    <tr>
						<td><?php campos("Cantidad 7","cantidad7","text","",0,array(""=>"","size"=>20));?></td>
                        <td><?php campos("Descripción 7","descripcion7","text","",0,array(""=>"","size"=>60));?></td>
					</tr>
                    <tr>
						<td><?php campos("Cantidad 8","cantidad8","text","",0,array(""=>"","size"=>20));?></td>
                        <td><?php campos("Descripción 8","descripcion8","text","",0,array(""=>"","size"=>60));?></td>
					</tr>
                    <tr>
						<td><?php campos("Cantidad 9","cantidad9","text","",0,array(""=>"","size"=>20));?></td>
                        <td><?php campos("Descripción 9","descripcion9","text","",0,array(""=>"","size"=>60));?></td>
					</tr>
                    <tr>
						<td><?php campos("Cantidad 10","cantidad10","text","",0,array(""=>"","size"=>20));?></td>
                        <td><?php campos("Descripción 10","descripcion10","text","",0,array(""=>"","size"=>60));?></td>
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