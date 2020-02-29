<?php
include ("Funcionario.php");
class PessoaFisica extends Pessoa{
	private $nome;
	private $renda;
	
	function setNome($nome){
		$this->nome=$nome;	
	}
	function setRenda($renda){
		$this->renda = $renda;
	}
	function getNome(){
		return $this->nome;
	}
	function getRenda(){
		return $this->renda;
	}
}

?>