<?php
include_once '../../login/check.php';
$folder="../../";
$titulo="Registro de Salida de Productos";
include_once '../../funciones/funciones.php';
include_once("../../class/productos.php");
$productos=new productos;

include_once("../../class/unidad.php");
$unidad=new unidad;

$pro=($productos->mostrarTodo("","nombre"));
$i=0;
foreach($pro as $p){$i++;
	$uni=array_shift($unidad->mostrar($p['codunidad']));
	$datos[$p['codproductos']]=$p['nombre']." en ".$uni['nombre'];
}
$tipo=array("1"=>"Desayuno","2"=>"Sopa","3"=>"Segundo","4"=>"Postre","5"=>"Té Tarde","6"=>"Cena");
include_once $folder.'cabecerahtml.php';
?>
<?php include_once $folder.'cabecera.php';?>
<div class="grid_12">
	<div class="contenido">
    	<div class="prefix_3 grid_6 alpha">
			<fieldset>
				<div class="titulo"><?php echo $titulo?></div>
                <form action="guardar.php" method="post" enctype="multipart/form-data">
				<table class="tablareg">
					<tr>
						<td><?php campos("Producto","codproductos","select",$datos,0,array("required"=>"required","style"=>"witdh:100%"))?><small>El Producto no se podrá modificar,el Producto que selecciono</small></td>
					</tr>
                    
                    <tr>
                    	<td><?php campos("Cantidad de Salida","cantidadsalida","number","",0,array("required"=>"required","min"=>0,"step"=>1,"class"=>"der"))?><br><small>La Cantidad no se podrá modificar, Revise muy detalladamente la cantidad de salida</small></td>
                    </tr>
                    <tr>
                    	<td><?php campos("Fecha de Salida","fechasalida","date",date("Y-m-d"),9,array("disabled"=>"disabled","readonly"=>"readonly"))?></td>
                    </tr>
					<tr><td><div class="rojoC">Verifique la cantidad de Salida, No se podrá modificar posteriormente</div><?php campos("Guardar","guardar","submit");?></td><td></td></tr>
				</table>
                </form>
			</fieldset>
		</div>
    	<div class="clear"></div>
    </div>
</div>
<?php include_once $folder.'piepagina.php';?>