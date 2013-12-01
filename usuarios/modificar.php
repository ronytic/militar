<?php
include_once '../login/check.php';
$folder="../";
$titulo="Modificar Usuario";
$narchivo="usuarios";
include_once("../class/".$narchivo.".php");
${$narchivo}=new $narchivo;
$cod=$_GET['id'];
$usu=array_shift(${$narchivo}->mostrar($cod));
include_once '../funciones/funciones.php';
include_once '../cabecerahtml.php';
?>
<?php include_once '../cabecera.php';?>
    	<div class="prefix_3 grid_4 suffix_3">
			<fieldset>
				<div class="titulo"><?php echo $titulo;?></div>
                <form action="actualizar.php" method="post">
                <?php campos("","cod","hidden",$cod)?>
				<table class="tablareg">
                	<tr>
						<td><?php campos("Usuario","usuario","text",$usu['usuario'],1,array("required"=>"required","size"=>30));?></td>
						<td><?php campos("Contraseña","password","text","",0,array("required"=>"required","size"=>30));?></td>
					</tr>
                    <tr>
						<td><?php campos("Nombres","nombres","text",$usu['nombre'],0,array("required"=>"required","size"=>30));?></td>
						<td><?php campos("Paterno","paterno","text",$usu['paterno'],0,array("required"=>"required","size"=>30));?></td>
					</tr>
                    <tr>
                    	<td><?php campos("Materno","materno","text",$usu['materno'],0,array("required"=>"required","size"=>30));?></td>
                    </tr>
                    <tr>
                    	<td><?php campos("Ci","ci","text",$usu['ci'],0,array("required"=>"required","size"=>30));?></td>
                        <td><?php campos("Grado","grado","text",$usu['grado'],0,array("required"=>"required","size"=>30));?></td>
                    </tr>
                    <tr>
						<td><?php campos("Cargo","cargo","select",array("Comandante"=>"Comandante","Jefe de Servicio"=>"Jefe de Servicio","Encargado de Clase 1"=>"Encargado de Clase I"),0,array("required"=>"required","size"=>30),$usu['cargo']);?></td>
						<td><?php campos("Nivel","nivel","select",array("2"=>"Comandante","3"=>"Jefe de Servicio","4"=>"Encargado de Clase I"),"","",$usu['nivel']);?></td>
					</tr>
					<tr>
						<td colspan="2"><?php campos("Observación","observacion","textarea",$usu['obs'],"",array("rows"=>5,"cols"=>50,"size"=>30));?></td>
					</tr>
					<tr><td><?php campos("Guardar Usuario","guardar","submit");?></td><td></td></tr>
				</table>
                </form>
			</fieldset>
		</div>

<?php include_once '../piepagina.php';?>