<?php
class Produto {
	var $codProd;
	var $descricao;
	var $quant;
	var $preco;
	function setCodProd($codProd) {
	   $this->codProd=$codProd;
	}
	function getCodProd() {
		return $this->codProd;
	}	
	//
	function setDescricao($descricao) {
		$this->descricao=$descricao;
	}
	function getDescricao() {
		return $this->descricao;
	}	  
	 //
	function setQuant($quant) {
	   $this->quant=$quant;
	}
	function getQuant() {
		return $this->quant;
	}	
	//
	function setPreco($preco) {
		$this->preco=$preco;
	}
	function getPreco() {
		return $this->preco;
	}	
}
?>