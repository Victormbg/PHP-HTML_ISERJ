<?php
<?php
include("Produto.php");
class Nacional extends Produto {
	var $estado;
	var $aliquota;

	function setEstado($estado) {
		$this->estado=$estado;
	}
	function getEstado() {
		return $this->estado;
	}	
	//
	function setAliquota($aliquota) {
		$this->aliquota=$aliquota;
	}
	function getAliquota() {
		return $this->aliquota;
	}	  
}
?>
 