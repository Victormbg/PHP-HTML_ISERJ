<?php
//Exercício: fazer as classes mãe e filhas, form de entrada para produt + estrangeiro/nacional. Script de tratamento e form de exibição.
class Produto{
	private int $codProd;
	private String $descricao;
	private int $quant;
	private double $preco;
	
	function setCodProd(int $param0){
		$this->codProd = $codProd;
	}
	function getCodProd(){
	return $this->codProd;
	}
}