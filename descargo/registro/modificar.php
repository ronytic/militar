<?php
include_once '../../login/check.php';
$folder="../../";
$titulo="Modificar Descargo";
$id=$_GET['id'];
include_once '../../class/descargo.php';
$descargo=new descargo;
$des=array_shift($descargo->mostrar($id));
include_once '../../funciones/funciones.php';
include_once '../../cabecerahtml.php';
?>
<?php include_once '../../cabecera.php';?>
<div class="grid_12">
	<div class="contenido">
    	<div class="prefix_2 grid_4 alpha">
			<fieldset>
				<div class="titulo"><?php echo $titulo?></div>
                <form action="actualizar.php" method="post" enctype="multipart/form-data">
                <?php campos("","id","hidden",$id);?>
				<table class="tablareg">
					<tr>
						<td colspan="2"><?php campos("Dependencia","dependencia","text",$des['dependencia'],1,array("required"=>"required","size"=>80));?></td>
					</tr>
					<tr>
						<td colspan="2"><?php campos("Fuerza","fuerza","text",$des['fuerza'],0,array("required"=>"required","size"=>80));?></td>
					</tr>
                    <tr>
						<td colspan="2"><?php campos("Comprobante","comprobante","text",$des['comprobante'],0,array("required"=>"required","size"=>80));?></td>
					</tr>
                    <tr>
						<td colspan="2"><?php campos("Nota de almacen","notaalmacen","text",$des['notaalmacen'],0,array("required"=>"required","size"=>80));?></td>
					</tr>
                    <tr>
						<td colspan="2"><?php campos("Cargo Cuenta","cargocuenta","text",$des['cargocuenta'],0,array("required"=>"required","size"=>80));?></td>
					</tr>
                    <tr>
						<td colspan="2"><?php campos("Periodo","periodo","text",$des['periodo'],0,array("required"=>"required","size"=>80));?></td>
					</tr>
                    <tr>
						<td colspan="2"><?php campos("Motivo","motivo","textarea",$des['motivo'],0,array("required"=>"required","rows"=>10,"cols"=>60));?></td>
					</tr>
                    <tr>
						<td><?php campos("Cantidad 1","cantidad1","text",$des['cantidad1'],0,array("required"=>"required","size"=>20));?></td>
                        <td><?php campos("Descripción 1","descripcion1","text",$des['descripcion1'],0,array("required"=>"required","size"=>60));?></td>
					</tr>
                    <tr>
						<td><?php campos("Cantidad 2","cantidad2","text",$des['cantidad2'],0,array(""=>"","size"=>20));?></td>
                        <td><?php campos("Descripción 2","descripcion2","text",$des['descripcion2'],0,array(""=>"","size"=>60));?></td>
					</tr>
                    <tr>
						<td><?php campos("Cantidad 3","cantidad3","text",$des['cantidad3'],0,array(""=>"","size"=>20));?></td>
                        <td><?php campos("Descripción 3","descripcion3","text",$des['descripcion3'],0,array(""=>"","size"=>60));?></td>
					</tr>
                    <tr>
						<td><?php campos("Cantidad 4","cantidad4","text",$des['cantidad4'],0,array(""=>"","size"=>20));?></td>
                        <td><?php campos("Descripción 4","descripcion4","text",$des['descripcion4'],0,array(""=>"","size"=>60));?></td>
					</tr>
                    <tr>
						<td><?php campos("Cantidad 5","cantidad5","text",$des['cantidad5'],0,array(""=>"","size"=>20));?></td>
                        <td><?php campos("Descripción 5","descripcion5","text",$des['descripcion5'],0,array(""=>"","size"=>60));?></td>
					</tr>
                    <tr>
						<td><?php campos("Cantidad 6","cantidad6","text",$des['cantidad6'],0,array(""=>"","size"=>20));?></td>
                        <td><?php campos("Descripción 6","descripcion6","text",$des['descripcion6'],0,array(""=>"","size"=>60));?></td>
					</tr>
                    <tr>
						<td><?php campos("Cantidad 7","cantidad7","text",$des['cantidad7'],0,array(""=>"","size"=>20));?></td>
                        <td><?php campos("Descripción 7","descripcion7","text",$des['descripcion7'],0,array(""=>"","size"=>60));?></td>
					</tr>
                    <tr>
						<td><?php campos("Cantidad 8","cantidad8","text",$des['cantidad8'],0,array(""=>"","size"=>20));?></td>
                        <td><?php campos("Descripción 8","descripcion8","text",$des['descripcion8'],0,array(""=>"","size"=>60));?></td>
					</tr>
                    <tr>
						<td><?php campos("Cantidad 9","cantidad9","text",$des['cantidad9'],0,array(""=>"","size"=>20));?></td>
                        <td><?php campos("Descripción 9","descripcion9","text",$des['descripcion9'],0,array(""=>"","size"=>60));?></td>
					</tr>
                    <tr>
						<td><?php campos("Cantidad 10","cantidad10","text",$des['cantidad10'],0,array(""=>"","size"=>20));?></td>
                        <td><?php campos("Descripción 10","descripcion10","text",$des['descripcion10'],0,array(""=>"","size"=>60));?></td>
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