<?php
include ("Funcionario.php");
class pf extends Funcionario{
	var $sal;
	var $endereco;
		
	public function setSal($sal) {
		$this->sal = $sal;
	}
		
	public function getSal() {
		return $this->sal;
	}
		
	public function setEndereco($endereco) {
		$this->endereco = $endereco;
	}
		
	public function getEndereco() {
		return $this->endereco;
	}
}
?>