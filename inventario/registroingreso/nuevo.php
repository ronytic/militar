<?php
include_once '../../login/check.php';
$folder="../../";
$titulo="Registro de Ingreso de Productos";
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
//print_r($datos);
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
						<td width="100%"><?php campos("Producto","codproductos","select",$datos,0,array("style"=>"witdh:100%"))?><br><small>El Producto no se podrá modificar,el Producto que selecciono</small></td>
					</tr>
                    
                    <tr>
                    	<td><?php campos("Cantidad de Entrada","cantidadentrada","number","",0,array("required"=>"required","min"=>0,"step"=>1,"class"=>"der"))?><br><small>La Cantidad no se podrá modificar, Revise muy detalladamente la cantidad que Ingrese</small></td>
                    </tr>
                    <tr>
						<td><?php campos("Código","codigo","select",array("ABA-1"=>"ABA-1","ABA-2"=>"ABA-2","ABA-3"=>"ABA-3","ABA-4"=>"ABA-4"),0,array("required"=>"required"));?></td>
					</tr>
					<tr><td><?php campos("Guardar","guardar","submit");?></td></tr>
				</table>
                </form>
			</fieldset>
		</div>
    	<div class="clear"></div>
    </div>
</div>
<?php include_once $folder.'piepagina.php';?>