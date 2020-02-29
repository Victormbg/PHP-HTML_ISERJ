<?php
include ("Pessoa");
class PessoaFisica extends Pessoa{
	private $nome;
	private $renda;
	
	function setNome($nome){
		$this->nome=$nome;	
	}
	function setRend($renda){
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