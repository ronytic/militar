<?php 
include_once("bd.php");
class menu extends bd{
	var $tabla="menu";
	function mostrarMenu($codUsuario){
		$this->campos=array("*");
		switch ($codUsuario) {
			case 1:{return $this->getRecords("superadmin=1 and activo=1","orden");}break;
			case 2:{return $this->getRecords("comandante=1 and activo=1","orden");}break;
			case 3:{return $this->getRecords("jefeservicio=1 and activo=1","orden");}break;
			case 4:{return $this->getRecords("encargadoclase=1 and activo=1","orden");}break;
		}
	}
}
?>